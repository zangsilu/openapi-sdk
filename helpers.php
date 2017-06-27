<?php
if (!function_exists('array_column')) {
    /**
     * array_column
     *
     * @param mixed $array
     * @param mixed $columnKey
     * @param mixed $indexKey
     *
     * @access public
     *
     * @return mixed
     */
    function array_column($array, $columnKey, $indexKey = null)
    {
        $result = array();
        foreach ($array as $subArray) {
            if (is_null($indexKey) && array_key_exists($columnKey, $subArray)) {
                $result[] = is_object($subArray)? $subArray->$columnKey : $subArray[$columnKey];
            } elseif (array_key_exists($indexKey, $subArray)) {
                if (is_null($columnKey)) {
                    $index = is_object($subArray)? $subArray->$indexKey : $subArray[$indexKey];
                    $result[$index] = $subArray;
                } elseif (array_key_exists($columnKey, $subArray)) {
                    $index = is_object($subArray)? $subArray->$indexKey : $subArray[$indexKey];
                    $result[$index] = is_object($subArray)? $subArray->$columnKey : $subArray[$columnKey];
                }
            }
        }

        return $result;
    }
}

if (!function_exists('array_key_exchange')) {
    /**
     * 替换key array_key_exchange
     *
     * @param array $array
     * @param array $exchange
     *
     * @access public
     *
     * @return mixed
     */
    function array_key_exchange(array $array, array $exchange)
    {
        $result = array();

        foreach ($exchange as $key => $value) {
            if (isset($array[$key])) {
                $result[$value] = $array[$key];
            }
        }

        return $result;
    }
}
if (!function_exists('array_key_exchange_only')) {
    /**
     * 替换key array_key_exchange_only
     *
     * @param array $array
     * @param array $exchange
     *
     * @access public
     *
     * @return mixed
     */
    function array_key_exchange_only(array $array, array $exchange)
    {
        foreach ($array as $assoc => $values) {
            $items = array();
            foreach ($values as $key => $value) {
                if (isset($exchange[$key])) {
                    if (is_array($exchange[$key])) {
                        foreach ($exchange[$key] as $newKey) {
                            $items[$newKey] = $value;
                        }
                    } else {
                        $items[$exchange[$key]] = $value;
                    }
                } else {
                    $items[$key] = $value;
                }
            }
            $array[$assoc] = $items;
        }

        return $array;
    }
}

if (!function_exists('apache_request_headers')) {
    /**
     * apache_request_headers
     *
     * @access public
     *
     * @return mixed
     */
    function apache_request_headers()
    {
        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if (substr($key, 0, 5) == 'HTTP_') {
                $headers[str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))))] = $value;
            }
        }
        return $headers;
    }
}

if (!function_exists('is_ssl')) {
    /**
     * is_ssl
     *
     *
     * @access public
     *
     * @return mixed
     */
    function is_ssl()
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            return true;
        } elseif (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            return true;
        } elseif (isset($_SERVER['HTTP_HTTPS']) && $_SERVER['HTTP_HTTPS'] == 'on') {
            return true;
        } elseif (isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] === 'https') {
            return true;
        } elseif (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] === '443') {
            return true;
        }
        return false;
    }
}

if (!function_exists('json_last_error_msg')) {
    /**
     * json_last_error_msg
     *
     *
     * @access public
     *
     * @return mixed
     */
    function json_last_error_msg()
    {
        static $errors = array(
          JSON_ERROR_NONE => 'No error',
          JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
          JSON_ERROR_STATE_MISMATCH => 'State mismatch (invalid or malformed JSON)',
          JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
          JSON_ERROR_SYNTAX => 'Syntax error',
          JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded'
          );

        $err_no = json_last_error();
        return isset($errors[$err_no]) ? $errors[$err_no] : 'Unknown error';
    }
}

if (!function_exists('openApiProxy4CI')) {

    /**
     * openApiSdk
     *
     * @param mixed  $api
     * @param string $channel
     *
     * @access public
     *
     * @return mixed
     */
    function openApiProxy4CI($url, $channel = 'shop')
    {
        include APPPATH .'/config/' . ENVIRONMENT. '/open-api-sdk.php';
        $openApiSdkConfig = $config[$channel];

        $referer = sprintf('http://%s%s', $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI']);
        $openApiSdkConfig['options']['curl_options'] = array(
                CURLOPT_REFERER => $referer,
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_DNS_CACHE_TIMEOUT=> 7200,
                CURLOPT_HEADER => true
                );

        $openApiSdkConfig['options']['headers'] = array('Expect'=>'','Connection'=> 'keep-alive');
        $uniqueId = isset($_SERVER['HTTP_UNIQUE_ID'])?
                          $_SERVER['HTTP_UNIQUE_ID'] : uniqid($openApiSdkConfig['app_id'].'.', true);
        $openApiSdkConfig['options']['headers']['unique-id'] = $uniqueId;
        if (is_ssl()) {
             $openApiSdkConfig['options']['headers']['X-FORWARDED-PROTO'] = 'https';
        }

        $version = trim(str_replace('applicationv', '', APPPATH), '/');
        $act = isset($_POST['Act']) ? $_POST['Act'] : '';

        $openApiSdkConfig['options']['user_agent'] = sprintf(
            'Shop Open Api Sdk/%s(%s)->%s %s %s',
            $version,
            $openApiSdkConfig['app_id'],
            $openApiSdkConfig['version'],
            isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '',
            $act
        );
        $openApiSdkConfig['options']['headers']['x-api-proxy'] = 'Api-Proxy';

        $proxy = new Vendor_Proxy($openApiSdkConfig);
        $method = $_SERVER['REQUEST_METHOD'];
        //$url .= (strpos($url, '?'] !== false ? '&' :'?'].http_build_query($_POST);
        return $proxy->$method($url, $_POST);
    }
}
