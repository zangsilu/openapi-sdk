<?php
/**
 * Vendor_RestClient_Response
 *
 * PHP version 7
 *
 * @category  RestClient
 * @package   Vendor\RestClient
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 */
class Vendor_RestClient_Response implements Iterator, ArrayAccess
{
    /**
     * body
     *
     * @var    mixed
     * @access public
     */
    public $body;
    /**
     * headers
     *
     * @var    array
     * @access public
     */
    public $headers = array();
    /**
     * json
     *
     * @var    string
     * @access protected
     */
    protected $json = '';

    public function __construct($response)
    {
        $pattern = '#^HTTP/\d\.\d.*?$.*?\r\n\r\n#ims';
        preg_match_all($pattern, $response, $matches);
        $headers = explode("\r\n", str_replace("\r\n\r\n", '', $matches[0][0]));
        $this->body = str_replace($matches[0][0], '', $response);

        preg_match('#HTTP/(\d\.\d)\s(\d\d\d)\s(.*)#', array_shift($headers), $matches);
        $this->headers['Http-Version'] = $matches[1];
        $this->headers['Status-Code'] = $matches[2];
        $this->headers['Status'] = $matches[2].' '.$matches[3];

        if ($this->headers['Status'] != 200) {
            throw new Vendor_RestClient_Exception('Http status is not 200!');
        }
        foreach ($headers as $header) {
            preg_match('#(.*?)\:\s(.*)#', $header, $matches);
            $this->headers[$matches[1]] = $matches[2];
        }
        if (!isset($this->headers['X-Api-Proxy']) || !$this->headers['X-Api-Proxy']) {
            $this->json = $this->json(true);
            if (!isset($this->json['ResponseStatus']) || $this->json['ResponseStatus'] != 0) {
                throw new Vendor_RestClient_Exception($this->json['ResponseMsg']);
            }
        }
    }
    /**
     * toArray
     *
     * @access public
     *
     * @return mixed
     */
    public function toArray()
    {
        return $this->json['ResponseData'];
    }
    /**
     * first
     *
     * @access public
     *
     * @return mixed
     */
    public function first()
    {
        return isset($this->json['ResponseData']) && is_array($this->json['ResponseData']) ?
                 current($this->json['ResponseData']) : null;
    }
    /**
     * firstValue
     *
     * @param mixed $key
     *
     * @access public
     *
     * @return mixed
     */
    public function firstValue($key)
    {
        $first = $this->first();
        return isset($first[$key]) ? $first[$key] :  null;
    }
    /**
     * body
     *
     * @access public
     *
     * @return mixed
     */
    public function body()
    {
        return $this->body;
    }
    public function json($assoc = true)
    {
        $json = json_decode($this->body, $assoc);
        if (!$json) {
               throw new Vendor_RestClient_Exception_JsonDecode(json_last_error_msg());
        }

        return $json;
    }
    /**
     * status
     *
     * @access public
     *
     * @return mixed
     */
    public function status()
    {
        return $this->header['Status-Code'];
    }
    /**
     * header
     *
     * @param mixed $key
     * @param mixed $default
     *
     * @access public
     *
     * @return mixed
     */
    public function header($key, $default = null)
    {
        return isset($this->header[$key]) ? $this->header[$key]: $default;
    }


    // Iterable methods:
    public function rewind()
    {
        return reset($this->json['ResponseData']);
    }

    public function current()
    {
        return current($this->json['ResponseData']);
    }

    public function key()
    {
        return key($this->json['ResponseData']);
    }

    public function next()
    {
        return next($this->json['ResponseData']);
    }

    public function valid()
    {
        return is_array($this->json['ResponseData'])
            && (key($this->json['ResponseData']) !== null);
    }

    public function offsetExists($key)
    {
        return is_array($this->json['ResponseData'])?
            isset($this->json['ResponseData'][$key]) : false;
    }

    public function offsetGet($key)
    {
        if (!$this->offsetExists($key)) {
            return null;
        }

        return is_array($this->json['ResponseData'])?
            $this->json['ResponseData'][$key] : null;
    }

    public function offsetSet($key, $value)
    {
        throw new Vendor_RestClient_Exception_ArrayAccess("Decoded response data is immutable.");
    }

    public function offsetUnset($key)
    {
        throw new Vendor_RestClient_Exception_ArrayAccess("Decoded response data is immutable.");
    }
    public function __toString()
    {
        return $this->body;
    }
}
