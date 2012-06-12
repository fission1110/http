<?php
namespace Atom\Http\Response;
/**
 * This is the global interface for the Response Namespace.
 * This is the http data sent from server->client;
 *
 * @package http
 * @author Ryan Pierce
 **/
interface ResponseInterface
{
		/**
		 * Returns the value of the associative $key
		 *
		 * @return string
		 **/
		public function get($key);

		/**
		 * Returns an associative array of all possible keys
		 *
		 * @return void
		 **/
		public function getAll();
		
		/**
		 * Returns the options for a given $key
		 *
		 * @return array
		 * @author Ryan Pierce
		 **/
		public function getOptions($key);

		/**
		 * Sets the $value of a given $key
		 *
		 * @return void
		 **/
		public function set($key, $value, $options);

		/**
		 * Removes a $key from the class. Returns 1 on success, NULL on failure.
		 *
		 * @return boolean
		 * @author Ryan Pierce
		 **/
		public function remove($key);

		/**
		 * Resets the class to start from scratch
		 *
		 * @return void
		 * @author Ryan Pierce
		 **/
		public function reset();

		/**
		 * Submits the class. For example, sends headers, and sets the cookies
		 *
		 * @return void
		 * @author Ryan Pierce
		 **/
		public function submit();

		/**
		 * Returns an rfc2616 compliant string, containing the class that this 
		 * impliments.
		 *
		 * @return string
		 **/
		public function __toString();
} // END interface ResponseInterface
