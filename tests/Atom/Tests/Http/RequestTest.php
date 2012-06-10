<?php namespace Atom\Tests\Http;

// Aliasing rules
use Atom\Http\Request;

class RequestTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Request
	 */
	private $response;

	public function setUp()
	{
		$this->response = new Request;
	}

	public function testNothing()
	{
		$this->assertTrue(true);
	}
}