<?php
class Vendor_Api
{
    /**
     * client
     *
     * @var    mixed
     * @access protected
     */
    protected $client = null;
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
        $options = isset($config['options'])? $config['options']: array();
        $client = new Vendor_RestClient($appId, $appSecret, $baseUrl, $options);
        $this->client = $client;
    }
}
