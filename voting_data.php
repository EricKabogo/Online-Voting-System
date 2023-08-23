<?php
session_start();
include "db_conn.php";

if (isset($_POST['choice1']) && isset($_POST['choice2'])
    && isset($_POST['choice3']) && isset($_POST['choice4'])
    && isset($_POST['choice'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $sport = validate($_POST['choice1']);
    $fin = validate($_POST['choice2']);
    $academy = validate($_POST['choice3']);
    $pres = validate($_POST['choice4']);
    $term = validate($_POST['choice']);



	if(empty($sport)){
        header("Location: organForm.php?error=Select a Sport representative candidate.");
	    exit();
	}
    else if(empty($fin)){
        header("Location: organForm.php?error=Select a Finance representative candidate.");
	    exit();
	}
	else if(empty($academy)){
        header("Location: organForm.php?error=Select a Academic representative candidate.");
	    exit();
	}
	else if(empty($pres)){
        header("Location: organForm.php?error=Select a Student Council President candidate.");
	    exit();
	}
    else if(empty($term)){
        header("Location: organForm.php?error=Confirm the checkbox at the end of the form.");
	    exit();
	}

	else{
        $sql2 = "INSERT INTO organform(FirstName, LastName, Email, PhoneNumber, County, Subcounty, Occupation, transplant, Illness, Drugs, Injury)
        VALUES('$fname', '$lname', '$mail', '$numb', '$county', '$sub', '$occup', '$sport', '$fin', '$academy', '$pres')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
         	header("Location: voting.php?success=You have successfully cast your vote.");
            exit();
        }
        else {
           	header("Location: voting.php?error=unknown error occurred");
	        exit();
        }
	}
}

else{
	header("Location: voting.php");
	exit();
}
