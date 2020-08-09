<?php
	session_start();



	if(isset($_POST['submit'])){

    
		$id = $_POST['ID'];
		$password = $_POST['Password'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$type = $_POST['Type'];


         


		if(empty($id) || empty($password) || empty($name) || empty($email) || empty($type)){
			echo "null submission";
		}else {

	    	$conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	        $result = mysqli_query($conn, 'Insert into user values ('$id','$password','$name','$email','$type') ');


			header('location: Login.html');
		}

	}else{
		header("location: Login.html");
	}


?>