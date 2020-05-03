<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub | Job</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <li class="current"><a href="jobs.php">Jobs</a></li>
                    <li><a href="employer.php">Employer</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="jobSearch">
        <!--Search options-->
        <div class="jobsSearch">
            <input type="text" class="searchForm" placeholder="Enter Keyword">
            <?php
                $mysqli= new mysqli('localhost','root','','recuritmenthub');
                $classificationSet = $mysqli->query("SELECT ClassName FROM classification");
                ?>
            <select id="classDDL" name="classification">
                <option>---Classification---</option>
                <?php
                    while($rows = $classificationSet -> fetch_assoc()){
                        $ClassName = $rows['ClassName'];
                        echo "<option value ='$ClassName'>$ClassName</option>";
                    }
                    ?>
            </select>
            <select id="locDDL" name=location>
            <?php
                $mysqli= new mysqli('localhost','root','','recuritmenthub');
                $locationSet = $mysqli->query("SELECT LocName FROM locationdb");
                ?>
                <option>------Location------</option>
                <?php
                    while($rows = $locationSet -> fetch_assoc()){
                        $LocName = $rows['LocName'];
                        echo "<option value ='$LocName'>$LocName</option>";
                    }
                    ?>
            </select>
            <input type="button" class="searchBtn" value="Find Job">
        </div>
    </section>
    <section id="JobListings">
        <!--Job Listings-->
        <div class="jobList">
            <div class="container">
                <h3>New Listings</h3><br>
                <div class="listing">
                    <div class="detials">
                        <h4><b>Job Listing Title</b></h4>
                        <p><img src="img/logo.jpg" alt="Company Logo"> Company Name</p>
                        <i class="fas fa-map-marker-alt"></i><span>location</span><br>
                        <i class="fas fa-suitcase"></i><span>0-x years experience</span><br>
                        <span>$$$ - $$$ anual salary</span><br>
                        <i class="fas fa-play"></i><span>start date</span><br> <br>

                        <b>Required Skill Set: </b>
                        <p>List of Skills</p><br>
                        <p>Description: brief description <a href="#">Find out more</a></p>


                    </div>
                    <div class="applybtn">
                        <button type="button" class="applyBtn">Apply</button>
                    </div>
                </div>
                <ul class="pageLinks">
                    <li class="previous">&#8592</li>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li class="next">&#8594</li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
</body>

</html>