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
				if (isset($_GET)) 
				{
					return $_GET;
				}
				else
				{
					return NULL;
				}
				
		}
} // END interface PostInterface
