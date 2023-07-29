<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
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
                            <a class="nav-link " href="login.php">Sign in</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="registration.php">Sign up<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <form action="process_registration.php" method="post">
            <h2>SIGN UP</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Student ID</label>
            <?php if (isset($_GET['studentId'])) { ?>
                <input type="text" name="studentId" placeholder="Student ID" value="<?php echo $_GET['studentId']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="studentId" placeholder="Student ID"><br>
            <?php }?>

            <label>Name</label>
            <?php if (isset($_GET['name'])) { ?>
                <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="name" placeholder="Name"><br>
            <?php }?>

            <label>Email</label>
            <?php if (isset($_GET['email'])) { ?>
                <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="email" placeholder="Email"><br>
            <?php }?>


            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <label>Re Password</label>
            <input type="password" name="re_password" placeholder="Re_Password"><br>

                <button type="submit">Sign Up</button>
            <a href="login.php" class="ca">Already have an account?</a>
        </form>
    </body>
</html>
