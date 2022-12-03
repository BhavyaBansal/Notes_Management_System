<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '940638613726-05h4u81ojf3m09eg8uskd3ts8ocds31k.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'wPXpEZNVLUXKFuOQY_vyQX6R'; //Google client secret
$redirectURL = 'http://localhost/nms2/googlelogin/index.php'; //Callback URL
// 

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>