<?php

	/*
	 * --------------------------------
	 * Create a new cookie with the key
	 * of lastVisit with a value of the
	 * current date
	 * --------------------------------
	 */
	\Twist::Cookie() -> set( 'lastVisit', date( 'Y-m-d H:i:s' ) );

	/*
	 * --------------------------------
	 * If needed, you can add an expiry
	 * time in seconds
	 * --------------------------------
	 */
	\Twist::Cookie() -> set( 'lastVisit', date( 'Y-m-d H:i:s' ), 86400 );

	/*
	 * --------------------------------
	 * Optionally you can add a path to
	 * the cookie
	 * --------------------------------
	 */
	\Twist::Cookie() -> set( 'lastVisit', date( 'Y-m-d H:i:s' ), 86400, '/' );

	/*
	 * --------------------------------
	 * You are also able to specify the
	 * domain that the cookie is stored
	 * against
	 * --------------------------------
	 */
	\Twist::Cookie() -> set( 'lastVisit', date( 'Y-m-d H:i:s' ), 86400, '/', true );