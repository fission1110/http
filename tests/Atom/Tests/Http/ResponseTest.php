<?php namespace Atom\Tests\Http;

// Aliasing rules
use Atom\Http\Response;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Response
	 */
	private $response;

	public function setUp()
	{
		$this->response = new Response;
	}

	public function testNothing()
	{
		$this->assertTrue(true);
	}
}