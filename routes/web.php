<?php
require_once "./app/controller/UserController.php";
$url = $_SERVER['REQUEST_URI'];
$userconntroller = new UserController();

if($url =="/"){
    $userconntroller->getAllUser();
}elseif ($url == '/add'){
    $userconntroller->getAllUser();

}
