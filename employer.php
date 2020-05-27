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
    <?php
    if (isset($_SESSION['userID'])) {
        //echo $_SESSION['userID'];

        //connect to database
        $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

        if (!$connection) {
            die("Connection to database fail: " . mysqli_connect_error());
        }
        $userID = $_SESSION['userID'];
        $stmt = "SELECT * FROM employer WHERE EmpID = $userID";
        $result = mysqli_query($connection, $stmt);

        $row = $result->fetch_row();
        //echo implode(", ",  $row);

        //print result to screen
        if ($row != null) {
            $company = $row[1];
            $Sector = $row[2];
            $fn = $row[3];
            $ln= $row[4];
            $address = $row[5];
            $code= $row[6];
            $sub= $row[7];
            $city= $row[8];
            $email= $row[9];
            $phnum= $row[10];
            $des= $row[11];

            echo "<div id=page>
            <div class='container white'>
                <section id=profile>
                    <div class='container'>
                        <div class='pagehead'>
                            <h1>Welcome to your Profile</h1>
                        </div>
                        <div class='avatar col5'>
                            <img src='img/profile.png' alt='profile photo'>
                        </div>
                        <div id='profile' class='col7'>
                            <ul>
                                <li class=''>
                                    <h3 class='title'>Company Information</h3>
                                    <p>
                                        <label class='empProfile' for='busNme'>Business Name: $company</label>
                                    </p>
                                    <p>
                                        <label class='empProfile' for='Sector'>Sector: $Sector</label>
                                    </p>
                                    <p>
                                        <label class='empProfile' for='fNme'>First Name: $fn</label>
                                    </p>
                                    <p>
                                        <label class='empProfile' for='lNme'>Last Name: $ln</label>
                                    </p>
        
                                    <p>
                                        <label class='empProfile' for='address'>Address: $address,<br>$sub, $city, $code</label>
                                    </p>
                                    
        
                                </li>
                                <li>
                                    <h3 class='title'>Contact Information</h3>
                                    <p>
                                        <label class='empProfile' for='phNum'>Phone Number: $phnum</label>
                                    </p>
                                    <p>
                                        <label class='empProfile' for='email'>Email: $email</label>
                                    </p>
                                </li>
                                <li>
                                    <h3 class='title'>Description of Business</h3>
                                    <p>
                                        <label class='empProfile' for='des'>Description</label>
                                        <label class='empProfile'>$des</label>
                                    </p>
                                    <p>
                                        <form method='get' action='updateProfile.php'>
                                            <button type='submit' class='empProfileBtn'>Update</button>
                                        </form>
                                    </p>
                                </li>
                            </ul>
                        </div>
        
                    </div>
                </section>
                <section id='listings'>
                    <div class='container'>
                        <form method='get' action='addJob.php'>
                            <button type='submit' class='empProfileBtn'>
                                Add Listing
                            </button>
                        </form>
                        
                    </div>
                </section>
            </div>
        </div>";

            $stmt2 = "SELECT * FROM job WHERE EmpID = $userID";
            $jobResults = mysqli_query($connection, $stmt2);

            $jobRow = $jobResults->fetch_row();
            if($jobResults!=null){
               echo" 
               <div id=page>
                <div class='container white'>
                <h3> Current Listings </h3>
                </div>
            </div>";
            }
            else{
                echo" 
               <div id=page>
                <div class='container white'>
                <h3>No Current Listings </h3>
                </div>
            </div>";
            }
            while ($jobRow != null) {

               // echo "<p>test</p>";
               // echo implode(", ",  $jobRow);


                $classID =  $jobRow[3];
                //echo $classID;
                $stmt3 = "SELECT ClassName FROM classification WHERE ClassID = $classID";
                $classResults = mysqli_query($connection, $stmt3);
                $className = $classResults->fetch_row();
                //echo implode(", ",  $className);

                echo "<div id=page>
                <div class='container white'>
                <div class='currentListings col12'>
                            <div class='listing'>
                                <div class='detials'>
                                    <h4><b>$jobRow[4]</b></h4>
                                    <p><img src='img/logo.jpg' alt='Company Logo'>$row[1]</p>
                                    <i class='fas fa-map-marker-alt icon'></i><span>location: $row[7], $row[8]</span><br>
                                    <i class='fas fa-pencil-ruler icon'></i><span>Classfication: $className[0]</span><br>
                                    <i class='fas fa-suitcase icon'></i><span>$jobRow[5]</span><br>
                                    <i class='fas fa-money-bill-wave icon'></i><span>$jobRow[6]</span><br>
                                    <i class='fas fa-play icon'></i><span>start date: $jobRow[7]</span><br> <br>
                                    <b>Required Skill Set: </b>
                                    <p>$jobRow[8]</p><br>
                                    <p>Description: $jobRow[9]<a href='#'>Find out more</a></p>
                                </div>
                                <div class='applybtn'>
                                    <form method='get' action='updateJobList.php'>
                                        <button type='submit' class='applyBtn'>Update</button>
                                    </form>
                                </div>
                            </div>
                        </div> 
                </div>
            </div>";

                $jobRow = $jobResults->fetch_row();

            }

                        
        }
    } else {
        echo "
        <div id=page>
        <div class='container white'>
            <section id=profile>
                <div class='container'>
                    <div class='pagehead'>
                        <h1>Sign into your Employer Profile</h1>
                    </div>
                    <div id=empSigninForm>
                    <form action='php/signin.php' method='POST'>
                        <input type='email' id='email-login' name='email-login' onfocus='highlight(' email-login')' onblur='removeH(' email-login')' placeholder='Email' />
                        <input type='password' id='pass-login' name='pass-login' onfocus='highlight(' pass-login')' onblur='removeH(' pass-login')' placeholder='Password' />
                        <div id=empSignInButton>
                            <button id=navBTN name='login-submit'>Login</button>
                            <br>
                            <a href='signup.php' >click here to Sign Up</a>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    ";
    }
    ?>



    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/employer.js"></script>
</body>

</html>