<?php

set_include_path(__DIR__);

header_remove('X-Powered-By');

if ($_SERVER['REQUEST_METHOD'] !== 'GET')
{
    http_response_code(404);
	require 'pages/404.php';
	exit();
}

$request = rtrim($_SERVER['REQUEST_URI'], '/');
$request = strtok($request, '?');

if ($request == '') {
    require 'pages/home.php';
} elseif (file_exists('pages' . $request . '.php')) {
    require 'pages' . $request . '.php';
} else {
    http_response_code(404);
    require 'pages/404.php';
}