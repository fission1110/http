<?php
namespace Atom\Http;
/**
 * Request class is the main interface into the request namespace
 *
 * @packaged Http
 * @author Ryan Pierce
 **/
use Atom\Http\Request;
class Request
{
		/**
		 * A Cookie object storage variable 
		 *
		 * @var string
		 **/
		private static $Cookie;

		/**
		 * A Get object storage variable
		 *
		 * @var string
		 **/
		private static $Get;

		/**
		 * A Header object storage variable
		 *
		 * @var string
		 **/
		private static $Header;

		/**
		 * A Post object storage variable
		 *
		 * @var string
		 **/
		private static $Post;

		/**
		 * Singleton method for returning a cookie object
		 *
		 * @return Object	Cookie object
		 **/
		public static function Cookie()
		{
				if (!self::$Cookie) 
				{
						self::$Cookie = new Request\Cookie;
				}
				return self::$Cookie;
		}

		/**
		 * Singleton method for returning a Get object
		 *
		 * @return Object	Get object
		 **/
		public static function Get()
		{
				if (!self::$Get) 
				{
						self::$Get = new Request\Get;
				}
				return self::$Get;
		}

		/**
		 * Singleton method for returning a Header object
		 *
		 * @return Object	Header object
		 **/
		public static function Header()
		{
				if (!self::$Header) 
				{
						self::$Header = new Request\Header;
				}
				return self::$Header;
		}

		/**
		 * Singleton method for returning a Post object
		 *
		 * @return Object	Post object
		 **/
		public static function Post()
		{
				if (!self::$Post) 
				{
						self::$Post = new Request\Post;
				}
				return self::$Post;
		}

} // END class Request
