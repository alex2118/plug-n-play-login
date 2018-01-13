<?php

require 'init.php';

// if (in_array(NULL, $_POST)) {
//   echo "Foo";
// } else {
//   echo "Bar";
//   // $first_name = $_POST['firstName'];
//   // $last_name = $_POST['lastName'];
//   // $email = $_POST['email'];
//   // $password = $_POST['password'];
//   // $confirm_password = $_POST['confirmPassword'];
// }

// connect to db
$db = new Database('test_db');
$conn = $db->connect();

// create user
$user = new User;

print_r($user->columns);
print_r($db->formData);
$user->saveToTable();

// $user->test();

// set variables

// $first_name = $_POST['firstName'];
// $last_name = $_POST['lastName'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirmPassword'];
//
// // set properties
// $user->first_name = $first_name;
// $user->last_name = $last_name;
// $user->email = $email;
// $user->password = $password;
// $user->confirm_password = $confirm_password;
//
// // returns an array
// $result = $user->validate($conn);
//
// if (hasError($result)) {
//
// echo json_encode($result);
//
// } else {
//
// $user->saveToTable('users');
//
// }
//
// function hasError($arr) {
// if(in_array(!NULL, $arr)) {
// return true;
// }
// }
