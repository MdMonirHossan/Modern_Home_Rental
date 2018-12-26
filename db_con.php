<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$email = $_POST["email"];
	$pwd = $_POST["password"];

	$db_server_name = "localhost";
	$db_user_name = "root";
	$db_password = "root";
	$db_name = "rental_mng";
	$db_con = mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);

	$qry = "INSERT INTO sign_up_info (first_name,last_name,email,pwd) VALUES ('$first_name','$last_name',
	'$email','$pwd')";

	$qry_result = mysqli_query($db_con,$qry);
	header("Location:signup.html");
	exit();
	
}

 ?>