<?php

	ini_set('max_execution_time', 300);

	require_once('libs/Facebook/GraphObject.php');
	require_once('libs/Facebook/GraphSessionInfo.php');
	require_once('libs/Facebook/Entities/AccessToken.php');
	require_once('libs/Facebook/HttpClients/FacebookHttpable.php');
	require_once('libs/Facebook/HttpClients/FacebookCurl.php');
	require_once('libs/Facebook/HttpClients/FacebookCurlHttpClient.php');
	require_once('libs/Facebook/FacebookSession.php' );
	require_once('libs/Facebook/FacebookRedirectLoginHelper.php' );
	require_once('libs/Facebook/FacebookRequest.php' );
	require_once('libs/Facebook/FacebookResponse.php' );
	require_once('libs/Facebook/FacebookSDKException.php' );
	require_once('libs/Facebook/FacebookRequestException.php' );
	require_once('libs/Facebook/FacebookAuthorizationException.php' );

	
	$fb_app_id = '1543961192417139'; // Goto your Fb app->settings
	$fb_secret_id = 'cfeed7612c2dcacc082b6d4ba7d8572f'; // Goto your Fb app->settings

	//fb_login_url is same url which is added in facebook app->settings.
	$fb_login_url = 'http://localhost/rtCampFacebookChallenge/'; 
	$fb_logout_url = '';

	session_start();

?>
