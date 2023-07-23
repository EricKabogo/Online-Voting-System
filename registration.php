<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#" >
                <img src="images/strath-logo.png" alt="" width="120" height="70">
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
        <form action="process_registration.php" method="post">
            <h2>SIGN UP</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Name</label>
            <?php if (isset($_GET['name'])) { ?>
                <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="name" placeholder="Name"><br>
            <?php }?>

            <label>Username</label>
            <?php if (isset($_GET['uname'])) { ?>
                <input type="text" name="uname" placeholder="Username" value="<?php echo $_GET['uname']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="uname" placeholder="Username"><br>
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
