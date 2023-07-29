<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN</title>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
                            <a class="nav-link" href="landing.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="candidates.php">Candidates</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="login.php">Sign in<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="registration.php">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
  	    <form action="process_login.php" method="post">
            <h2>VOTERS LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Student ID</label>
            <input type="text" name="Studentid" placeholder="Student ID"><br>

            <label>Password</label>
            <input type="password" name="Password" placeholder="Password"><br>

            <button type="submit">Login</button>
                <a href="registration.php" class="ca">Register as a Voter</a>
                <a href="adminlogin.php" class="ca">Admin Login</a>
        </form>
	</body>
</html>
