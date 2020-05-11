<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub | Account</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/515edf8420.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div id="logo">
                <!-- Logo -->
                <h1><a class="logo" href="index.php"><img src="img/logoIcon.png" alt="Recruitment Hub"><span
                            class="highlight"> Recruitment </span>Hub</a></h1>
            </div>
            <!-- Menu Bar -->
            <nav>
                <ul>
                    <li><a href="jobs.php">Jobs</a></li>
                    <li class="current"><a href="employer.php">Employer</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- to make the sliding account i followed a Florin Pop guide 
          https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/ -->
    <div class="container pageContent">
        <div class=account>
        <div class="container" id="container">
            <div class="formContainer signupcontainer">
                <form action="#" id="signupForm">
                    <h1>Create a Company Profile</h1>
                    <div class="social">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div> 
                    <ul>
                        <div class="formInput">
                            <input type="text" id="cNme" onfocus="highlight('cNme')" onblur="removeH('cNme')"
                                placeholder="Company" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        <div class="formInput">
                            <input type="text" id="fNme" onfocus="highlight('fNme')" onblur="removeH('fNme')"
                                placeholder="First Name" id=name>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        <div class="formInput">
                            <input type="text" id="lNme" onfocus="highlight('lNme')" onblur="removeH('lNme')"
                                placeholder="Last Name" id=name />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        <div class="formInput">
                            <input type="email" id="email" onfocus="highlight('email')" onblur="removeH('email')"
                                placeholder="Email" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        <div class="formInput">
                            <input type="password" id="pass" onfocus="highlight('pass')" onblur="removeH('pass')"
                                placeholder="Password" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        <div class="formInput">
                            <input type="password" id="pass2" onfocus="highlight('pass2')" onblur="removeH('pass2')"
                                placeholder="Re type Password" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                       <button>Sign Up</button> 
                    </ul>
                </form>
            </div>
            <div class="formContainer signinContainer">
                <form action="#">
                    <h1>Sign into your Company Profile</h1>
                  <div class="social">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <input type="email" id="email-login" onfocus="highlight('email-login')"
                        onblur="removeH('email-login')" placeholder="Email" />
                    <input type="password" id="pass-login" onfocus="highlight('pass-login')"
                        onblur="removeH('pass-login')" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlayContainer">
                <div class="overlay">
                    <div class="panel overlayLeft">
                        <h1>Already have a Profile?</h1>
                        <p>sign in to be able to edit your profile as well as update and post new job listing.
                        </p>
                        <button class="hidden" id="signIn">Sign In</button>
                    </div>
                    <div class="panel overlayRight">
                        <h1>Dont have a Profile</h1>
                        <p>Join Recuritment Hub today to find the best recurites for your company</p>
                        <button class="hidden" id="signup">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src=js/main.js></script>
    <script src="js/account.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>