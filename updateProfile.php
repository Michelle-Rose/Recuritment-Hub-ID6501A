<!DOCTYPE html>
<html lang="en">

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
    <div id="updateProfile">
        <section id=editProfile>
            <div class="container">
                <div class="pagehead">
                    <h1>Update your Profile</h1>
                </div>
                <div id="profileSide" class="col4">
                    <img src="img/profile.png" alt="profile photo">
                    <button type="submit" class="upload">Upload</button>
                    <button type="submit" class="delete">Delete</button>
                </div>
                <div id="upf" class="col8">
                    <ul>
                        <h3 class="title">Company Information</h3>
                        <form action="#" id=profileForm>
                            <li>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="busName"
                                        onfocus="highlight('busName')" onblur="removeH('busName')"
                                        placeholder="Business Name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <select id=sectorDDL name=Sector>
                                        <option>Sector</option>
                                        <option>Public</option>
                                        <option>Private</option>
                                        <option>Not for profit</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="fNme" onfocus="highlight('fNme')"
                                        onblur="removeH('fNme')" placeholder="First Name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="lNme" onfocus="highlight('lNme')"
                                        onblur="removeH('lNme')" placeholder="Last Name">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="address"
                                        onfocus="highlight('address')" onblur="removeH('address')"
                                        placeholder="Address Line 1">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="postcode"
                                        onfocus="highlight('postcode')" onblur="removeH('postcode')"
                                        placeholder="Post Code">
                                    <i class="fas fa-check-circle code"></i>
                                    <i class="fas fa-exclamation-circle code"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="suburb" onfocus="highlight('suburb')"
                                        onblur="removeH('suburb')" placeholder="Suburb">
                                    <i class="fas fa-check-circle place"></i>
                                    <i class="fas fa-exclamation-circle place"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="city" onfocus="highlight('city')"
                                        onblur="removeH('city')" placeholder="City">
                                    <i class="fas fa-check-circle place"></i>
                                    <i class="fas fa-exclamation-circle place"></i>
                                    <small>Error Message</small>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Contact Information</h3>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="phNum" onfocus="highlight('phNum')"
                                        onblur="removeH('phNum')" placeholder="Phone Number">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="profileInput">
                                    <input type="text" class="employerContent" id="email" onfocus="highlight('email')"
                                        onblur="removeH('email')" placeholder="Email">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Description of Business</h3>
                                <div class="profileInput">
                                    <textarea type="text" required class=profileDescript id="descript"
                                        onfocus="highlight('descript')" onblur="removeH('descript')"
                                        class="employerContent"></textarea>
                                </div>
                                <p>
                                    <button type="submit" class="empProfileBtn">Save</button>
                                    <a href="employer.php" id="cancel">cancel</a>
                                    <label id=output></label>
                                </p>
                            </li>

                        </form>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/employer.js"></script>
</body>

</html>