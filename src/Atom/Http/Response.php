<?php
namespace Atom\Http;
/**
 * Response class is the main interface into the Response namespace
 *
 * @packaged Http
 * @author Ryan Pierce
 **/
class Response
{
		/**
		 * Static holder for Cookie object
		 *
		 * @var string
		 **/
		private static $Cookie;

		/**
		 * Static holder for Header object
		 *
		 * @var string
		 **/
		private static $Header;

		/**
		 * Singleton Cookie instantiating method
		 *
		 * @return Object Cookie
		 **/
		private static function Cookie()
		{
				if(!self::$Cookie)
				{
						self::$Cookie = new Response\Cookie;
				}
				return self::$Cookie;
		}

		/**
		 * Singleton Header instantiating method
		 *
		 * @return Object Header
		 **/
		private static function Header()
		{
				if(!self::$Header)
				{
						self::$Header = new Response\Header;
				}
				return self::$Header;
		}
} // END class Response
