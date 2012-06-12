<?php
namespace Atom\Http\Request;
/**
 * This is the interface for all of the request classes
 *
 * @package http
 * @author Ryan Pierce
 **/
interface RequestInterface
{
		/**
		 * Returns associative value of $key
		 *
		 * @return string
		 **/
		public function get($key);

		/**
		 * Returns an associative array of all $key=>$values.
		 *
		 * @return array
		 **/
		public function getAll();
		
		/**
		 * Returns an RFC2616 valid http string with the classes variables
		 *
		 * @return string
		 **/
		public function __toString();
} // END interface RequestInterface
