<?php
namespace Atom\Http\Request;
/**
 * The Header class does everything that is header related from 
 * client->server.
 *
 * @packaged http
 * @author Ryan Pierce
 **/
class Header implements RequestInterface
{
		/**
		 * Gets a request header value, either by the header name given in the 
		 * rfc2616 section 5.3 below, or by the PHP $_SERVER key.
		 * http://www.w3.org/Protocols/rfc2616/rfc2616-sec5.html#sec5.3
		 *
		 * @return string
		 **/
		public function get($key)
		{
				$key_lower = strtolower($key);
				switch ($key_lower) 
				{
					case 'version':
						if (isset($_SERVER['SEVER_PROTOCOL'])) 
						{
							return $_SERVER['SERVER_PROTOCOL'];
						}
						break;
					case 'uri':
						if (isset($_SERVER['REQUEST_URI'])) 
						{
							return $_SERVER['REQUEST_URI'];
						}
						break;
					case 'user-agent':
						if (isset($_SERVER['HTTP_USER_AGENT'])) 
						{
							return $_SERVER['HTTP_USER_AGENT'];
						}
						break;
					case 'method':
						if (isset($_SERVER['REQUEST_METHOD']))
						{
							return $_SERVER['REQUEST_METHOD'];
						}
						break;
					case 'accept':
						if (isset($_SERVER['HTTP_ACCEPT'])) 
						{
							return $_SERVER['HTTP_ACCEPT'];	
						}
						break;
					case 'accept-encoding':
						if (isset($_SERVER['HTTP_ACCEPT_ENCODING'])) 
						{
							return $_SERVER['HTTP_ACCEPT_ENCODING'];
						}
						break;
					case 'accept-language':
						if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) 
						{
							return $_SERVER['HTTP_ACCEPT_LANGUAGE'];
						}		
						break;
					case 'accept-charset':
						if (isset($_SERVER['HTTP_ACCEPT_CHARSET'])) 
						{
							return $_SERVER['HTTP_ACCEPT_CHARSET'];
						}
						break;
					case 'from':
						if (isset($_SERVER['HTTP_FROM'])) 
						{
								return $_SERVER['HTTP_FROM'];
						}
						break;
					case 'host':
						if (isset($_SERVER['HTTP_HOST'])) 
						{
								return $_SERVER['HTTP_HOST'];
						}
						break;
					case 'referer':
						if (isset($_SERVER['HTTP_REFERER'])) 
						{
							return $_SERVER['HTTP_REFERER'];
						}
						break;
					default:
						if (isset($_SERVER[$key])) 
						{
							return $_SERVER[$key];
						}
						else
						{
							return NULL;
						}
						break;
				}
		}

		/**
		 * Gets all of the server variables and returns it as an associative 
		 * array. Returns according to rfc2616 section 5 standards NOT php's standards.
		 *
		 * @return array
		 **/
		public function getAll()
		{
				/**
				 * There may be more elegant ways of doing this, but as it's set 
				 * up, each layer 1 key is a line. This makes it very easy to 
				 * generate a valid HTTP packet using the $output array.
				 *
				 * First step, is to set up the Request line.
				 **/
				$output = array( 'Request' => array('Method' 		=> $_SERVER['REQUEST_METHOD'],
								  					'Request-URI'	=> $_SERVER['REQUEST_URI'],
								  					'HTTP-Version'	=> $_SERVER['SERVER_PROTOCOL'],
													),
								 );
				/**
				 * The $serverkeys variable, are an associative array of rfc2616 
				 * section 5, to php $_SERVER variables.
				 **/
				$serverkeys = array('Accept'			=> 'HTTP_ACCEPT',
									'Accept-Charset'	=> 'HTTP_ACCEPT_CHARSET',
									'Accept-Encoding'	=> 'HTTP_ACCEPT_ENCODING',
									'Accept-Language'	=> 'HTTP_ACCEPT_LANGUAGE',
									'From'				=> 'HTTP_FROM',
									'Host'				=> 'HTTP_HOST',
									'Referer'			=> 'HTTP_REFERER',
									'User-Agent'		=> 'HTTP_USER_AGENT',
									);
				/**
				 * If the $_SERVER variable exists, add it as a line on the http 
				 * array.
				 **/
				foreach ($serverkeys as $rfc2616=>$servertag) 
				{
						if (isset($_SERVER[$servertag])) 
						{
							$output[$rfc2616] = $_SERVER[$servertag];
						}
				}
				//return the $output array
				return $output;
		}
		
		/**
		 * undocumented function
		 *
		 * @return void
		 **/
		public function __toString()
		{
		}
} // END abstract class Header
