<?php
namespace Atom\Http\Request;

/**
 * This handles all file behavior
 *
 * @packaged Http
 * @author Ryan Pierce
 **/
class File extends Filter implements RequestInterface
{
	/**
	 * Returns associative value of $key
	 *
	 * @return array
	 **/
	public function get($key)
	{
	}

	/**
	 * Returns an associative array of all $key=>$values.
	 *
	 * @return array
	 **/
	public function getAll()	
	{
	}
	
	/**
	 * Returns an RFC2616 valid http string with the classes variables
	 *
	 * @return string
	 **/
	public function __toString()
	{
	}
} // END class File impliments RequestInterface
