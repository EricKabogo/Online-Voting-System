<?php
session_start();
include "db_conn.php";

if (isset($_POST['Uname']) && isset($_POST['Password'])) {

	function validate($data) {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Uname']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}elseif (empty($pass)) {
        header("Location: login.php?error=Password is required");
	    exit();
	}else {
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: dashboard.php");
                exit();
            }else {
                header("Location: login.php?error=Incorect User name or password");
            exit();
            }
		}else {
			header("Location: login.php?error=Incorect User name or password");
            exit();
		}
	}

}else {
	header("Location: login.php");
	exit();
}
?>
