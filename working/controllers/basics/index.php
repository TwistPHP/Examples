<?php

	/*
	 * --------------------------------
	 * Require the TwistPHP framework
	 * --------------------------------
	 */
	require_once( 'twist/framework.php' );

	/*
	 * --------------------------------
	 * Register the Test controller for
	 * all requests that start with the
	 * URI '/' (the base for the site)
	 * --------------------------------
	 */
	Twist::Route() -> controller( '/%', 'Basics' );

	/*
	 * --------------------------------
	 * Respond to all requests with the
	 * relevant registered routes
	 * --------------------------------
	 */
	Twist::Route() -> serve();