<?php
require __DIR__ . '/vendor/autoload.php';
$accessToken;
if (php_sapi_name() != 'cli') {
    // throw new Exception('This application must be run on the command line.');
}

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */ 
function getClient()
{
    $client = new Google_Client();

    // $reflector = new \ReflectionClass('Google_Client');
    // echo $reflector->getFileName();exit;

    $client->setApplicationName('Google Drive API PHP Quickstart');
    $client->setRedirectUri('http://localhost/NMS2/google_upload/list_files/oauth2callback.php');

    // dd(Google_Service_Drive::DRIVE);
 
    $client->setScopes(Google_Service_Drive::DRIVE);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setApprovalPrompt('force');
    $client->setPrompt('select_account consent');
 
    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        global $accessToken;
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken($accessToken)) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken($accessToken));
        } else {
            // Request authorization from the user.
           
            if(isset($_SESSION['code'])){
                $authCode=$_SESSION['code'];
                unset($_SESSION['code']);
                // Exchange authorization code for an access token.
                global $accessToken;
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);
                
                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new Exception(join(', ', $accessToken));
                }
                header('Location: ../index.php');
            }
            else{
                $authUrl = $client->createAuthUrl();
                header("Location: ".$authUrl);
            }
           
           
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}

// Get the API client and construct the service object.
$client = getClient();
