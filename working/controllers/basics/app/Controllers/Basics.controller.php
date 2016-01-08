<?php

	/*
	 * --------------------------------
	 * The PSR namespace for your app's
	 * controllers
	 * --------------------------------
	 */
	namespace App\Controllers;

	/*
	 * --------------------------------
	 * The TwistPHP base controller
	 * --------------------------------
	 */
	use Twist\Core\Controllers\Base;

	/*
	 * --------------------------------
	 * This new controller class should
	 * be named exactly the same as the
	 * filename and extend the TwistPHP
	 * base controller
	 * --------------------------------
	 */
	class Basics extends Base {

		/*
		 * --------------------------------
		 * If your controller needs to have
		 * anything initialised this can be
		 * done here
		 * --------------------------------
		 */
		public function __construct() {}

		public function _index() {
			return 'Hello world!';
		}

		public function _fallback() {
			/*
			 * --------------------------------
			 * A standard response to a missing
			 * request is a 404 page
			 * --------------------------------
			 */
			//return $this -> _404();

			/*
			 * --------------------------------
			 * You can respond with any RFC7231
			 * code, maybe even one that claims
			 * you are a teapot
			 * --------------------------------
			 */
			return $this -> _response( 418 );
		}

		public function whendoesthenarwhalbacon() {
			return 'Midnight';
		}

		/*
		 * --------------------------------
		 * Add any other methods in here to
		 * return data for that URI
		 * --------------------------------
		 */

	}