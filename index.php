<?php

include_once('Userclass.php');//call our  UserClass That has abstract class and function to interact with App
require_once "router.php";//call route


route('/', function () {
    header("Location:home.php"); //view home view
});
route('/viewall', function () {
    $userobj = new User; 

    $userobj->viewall();//access viewall method inside Userclass
});
route('/view_user', function () {
    $id=$_POST['id'];
    $userobj = new User; 
    $userobj->view_user($id);//access viewuser method inside Userclass
});
route('/insert', function () {
    
 $first_name=$_POST['first_name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
    $userobj = new User;
    $userobj->insert($first_name,$surname,$email,$username,$password); //access insert method inside Userclass and pass parameters 
});
route('/update', function () {
     $id=$_POST['id'];
 $first_name=$_POST['first_name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
    $userobj = new User; 
    $userobj -> update($id,$first_name,$surname,$email,$username,$password);//access update method inside Userclass and pass parameters 
});

route('/delete_user', function () {
    $id=$_POST['id'];
    $userobj = new User; 
    $userobj->delete_user($id);//access delete method inside Userclass and pass parameters
});


$action = $_SERVER['REQUEST_URI'];//detect route on browsers
dispatch($action);


