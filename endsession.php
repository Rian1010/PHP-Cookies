<?php

	session_start();//In order to end a session, it needs to be started, in order retrieve the information

	$params = session_get_cookie_params();
	/*
	$params['secure'];
	$params['httponly'];
	$params['expires'];
	*/
	setcookie(session_name(), "", time(),42000,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

	$_SESSION = array();//For an emergency, in case session_destroy(); has odd memory leaks problems associated with it
	session_destroy();
	header("Location: login.php");


	/* THE FOLLOWING ENDS THE SESSION ONLY IN THE SERVER, BUT LEAVES THE COOKIES THAT NO LONGER EXIST IN THE BROWSER
		session_start();

		$_SESSION = array();
		session_destroy();
		header("Location: login.php");
	*/