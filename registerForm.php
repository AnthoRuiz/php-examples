<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 11/28/2017
 * Time: 4:41 PM
 */

$name = $_POST['name'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$pass = $_POST['pass'];

$con = new mysqli("localhost", "root", "", "prueba");

if ($con->connect_errno) {
    printf("Conexión fallida: %s\n", $con->connect_error);
    exit();
}

$result = $con->query("SELECT * FROM user WHERE email = '$email' ");
$con->commit();

if($result->num_rows == 0){
	$con->query("INSERT INTO user SET name = '$name', username = '$userName', email = '$email', pass = '$pass'");
	$con->commit();
	$con->close();
	include('loginForm.html');
}else{
	include('errorRegister.html');
}

