<?php
require_once "./app/model/User.php";
class UserController {
    public function getAllUser(){
        $userModel = new User();
        $users = $userModel->getAllUsers();
        include 'app/view/listAllUser.php'; 
    }

    public function addUser(){
        
    }
}