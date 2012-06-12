<?php
namespace Atom\Http\Request;
/**
 * A class that gets request get values. From client->server.
 *
 * @packaged default
 * @author Ryan Pierce
 **/
class Get implements RequestInterface
{
		/**
		 * Gets a variable by $key
		 *
		 * @return string
		 **/
		public function get($key)
		{
				if(isset($_GET[$key]))
				{
						return $_GET[$key];
				}
				else
				{
						return NULL;
				}
		}

		/**
		 * Returns all Get requests as an associative array
		 *
		 * @return array
		 **/
		public function getAll()
		{
				if(isset($_GET))
				{
						return $_GET;
				}
				else
				{
						return NULL;
				}
		}
		
		/**
		 * Returns get object as a string
		 *
		 * @return string
		 **/
		public function __toString()
		{
		}

} // END abstract class Get
