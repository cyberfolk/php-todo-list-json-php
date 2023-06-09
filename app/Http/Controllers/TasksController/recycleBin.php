<?php
include __DIR__ . '/helper/functions.php';

$deleted_path = 'tasks/tasksDeleted.json';

// read the json file with file_get_contents
$deleted_json = file_get_contents($deleted_path);
// convert the json_json into an associative array with json_decode()
$deleted_array = json_decode($deleted_json, true);

// remove all object in deleted_array
array_splice($deleted_array, 0, count($deleted_array)); //array_splice accepts 3 parameters (array, start, length) removes the given array and then normalizes the index

// convert the array back into a json string
$deleted_json = json_encode($deleted_array);
// replace the file content using file_put_contents()
file_put_contents($deleted_path, $deleted_json);
