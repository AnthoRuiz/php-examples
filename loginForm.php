<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 11/28/2017
 * Time: 4:41 PM
 */

$pass = $_POST['pass'];
$email = $_POST['email'];

$con = new mysqli("localhost", "root", "", "prueba");

if ($con->connect_errno) {
    printf("Conexión fallida: %s\n", $con->connect_error);
    exit();
}

$result = $con->query("SELECT * FROM user WHERE email = '$email' ");
$con->commit();


if($result->num_rows == 1){
$consult = $result->fetch_array(MYSQLI_ASSOC);
	if($consult['email'] == $email && $consult['pass'] == $pass){
		include('home.html')
	}
}else{
	include('errorLogin.html');
}

	$con->close();

