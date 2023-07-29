<?php
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC Voting System</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <div >
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #5358C6;">
      <a class="navbar-brand" href="#" >
        <img src="images/strath-logo.png" alt="" width="150" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="landing.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="candidates.php">Candidates</a>
          </li>
          <li class="nav-item active">
             <a class="nav-link" href="logout.php">Logout</a>
           </li>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item active">
            <a class="nav-link" href="profile.php" style="background: white; padding: 10px 15px; color: red; border-radius: 5px; margin-right: 10px; border: none; font-weight: bold;">
              Welcome, Admin <?php echo $_SESSION['name']; ?></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

<!-- Midpart -->
<div class="container-fluid">
	<div class="row gx-30">
    <div class="col-sm-4 coloverlay " style="background-color:rgba(230, 218, 230, 0.785) ;  height: 350px;">
      <h2>STRATHMORE ONLINE VOTING MODULE</h2>
      <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Welcome</a>
    </div>
    <div class="col-sm-8 offset-3 ">
      <img src="images/vote3.jpg" alt=""   width="1039px" height="530px">
    </div>
  </div>
  <div class="row gx-30">
    <div class="col-sm-4 coloverlay " style="background-color:rgba(230, 218, 230, 0.785) ;  height: 350px;">
      <h2>Candidates</h2>
      <a href="candidates.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Veiw Candidates</a>
      <a href="regcandidates.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Register Candidates</a>
    </div>
    <div class="col-sm-8 offset-3 ">
      <img src="images/vote3.jpg" alt=""   width="1039px" height="530px">
    </div>
  </div>
</div>

<!-- footer -->
<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12" style=" background-color: black; margin: 50px 0px 0px 0px; color: #ffffff;">
            <p class="text-center">Copyright@2022-Strathmore University</p>
        </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
else{
  header("Location: adminlogin.php");
  exit();
}
?>