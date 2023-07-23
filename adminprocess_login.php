<?php
session_start();
include "db_conn.php";

if (isset($_POST['Uname']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Uname']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: adminlogin.php?error=Username is required");
	    exit();
	}
  else if(empty($pass)){
        header("Location: adminlogin.php?error=Password is required");
	    exit();
	}
  else{
		//$pass = md5($pass);
		$sql = "SELECT * FROM admins WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
        if ($row['username'] === $uname && $row['password'] === $pass) {
          $_SESSION['username'] = $row['username'];
        	$_SESSION['ID'] = $row['ID'];
        	header("Location: admindashboard.php");
		      exit();
        }
        else{
		      header("Location: adminlogin.php?error=Incorect User name or password");
          exit();
	      }
		}
    else{
			header("Location: adminlogin.php?error=Incorect User name or password");
      exit();
		}
	}

}
else{
	header("Location: adminlogin.php");
	exit();
}
?>
