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
    <?php
    require "php/header.php";
    ?>
    <div class="container pageContent">
        <div class="signup signupForm">
            <form method="POST" action="php/signupSave.php">
                <h1>Create a Company Profile</h1>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo "<p>All fields must be fill in</p>";
                    }
                    elseif ($_GET['error'] == "invaildEmail"){
                        echo "<p>Please provide a vaild email/p>";
                    }
                    elseif ($_GET['error'] == "passworddonotmatch"){
                        echo "<p>Passwords do not match</p>";

                    }
                    elseif ($_GET['error'] == "SQLerror"){
                        echo "<p>error with SQL</p>";

                    }
                }else if(isset($_GET['signup'])){
                    if ($_GET['signup'] == "success"){
                        echo "<p>sign up successfull!</p>";
                    }

                }

                ?>
                <ul>
                    <div class="formInput">
                        <input type="text" id="cNme" name="cNme" onfocus="highlight('cNme')" onblur="removeH('cNme')" placeholder="Company" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput" id="sector" name="sector">
                        <select id=sectorDDL name=Sector>
                            <option>Sector</option>
                            <option>Public</option>
                            <option>Private</option>
                            <option>Not for profit</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="formInput">
                        <input type="text" id="fNme" name="fNme" onfocus="highlight('fNme')" onblur="removeH('fNme')" placeholder="First Name" id=name>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="text" id="lNme" name="lNme" onfocus="highlight('lNme')" onblur="removeH('lNme')" placeholder="Last Name" id=name />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="text" class="employerContent" id="address" name="address" onfocus="highlight('address')" onblur="removeH('address')" placeholder="Address Line 1">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="text" class="employerContent" id="postcode" name="code" onfocus="highlight('postcode')" onblur="removeH('postcode')" placeholder="Post Code">
                        <i class="fas fa-check-circle code"></i>
                        <i class="fas fa-exclamation-circle code"></i>
                        <small>Error Message</small>
                        <input type="text" class="employerContent" id="suburb" name="sub" onfocus="highlight('suburb')" onblur="removeH('suburb')" placeholder="Suburb">
                        <i class="fas fa-check-circle place"></i>
                        <i class="fas fa-exclamation-circle place"></i>
                        <small>Error Message</small>

                        <input type="text" class="employerContent" id="city" name="city" onfocus="highlight('city')" onblur="removeH('city')" placeholder="City">
                        <i class="fas fa-check-circle place"></i>
                        <i class="fas fa-exclamation-circle place"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="text" class="employerContent" id="phNum" name="phNum" onfocus="highlight('phNum')" onblur="removeH('phNum')" placeholder="Phone Number">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="email" id="email" name="email" onfocus="highlight('email')" onblur="removeH('email')" placeholder="Email" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="password" id="pass" name="pass" onfocus="highlight('pass')" onblur="removeH('pass')" placeholder="Password" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="formInput">
                        <input type="password" id="pass2" name="confirmed" onfocus="highlight('pass2')" onblur="removeH('pass2')" placeholder="Re type Password" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <!-- <button type="submit" id=signUpBTN name="signup-submit">Sign Up</button> -->
                    <input type="submit" value="Sign Up" name="signup-submit">
                </ul>
            </form>
        </div>
    </div>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src=js/main.js> </script> <script src="js/signup.js"></script>
</body>

</html>