<?php
namespace Atom\Http\Request;
/**
 * An interface for a class that interacts with the request cookies. These are 
 * the client->server cookies.
 *
 * @package default
 * @author Ryan Pierce
 **/
class Cookie implements RequestInterface
{
		/**
		 * Gets a cookie with a given $key
		 *
		 * @return void
		 **/
		public function get($key)
		{
				if (isset($_COOKIE[$key])) 
				{
					return $_COOKIE[$key];
				}
				else
				{
					return NULL;
				}
		}

		/**
		 * Gets all the cookies and returns them as an associative array.
		 *
		 * @return void
		 **/
		public function getAll()
		{
				if(isset($_COOKIE))
				{
						return $_COOKIE;
				}
		}

		/**
		 * Returns cookies as a string
		 *
		 * @return void
		 **/
		public function __toString()
		{
				$output = '';
				foreach ($_COOKIE as $key=>$value) 
				{
					$output .= $key . '=' . $value . '; ';
				}
				return $output;
		}
}
