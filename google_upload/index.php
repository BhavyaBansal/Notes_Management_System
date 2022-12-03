<?php
include('checkadminlogin.php');
// $url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
// $url = $url_array[0];

// require_once 'google-api-php-client/src/Google_Client.php';
// require_once 'google-api-php-client/src/contrib/Google_DriveService.php';
// $service=null;
// $client = new Google_Client();
// $client->setClientId('940638613726-05h4u81ojf3m09eg8uskd3ts8ocds31k.apps.googleusercontent.com');
// $client->setClientSecret('wPXpEZNVLUXKFuOQY_vyQX6R');
// $client->setRedirectUri($url);
// $client->setScopes(array('https://www.googleapis.com/auth/drive.file'));
// if (isset($_GET['code'])) {
//     $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
//     header('location:'.$url);exit;
// } elseif (!isset($_SESSION['accessToken'])) {
//     $client->authenticate();
// }
$files= array();
$dir = dir('files');
while ($file = $dir->read()) {
    if ($file != '.' && $file != '..') {
        $files[] = $file;
    }
}
$dir->close();
// if (!empty($_POST)) {
    // $client->setAccessToken($_SESSION['accessToken']);
    // global $service;
    // $service = new Google_DriveService($client);
    // $finfo = finfo_open(FILEINFO_MIME_TYPE);
    // $file = new Google_DriveFile();
    foreach ($files as $file_name) {
        $file_path = 'files/'.$file_name;
        // $mime_type = finfo_file($finfo, $file_path);
        // $file->setTitle($file_name);
        // $file->setDescription('This is a '.$mime_type.' document');
        // $file->setMimeType($mime_type);
        // $parent=new Google_ParentReference();
        // $parent->setId('14Idy24a7zsdhX9rJBNPWpeBie1ow3Bo_');
        // $parents[]=$parent;
        // $file->setParents($parents);


        // $service->files->insert(
        //     $file,
        //     array(
        //         'data' => file_get_contents($file_path),
        //         'mimeType' => $mime_type,
        //     )
        // );
       
        
    }
    // $Permission = new Google_Permission(array(
    //     'type' => 'anyone',
    //     'role' => "reader",
    //     'additionalRoles' => [],
    //     'withLink' => true
    //           ));
    // $service->permissions->insert('16KdrxxJJjQDngQFuFXxr0o1sGEuh4rIC', $Permission);
   





    // finfo_close($finfo);
    // unlink($file_path);
    // header('location:'.$url);exit;
// }
include 'index.phtml';