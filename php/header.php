<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub | Employer</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/515edf8420.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div id="logo">
                <!-- Logo -->
                <h1><a class="logo" href="index.php"><img src="img/logoIcon.png" alt="Recruitment Hub"><span class="highlight"> Recruitment </span>Hub</a></h1>
            </div>
            <!-- Menu Bar -->
            <nav>
                <ul>
                    <li><a href="jobs.php">Jobs</a></li>
                    <li><a href="employer.php">Employer</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
                <form action="php/signin.php" method="POST">
                    <input type="email" id="email-login" name="email-login" onfocus="highlight('email-login')" onblur="removeH('email-login')" placeholder="Email" />
                    <input type="password" id="pass-login" name="pass-login" onfocus="highlight('pass-login')" onblur="removeH('pass-login')" placeholder="Password" />
                    <button id=navBTN name="login-submit">Login</button>
                    <a href="signup.php" id=button>Sign Up</a>
                </form>
            </nav>
        </div>
    </header>
</body>

</html>