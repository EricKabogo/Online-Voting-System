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
		header("Location: adminlogin.php?error=Admin ID is required");
	    exit();
	}
  else if(empty($pass)){
        header("Location: adminlogin.php?error=Password is required");
	    exit();
	}
  else{
		//$pass = md5($pass);
		$sql = "SELECT * FROM admin WHERE admin_id='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
        if ($row['admin_id'] === $uname && $row['password'] === $pass) {
          $_SESSION['name'] = $row['name'];
        	$_SESSION['admin_id'] = $row['admin_id'];
        	header("Location: Admin/dashboard.php");
		      exit();
        }
        else{
		      header("Location: adminlogin.php?error=Incorect Admin Id or password");
          exit();
	      }
		}
    else{
			header("Location: adminlogin.php?error=Incorect Admin ID or password");
      exit();
		}
	}

}
else{
	header("Location: adminlogin.php");
	exit();
}
?>
