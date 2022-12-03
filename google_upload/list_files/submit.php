<?php
error_reporting(E_ERROR | E_PARSE);
require __DIR__ . '/google-drive.php'; // include google drive client API
session_start();
include('../checkadminlogin.php');

function create_folder($folder_name, $parent_folder_id = null)
{

    // This checks wheather folder already exists in drive
    $folder_list = check_folder_exists($folder_name);

    // if folder does not exists
    if (count($folder_list) == 0) {
        $service = new Google_Service_Drive($GLOBALS['client']);
        $folder = new Google_Service_Drive_DriveFile();

        $folder->setName($folder_name);
        $folder->setMimeType('application/vnd.google-apps.folder');
        if (!empty($parent_folder_id)) {
            $folder->setParents([$parent_folder_id]);
        }
        // dd($file);

        $result = $service->files->create($folder); // here folder is created

        $folder_id = null;

        if (isset($result['id']) && !empty($result['id'])) {
            $folder_id = $result['id'];
        }

        return $folder_id;
    }

    return $folder_list[0]['id']; // returns folder ID

}

function check_folder_exists($folder_name)
{
    // This will check folders and sub folders by name
    $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/vnd.google-apps.folder' and name='$folder_name' and trashed=false";
    $files = $service->files->listFiles($parameters);

    $op = [];
    foreach ($files as $k => $file) {
        $op[] = $file;
    }

    return $op;
}

// this function will list root folders with their direct childrens
function get_files_and_folders()
{
    $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/vnd.google-apps.folder' and 'root' in parents and trashed=false";
    $files = $service->files->listFiles($parameters);

    echo "<ul>";
    foreach ($files as $k => $file) {
        echo "<li> 
        
            {$file['name']} - {$file['id']} ---- " . $file['mimeType'];

        try {
            // subfiles
            $sub_files = $service->files->listFiles(array('q' => "'{$file['id']}' in parents"));
            echo "<ul>";
            foreach ($sub_files as $kk => $sub_file) {
                echo "<li> {$sub_file['name']} - {$sub_file['id']}  ---- " . $sub_file['mimeType'] . " </li>";
            }
            echo "</ul>";
        } catch (\Throwable $th) {
            // dd($th);
        }

        echo "</li>";
    }
    echo "</ul>";
}

function insert_file_to_drive($service, $file_path, $file_name, $parent_file_id)
{
    // $service = new Google_Service_Drive( $GLOBALS['client'] );

    $file = new Google_Service_Drive_DriveFile();

    $file->setName($file_name); // sets your file name here
    $idsobj=($service->files->generateIds());
    $id=$idsobj['ids'][0];
    $file->setId($id);

    $file->setParents([(string) $parent_file_id]);  // If you want to upload the file inside a sub folder than you must pass its parent ID   

    // dd($file);

    $result = $service->files->create(
        $file,
        array(
            'data' => file_get_contents($file_path),
            'mimeType' => 'application/octet-stream',
        )
    );

    // dd($result);

    $is_success = false;
    if (isset($result['name']) && !empty($result['name'])) {
        $is_success = true;
    }
    return $id;
}

if (isset($_GET['list_files_and_folders'])) {
    echo "<h1>Retriving List all files and folders from Google Drive</h1>";
    get_files_and_folders();
}

function dd(...$d)
{
    echo "<pre style='background-color:#000;color:#fff;' >";
    print_r($d);
    exit;
}

//function to retrieve files from a particular folder

/**
 * Print files belonging to a folder.
 *
 *
 */
function printFilesInFolder($service, $folderId)
{
    $pageToken = NULL;
    $filesInDrive = [];
    do {
        try {
            $parameters = array();
            if ($pageToken) {
                $parameters['pageToken'] = $pageToken;
            }
            $children = $service->files->listFiles(array('q' => "'{$folderId}' in parents"));


            foreach ($children as $kk => $sub_file) {
                $filesId[] = $sub_file;
            }

            $pageToken = $children->getNextPageToken();
        } catch (Exception $e) {
            print "An error occurred: " . $e->getMessage();
            $pageToken = NULL;
        }
    } while ($pageToken);
    return $filesId;
}

// function to check file or folder exists in the given folder or not
//it will not check in sub folder and return the id

function check_folder_exists_shallow($service, $folderId, $fName)
{
    $pageToken = NULL;

    do {
        try {
            $parameters = array();
            if ($pageToken) {
                $parameters['pageToken'] = $pageToken;
            }
            $children = $service->files->listFiles(array('q' => "'{$folderId}' in parents"));
            $others_id = '';
            foreach ($children as $kk => $sub_file) {
                // echo "<li> {$sub_file['name']} - {$sub_file['id']}  ---- ". $sub_file['mimeType'] ." </li>";
                if ($sub_file['name'] == $fName) {
                    return $sub_file['id'];
                }
                if ($sub_file['name'] == 'others') {
                    $others_id = $sub_file['id'];
                }
            }
            if ($others_id != '')
                return $others_id;
            $pageToken = $children->getNextPageToken();
        } catch (Exception $e) {
            print "An error occurred: " . $e->getMessage();
            $pageToken = NULL;
        }
    } while ($pageToken);
}

// function to get file through file id
function get_file($service, $folderId)
{

    return $service->files->get($folderId);
}

// this is the main function which will return the folder id
// in which we have to upload the file 
function folderId($service, $faculty, $course, $branch, $semester, $subject)
{
    $folder_faculty = check_folder_exists($faculty);
    if (count($folder_faculty) == 0) {
        $temp = '1eLVdiT2gd9GqkUSS1g2cv59YaghiT0LP';
        return $temp;
    } else {
        $folder = $folder_faculty[0];
        $course_id = check_folder_exists_shallow($service, $folder['id'], $course);
        $course_folder = get_file($service, $course_id);
        if ($course_folder['name'] == 'others') {
            return $course_id;
        } else {
            $branch_id = check_folder_exists_shallow($service, $course_id, $branch);
            $branch_folder = get_file($service, $branch_id);
            if ($branch_folder['name'] == 'others') {
                return $branch_id;
            } else {
                $semester_id = check_folder_exists_shallow($service, $branch_id, $semester);
                $semester_folder = get_file($service, $semester_id);
                if ($semester_folder['name'] == 'others') {
                    return $semester_id;
                } else {
                    $subject_id = check_folder_exists_shallow($service, $semester_id, $subject);
                    return $subject_id;
                }
            }
        }
    }
}


function check_file_exists($folder_name)
{
    // This will check folders and sub folders by name
    $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/pdf' and name='$folder_name' and trashed=false";
    $files = $service->files->listFiles($parameters);

    $op = [];
    foreach ($files as $k => $file) {
        $op[] = $file;
    }

    return $op;
}

$service = new Google_Service_Drive($GLOBALS['client']);