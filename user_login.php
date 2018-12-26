<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$email = $_POST["email"];
	$pwd = $_POST["password"];

	$db_server_name = "localhost";
	$db_user_name = "root";
	$db_password = "root";
	$db_name = "rental_mng";
	$db_con = mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);

	$qry = "SELECT * FROM sign_up_info";

	$qry_result = mysqli_query($db_con,$qry);

	$qry_result_chk = mysqli_num_rows($qry_result);

	if ($qry_result_chk > 0) {
		while ($rows = mysqli_fetch_assoc($qry_result)) {
			if ($rows["email"] == $email && $rows["pwd"] == $pwd) {
				header("Location:home.html");
				exit();
			}
			else {
            //Invaild
          		echo "Email or Password is Incorrect";
				//header("Location:login.html");
				exit();
			}
		}
	}

}

?>