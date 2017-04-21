<?php
/**
 * Vendor_RestClient
 *
 * PHP version 5.2+
 *
 * @category
 * @package
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_RestClient
{
    /**
     * options
     *
     * @var    mixed
     * @access public
     */
    public $options;

    /**
     * baseUrl
     *
     * @var    mixed
     * @access public
     */
    public $baseUrl;
    /**
     * __construct
     *
     * @param mixed $options
     *
     * @access public
     *
     * @return mixed
     */
    public function __construct($accessAppId, $accessAppSecret, $baseUrl = null, $options = array())
    {
        $defaultOptions = array(
                'headers'       => array('Expect'=>'','Connection'=> 'keep-alive'),
                'vars'    => array(),
                'user_agent'    => "open api sdk/1.0",
                'curl_options'  => array(
                    CURLOPT_CONNECTTIMEOUT =>5,
                    CURLOPT_TIMEOUT => 5000,
                    CURLOPT_DNS_CACHE_TIMEOUT=>7200,
                    CURLOPT_HEADER => true
                ),
                );
        $this->baseUrl            = $baseUrl;
        $this->options            = array_merge($defaultOptions, $options);
        //$this->options['curl_options'] = array_merge($defaultOptions['curl_options'], $options['curl_options']);
        $this->options['access_app_id'] = $accessAppId;
        $this->options['access_app_secret'] = $accessAppSecret;
        if (isset($options['headers']) && is_array($options['headers'])) {
            $this->options['headers'] = array_merge(
                $this->options['headers'],
                $options['headers']
            );
        }
    }

    /**
     * __call
     *
     * @param mixed $method
     * @param mixed $args
     *
     * @access public
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        $url      = $args[0];
        $vars     = isset($args[1]) ? $args[1] : array();
        $headers  = isset($args[2]) ? $args[2] : array();
        $start = microtime(true);

        $handle =  curl_init();
        $curlopt = array(
                CURLOPT_HEADER         => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT      => $this->options['user_agent']
                );

        $headers = array_merge($this->options['headers'], $headers);
        foreach ($headers as $key => $values) {
            foreach (is_array($values)? $values : array($values) as $value) {
                $curlopt[CURLOPT_HTTPHEADER][] = sprintf("%s:%s", $key, $value);
            }
        }
        $method = strtoupper($method);

        $vars = $this->before($method, $url, $vars);

        if ($method == 'POST') {
            $curlopt[CURLOPT_POST] = true;
            $curlopt[CURLOPT_POSTFIELDS] = is_string($vars) ? $vars :http_build_query($vars);
        } elseif ($method != 'GET') {
            $curlopt[CURLOPT_CUSTOMREQUEST] = $method;
            $curlopt[CURLOPT_POSTFIELDS] = is_string($vars) ? $vars :http_build_query($vars);
        } elseif ($vars) {
            $url .= strpos($url, '?') !== false ? '&' : '?';
            $url .= is_string($vars) ? $vars :http_build_query($vars);
        }

        if ($this->baseUrl) {
            $url = sprintf('%s%s', $this->baseUrl, $url);
        }

        $curlopt[CURLOPT_URL] = $url;

        if ($this->options['curl_options']) {
            foreach ($this->options['curl_options'] as $key => $value) {
                $curlopt[$key] = $value;
            }
        }
        curl_setopt_array($handle, $curlopt);

        $response = curl_exec($handle);
        $end = microtime(true);
        if (function_exists('log_message')) {
            log_message('error', sprintf('url:%s cost:%.3fs', $url, $end-$start));
        }
        if (curl_errno($handle)) {
            list($error, $errno) = array(curl_error($handle), curl_errno($handle));
            curl_close($handle);
            throw new Vendor_RestClient_Exception($error, $errno);
        }
        curl_close($handle);


        return new Vendor_RestClient_Response($response);
    }

    /**
     * signature
     *
     * @param mixed $token
     * @param mixed $timestamp
     * @param mixed $nonce
     *
     * @access public
     *
     * @return mixed
     */
    public function signature($token, $timestamp, $nonce)
    {
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        return sha1(implode('', $tmpArr));
    }
    /**
     * genAuth
     *
     * @access public
     *
     * @return mixed
     */
    public function genAuth($appId, $appSecret)
    {
        $timestamp = time();
        $nonce     = $this->genRandStr(8);
        $token     = $appSecret;
        $signature = $this->signature($token, $timestamp, $nonce);

        return array('app-id'=>$appId, 'nonce'=> $nonce, 'signature'=>$signature, 'timestamp'=>$timestamp);
    }
    /**
     * genRandStr
     *
     * @param mixed $length
     *
     * @access public
     *
     * @return mixed
     */
    public function genRandStr($length)
    {
        $str = null;
        $strPol = "0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol)-1;

        for ($i=0; $i < $length; $i++) {
            $str.= $strPol[rand(0, $max)];
        }

        return $str;
    }
    /**
     * before
     *
     * @param mixed $method
     * @param mixed $url
     * @param mixed $param
     *
     * @access protected
     *
     * @return mixed
     */
    protected function before($method, $url, $param)
    {
        if (is_string($param)) {
            parse_str($param, $vars);
        } else {
            $vars = $param;
        }
        $appId = $this->options['access_app_id'];
        $token = $this->options['access_app_secret'];
        $vars['x-api-proxy-app-id'] = $appId;
        $parameter = $vars;
        if (($pos = strpos($url, '?')) !== false) {
            parse_str(substr($url, $pos + 1), $newVars);
            $parameter = $parameter + $newVars ;
        }

        $vars['Sign']  = $this->getSign($parameter, $token);

        return $vars;
    }

    /**
     * getSign
     *
     * @param mixed $parameter
     * @param mixed $token
     *
     * @access protected
     *
     * @return mixed
     */
    protected function getSign($vars, $token)
    {
        $parameter = array();

        foreach ($vars as $key => $value) {
            $key = str_replace('.', '_', $key);
            $parameter[$key]= $value;
        }
        ksort($parameter);
        $str = '';
        foreach ($parameter as $key => $value) {
            if (strncasecmp($key, 'sign', 4) === 0) {
                continue;
            }

            $str .= $value;
        }
        return md5($str . $token);
    }
}
