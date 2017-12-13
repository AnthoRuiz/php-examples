<?php 

	class connection{
		function getAllUsers(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "prueba";

			$con = new mysqli($host, $user, $pw, $db);

			if ($con->connect_errno) {
				printf("Conexión fallida: %s\n", $con->connect_error);
			exit();
			}

			$result = $con->query("SELECT * FROM user");
						 echo $result['id'];
					  echo $result['id'];
						  echo $result['id'];
						  echo $result['id'];
						  echo $result['id'];
		}
	}

 ?>