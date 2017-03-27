<?php
class Vendor_Proxy
{
    /**
     * client
     *
     * @var    mixed
     * @access protected
     */
    protected $client = null;
    /**
     * proxy
     *
     * @var    mixed
     * @access protected
     */
    protected $proxy  = null;
    /**
     * __construct
     *
     * @param mixed $client
     *
     * @access public
     *
     * @return mixed
     */
    public function __construct($config = null)
    {
        list($appId, $appSecret, $baseUrl) = array(
                $config['app_id'],
                $config['app_secret'],
                $config['base_url']
        );
        $this->proxy = rtrim(preg_replace('#/v\d+(.\d+)?#', '', $config['base_url']), '/');
        $options = isset($config['options'])? $config['options']: array();
        $options['headers']['x-api-proxy'] = 'Api-Proxy';
        $client = new Vendor_RestClient($appId, $appSecret, $this->proxy, $options);
        $this->client = $client;
    }
    public function __call($method, $args)
    {
        $url      = $args[0];
        $vars     = isset($args[1]) ? $args[1] : array();
        $headers  = isset($args[2]) ? $args[2] : array();
        return $this->client->{$method}($url, $vars, $headers);
    }
}
