<?php
namespace Atom\Http\Response;
/**
 * The cookie class helps set cookie information
 *
 * @packaged http
 * @author Ryan Pierce
 **/
class Cookie implements ResponseInterface
{
        /**
         * The cookie buffer to be sent to the client.
         *
         * @var array
         **/
        public $Cookie = array();

        /**
         * Gets a cookie by $key
         *
         * @return string
         **/
        public function get($key)
        {
            if(isset($this->Cookie[$key]))
            {
                return $this->Cookie[$key][0];
            }
        }

        /**
         * Gets all cookies as an associative array
         *
         * @return array
         **/
        public function getAll()
        {
                return $this->Cookie;
        }

        /**
         * Get an array of options set to a specific key
         *
         * @return void
         * @author Ryan Pierce
         **/
        public function getOptions($key)
        {
                if (isset($this->Cookie[$key])) 
                {
                        return $this->Cookie[$key][1];
                }
        }
        /**
         * Sets a cookie to a specific value
         *
         * @return void
         **/
        public function set($key, $value, $options = array('expire'         => 0,
                                                             'path'         => '/',
                                                             'domain'       => '',
                                                             'secure'       => false,
                                                             'httponly'     => false,))
        {
                $this->Cookie[$key] = array($value, $options);
        }

        /**
         * Removes a cookie by $key
         *
         * @return boolean
         **/
        public function remove($key)
        {
                unset($this->Cookie[$key]);
        }

        /**
         * Resets the cookie buffer so you can start from scratch.
         *
         * @return void
         **/
        public function reset()
        {
                $this->Cookie = array();
        }

        /**
         * Submits the cookie buffer to the response data.
         *
         * @return void
         **/
        public function submit()
        {
                foreach ($this->Cookie as $key=>$value) 
                {
                        setcookie($key, 
                                  $value[0],
                                  $value[1]['expire'], 
                                  $value[1]['path'], 
                                  $value[1]['domain'], 
                                  $value[1]['secure'], 
                                  $value[1]['httponly']);
                }
        }

        /**
         * Returns a string containing all cookies, urlencoded to rfc2616 
         * specifications.
         *
         * @return string
         **/
        public function __toString()
        {
        }
} // END class Cookie implements ResponseInterface.php
