<?php namespace Atom\Http;

/**
 * Request class
 *
 * @package    Atom
 * @subpackage Http
 */
class Request
{
	// HTTP Request methods
	const METHOD_HEAD     = 'HEAD';
	const METHOD_GET      = 'GET';
	const METHOD_POST     = 'POST';
	const METHOD_PUT      = 'PUT';
	const METHOD_DELETE   = 'DELETE';
	const METHOD_OPTIONS  = 'OPTIONS';
	const METHOD_OVERRIDE = '_METHOD';
}