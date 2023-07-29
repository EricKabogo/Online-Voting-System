<?php
session_start();
include "db_conn.php";

if (isset($_POST['studentId']) && isset($_POST['password']) && isset($_POST['email'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data) {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['studentId']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'student_id='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: registration.php?error=Student ID is required&$user_data");
	    exit();
	}elseif (empty($pass)) {
        header("Location: registration.php?error=Password is required&$user_data");
	    exit();
	}elseif (empty($email)) {
        header("Location: registration.php?error=Email is required&$user_data");
	    exit();
	}elseif (empty($re_pass)) {
        header("Location: registration.php?error=Re Password is required&$user_data");
	    exit();
	}elseif (empty($name)) {
        header("Location: registration.php?error=Name is required&$user_data");
	    exit();
	}elseif ($pass !== $re_pass) {
        header("Location: registration.php?error=The confirmation password does not match&$user_data");
	    exit();
	}else{

        $pass = md5($pass);

	    $sql = "SELECT * FROM students WHERE student_id='$uname' ";
	    $result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The Student ID is already registered&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO students(student_id, name, email, voter_id, password) VALUES('$uname', '$name', '$email', NULL, '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: login.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: registration.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}else {
	header("Location: registration.php");
	exit();
}
