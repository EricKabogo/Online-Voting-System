<?php
include("auth_session.php");
?>
<!DOCTYPE html>
  <html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="index.css" rel="stylesheet">
<title>Document</title>
</head>

<body>
 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg " style="background-color: #5358C6;">
     <div class="container-fluid">
      <a class="navbar-brand" href="#" >
        <img src="../images/strath-logo.png" alt="" width="120" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <div class="form">
              <p>Hey, <?php echo $_SESSION['name']; ?>!</p> 
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active navlinks" aria-current="page" href="Register_Admin.php">Register Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active navlinks" href="Register_candidates.php">Register Candidates</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
          <li class="navoverlay ">
            <a class=" btn btn-danger active" href="..\logout.php" >Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
<div class="row" style="height: 650px;">
     <div class="col-sm-1 vertical" >
      <nav class ="navbar ">
        <ul class ="nav navbar-nav">
        <li class ="nav-item">
        <a class ="nav-link active navlinks" href="dashboard.php"> Dashboard </a>
        </li>
        <li class ="nav-item">
        <a class ="nav-link active navlinks" href="Edit_Candidates.php"> Edit Candidates </a>
        </li>
        <li class ="nav-item">
        <a class ="nav-link active navlinks" href="Edit_Voters.php"> Edit Voters </a>
        </li>
        <li class ="nav-item">
        <a class ="nav-link active navlinks" href="View_Users.php">View Users </a>
        </li>
        <li class ="nav-item">
        <a class ="nav-link active navlinks" href=".html"> Publish Results </a>
        </li>
        <li class ="nav-item ">
        <a class ="nav-link active navlinks" href="#"> Manage Election </a>
        </li>
        </ul>
      </nav>
     </div>
               
        <!-- Admins -->
       <div class="col-sm-3 bg-light justify-content-center" style=" border:1px solid grey; border-radius:10px; margin-top:50px; margin-left:50px;">
        <br><label class="btn text-white bg-dark  w-35 login">Administrators</label><br><br>
        <table class="table table-bordered table-hover">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
         </tr>
         <?php 
         require("..\db_conn.php");
         $sql="SELECT * FROM admin";
         $result=$conn->query($sql);

         if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
              echo"<tr><td>".$row["admin_id"]."</td><td>"
                             .$row["name"]."</td><td>"
                             .$row["email"]."</td>";

            }
         }else{
            echo"No results";
         }

         //$conn->close();
        
         ?>
         </table>
        
      </div>
              <!-- candidates -->
       <div class="col-sm-3  bg-light "style=" border:1px solid grey; border-radius:10px; margin-top:50px; margin-left:50px;">
         <br><label class="btn text-white bg-dark  w-35 login">Candidates</label><br><br>
         <table class="table table-bordered table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Student ID</th>
            <th>Position ID</th>

            
          </tr>
          <?php 
          require("..\db_conn.php");
          $sql="SELECT * FROM 'candidates' ";
          $result=$conn->query($sql);

          if($result !==false && $result->num_rows > 0){
            while($row=$result->fetch_assoc()){
              echo"<tr><td>".$row["candidate_id"]."</td><td>"
                             .$row["name"]."</td><td>"
                             .$row["student_id"]."</td><td>"
                             .$row["position_id"]."</td>";

              }
          }else{
              echo"No results";
          }

          //$conn->close();
        
          ?>
          </table> 
       </div>
               <!-- Voters -->
        <div class="col-sm-3 bg-light "style=" border:1px solid grey; border-radius:10px; margin-top:50px; margin-left:50px;">
           <br><label class="btn text-white bg-dark  w-35 login">Voters</label><br><br>
           <table class="table table-bordered table-hover">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>

            
            </tr>
            <?php 
            require("..\db_conn.php");
            $sql="SELECT * FROM students";
            $result=$conn->query($sql);

            if($result->num_rows > 0){
             while($row=$result->fetch_assoc()){
              echo"<tr><td>".$row["voter_id"]."</td><td>"
                             .$row["name"]."</td><td>"
                             .$row["email"]."</td>";

              }
            }else{
            echo"No results";
            }

            //$conn->close();
        
            ?>
           </table>
        </div>
    </div>
        

    
     <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
