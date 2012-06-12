<?php
namespace Atom\Http\Request;
/**
 * Used for interacting with request post 
 * variables. client->server.
 *
 * @package http
 * @author Ryan Pierce
 **/
class Post implements RequestInterface
{
		/**
		 * Returns the post value of $key
		 *
		 * @return string
		 **/
		public function get($key)
		{
				if(isset($_POST[$key]))
				{
						return $_POST[$key];
				}
				else
				{
					return NULL;
				}
		}

		/**
		 * Returns all of the post values as an associative array
		 *
		 * @return array
		 **/
		public function getAll()
		{
				if (isset($_POST)) 
				{
					return $_POST;
				}
				else
				{
					return NULL;
				}
				
		}

		/**
		 * Returns all the post values as a string
		 *
		 * @return void
		 * @author Ryan Pierce
		 **/
		public function __toString()
		{
				$output = '';
				foreach ($_POST as $key=>$value) 
				{
						$output .= $key . '=' . $value . '&';
				}
				$output = rtrim($output, '&');
				return $output;
		}
} // END interface PostInterface
