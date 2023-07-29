<?php
session_start();
include "db_conn.php";

if (isset($_POST['Studentid']) && isset($_POST['Password'])) {

	function validate($data) {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Studentid']);
	$pass = validate($_POST['Password']);

	if (empty($pass) && empty($uname)) {
        header("Location: login.php?error=Student ID and Password is required");
	    exit();
	}elseif (empty($pass)) {
        header("Location: login.php?error=Password is required");
	    exit();
	}elseif (empty($uname)) {
		header("Location: login.php?error=Student ID is required");
	    exit();
	}else {
		$pass = md5($pass);
		$sql = "SELECT * FROM students WHERE student_id='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['student_id'] === $uname && $row['password'] === $pass) {
            $_SESSION['student_id'] = $row['student_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['voter_id'] = $row['voter_id'];
                header("Location: dashboard.php");
                exit();
            }else {
                header("Location: login.php?error=Incorect Student ID or password");
            exit();
            }
		}else {
			header("Location: login.php?error=Incorect Student ID or password");
            exit();
		}
	}

}else {
	header("Location: login.php?error=error");
	exit();
}
?>
