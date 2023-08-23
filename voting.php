<!DOCTYPE html>
<html>
<head>
    <title>Meet your Candidates</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/votingstyle.css">
</head>
<body>
    <!-- Navbar -->
    <div >
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5358C6;">
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
                        <a class="nav-link " href="registration.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form action="voting_data.php" method="post">
        <img src="images/vote3.jpg" class="center"><br>
        <h2>Choose your candidates for each position</h2><br><br>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            
        <h4>Select your chosen Sports Representative</h4>
            <input type="radio" id="sport" name="choice1" value="Candidate1"> Frank<br>
            <input type="radio" id="sport" name="choice1" value="Candidate2"> Sophia<br><br><br>

        <h4>Select your chosen Finance Representative</h4>
            <input type="radio" id="finance" name="choice2" value="Candidate1"> Gideon<br>
            <input type="radio" id="finance" name="choice2" value="Candidate2"> Esther<br><br><br>

        <h4>Select your chosen Academic Representative</h4>
            <input type="radio" id="academic" name="choice3" value="Candidate1"> Fred<br>
            <input type="radio" id="academic" name="choice3" value="Candidate2"> Jane<br><br><br>

        <h4>Select your chosen Student Council Representative</h4>
            <input type="radio" id="council" name="choice4" value="Candidate1"> Ian<br>
            <input type="radio" id="council" name="choice4" value="Candidate2"> Joy<br><br><br>

        <input type="checkbox" id="terms" name="choice"> I am sure of my votes and know they can't be changed once submitted.<br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>