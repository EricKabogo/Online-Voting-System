<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent">
      <a class="navbar-brand" href="index.html" style="color: #642CA9; font-weight: bold;">SC Voting Sytem</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="php/landing.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="candidates.html">Candidates</a>
          </li>
          <li class="nav-item active">
             <a class="nav-link " href="login.php">Sign in</a>
           </li>
         <li class="nav-item active">
            <a class="nav-link " href="registration.php">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
  	<form action="adminprocess_login.php" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="Uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="Password" placeholder="Password"><br>

     	<button type="submit">Login</button>
			<a href="login.php" class="ca">User login</a>
    </form>
	</body>
</html>
