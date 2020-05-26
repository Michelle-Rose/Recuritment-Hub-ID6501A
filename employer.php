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
    <?php
    require "php/header.php";
    ?>
    
    <div id=page>
        <div class="container white">
            <section id=profile>
                <div class="container">
                    <div class="pagehead">
                        <h1>Welcome to your Profile</h1>
                    </div>
                    <div class="avatar col5">
                        <img src="img/profile.png" alt="profile photo">
                    </div>
                    <div id="profile" class="col7">
                        <ul>
                            <li class="">
                                <h3 class="title">Company Information</h3>
                                <p>
                                    <label class="empProfile" for="busNme">Business Name: </label>
                                </p>
                                <p>
                                    <label class="empProfile" for="Sector">Sector: </label>
                                </p>
                                <p>
                                    <label class="empProfile" for="fNme">First Name: </label>
                                </p>
                                <p>
                                    <label class="empProfile" for="lNme">Last Name: </label>
                                </p>

                                <p>
                                    <label class="empProfile" for="address">Address: </label>
                                </p>

                            </li>
                            <li>
                                <h3 class="title">Contact Information</h3>
                                <p>
                                    <label class="empProfile" for="phNum">Phone Number: </label>
                                </p>
                                <p>
                                    <label class="empProfile" for="email">Email: </label>
                                </p>
                            </li>
                            <li>
                                <h3 class="title">Description of Business</h3>
                                <p>
                                    <label class="empProfile" for="des">Description</label>
                                </p>
                                <p>
                                    <form method="get" action="updateProfile.php">
                                        <button type="submit" class="empProfileBtn">Update</button>
                                    </form>
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
            <section id="listings">
                <div class="container">
                    <form method="get" action="addJob.php">
                        <input type="hidden" id="empID" name="empID" value="9999">
                        <button type="submit" class="empProfileBtn">
                            Add Listing
                        </button>
                    </form>
                    <h3> Current Listings </h3>
                    <div class="currentListings col12">
                        <div class="listing">
                            <div class="detials">
                                <h4><b>Job Listing Title</b></h4>
                                <p><img src="img/logo.jpg" alt="Company Logo"> Company Name</p>
                                <i class="fas fa-map-marker-alt icon"></i><span>location</span><br>
                                <i class="fas fa-pencil-ruler icon"></i><span>Classfication</span><br>
                                <i class="fas fa-suitcase icon"></i><span>0-x years experience</span><br>
                                <i class="fas fa-money-bill-wave icon"></i><span>$ - $$$ anual salary</span><br>
                                <i class="fas fa-play icon"></i><span>start date</span><br> <br>
                                <b>Required Skill Set: </b>
                                <p>List of Skills</p><br>
                                <p>Description: brief description <a href="#">Find out more</a></p>
                            </div>
                            <div class="applybtn">
                                <form method="get" action="updateJobList.php">
                                    <button type="submit" class="applyBtn">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/employer.js"></script>
</body>

</html>