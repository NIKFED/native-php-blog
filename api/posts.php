<?php

require 'connect.php';
require 'functions.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

$method = $_SERVER['REQUEST_METHOD'];
$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];

switch ($method) {
    case 'GET':
        if ($type === 'posts') {
            if (isset($params[1])) {
                $id = $params[1];
                getPost($connect, $id);
            } else {
                getPosts($connect);
            }
        }
        break;
    case 'POST':
        $data = $_POST;
        if ($type === 'posts') {
            addPost($connect, $data);
        }
        break;
    case 'PATCH':
        if ($type === 'posts') {
            if (isset($params[1])) {
                $id = $params[1];
                $jsonData = file_get_contents('php://input');
                $data = json_decode($jsonData, true);
                updatePost($connect, $id, $data);
            }
        }
        break;
    case 'DELETE':
        if ($type === 'posts') {
            if (isset($params[1])) {
                $id = $params[1];
                deletePost($connect, $id);
            }
        }
        break;
}
