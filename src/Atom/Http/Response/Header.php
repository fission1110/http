<?php
namespace Atom\Http\Response;
/**
 * The header class handles all of the headers sent to the browser.
 *
 * @packaged http
 * @author Ryan Pierce
 **/
class Header implements ResponseInterface
{
		/**
		 * Holds the associative array of the current header
		 *
		 * @var array
		 **/
		private $Header = array();

		/**
		 * Holds every status code
		 *
		 * @var array
		 **/
		private $Status = array('100' => 'Continue',
								'101' => 'Switching Protocols',
								'200' => 'OK',
								'201' => 'Created',
								'202' => 'Accepted',
								'203' => 'Non-Authoritiative Information',
								'204' => 'No Content',
								'205' => 'Rest Content',
								'206' => 'Partial Content',
								'300' => 'Multiple Choices',
								'301' => 'Moved Permanently',
								'302' => 'Found',
								'303' => 'See Other',
								'304' => 'Not Modified',
								'305' => 'Use Proxy',
								'307' => 'Temporary Redirect',
								'400' => 'Bad Request',
								'401' => 'Unauthorized',
								'402' => 'Payment Required',
								'403' => 'Forbidden',
								'404' => 'Not Found',
								'405' => 'Method Not Allowed',
								'406' => 'Not Acceptable',
								'407' => 'Proxy Authentication Required',
								'408' => 'Request Time-out',
								'409' => 'Conflict',
								'410' => 'Gone',
								'411' => 'Length Required',
								'412' => 'Precondition Failed',
								'413' => 'Request Entity Too Large',
								'414' => 'Request-URI Too Large',
								'415' => 'Unsupported Media Type',
								'416' => 'Requested range not satisfiable',
								'417' => 'Expectation Failed',
								'500' => 'Internal Server Error',
								'501' => 'Not Implemented',
								'502' => 'Bad Gateway',
								'503' => 'Service Unavailable',
								'504' => 'Gateway Time-out',
								'505' => 'HTTP Version not supported',
								);
	
		/**
		 * Gets header key
		 *
		 * @return string
		 **/
		public function get($key)
		{
				if (is_array($this->Header[$key])) 
				{
					$output = '';
					foreach ($key as $name=>$word) 
					{
							$output .= $word . ' ';
					}
					$output = rtrim($output, ' ');
					$output .= "\r\n";
					return $output;
				}
				else
				{
					return $this->Header[$key];
				}
		}

		/**
		 * Returns an associative array of all set keys
		 *
		 * @return array
		 **/
		public function getAll()
		{
				return $this->Header;
		}

		/**
		 * This does nothing in this class, but it's needed to keep everything 
		 * uniform.
		 *
		 * @return void
		 **/
		public function getOptions($key)
		{
		}

		/**
		 * Sets $key to $value. $options are ignored.
		 *
		 * @return void
		 **/
		public function set($key, $value, $options = array())
		{
				if(strtolower($key) == 'status')
				{
					if(array_key_exists($value, $this->Status))
					{
							$this->Header['Status'] = $key. ' ' . $this->Status[$key];
					}
					elseif(in_array($value, $this->Status))
					{
							$status_code = array_search($value, $this->Status);
							$this->Header['Status'] = $status_code . ' ' . $this->Status[$status_code]; 
					}
					else
					{
							//exception: Status not found
					}

				}
				else
				{
					$this->Header[$key] = $value;
				}
		}
		
		/**
		 * Removes a given $key. Returns 1 on success, 0 on failure.
		 *
		 * @return boolean
		 **/
		public function remove($key)
		{
				unset($this->Header[$key]);
		}

		/**
		 * Resets the entire class
		 *
		 * @return void
		 **/
		public function reset()
		{
				$this->Header = array();
		}

		/**
		 * Sends the headers
		 *
		 * @return void
		 **/
		public function submit()
		{
				foreach ($this->Header as $key=>$value) 
				{
						header($key . ': ' . $value);
				}
		}

		/**
		 * Sends the entire submit data as a string
		 *
		 * @return void
		 **/
		public function __toString()
		{
				$output = '';
				foreach ($this->Header as $key=>$value) 
				{
					$output .= $key . ': ' . $value ."\r\n";
				}
				return $output;
		}
	
} // END abstract class Header
