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
    <div id="AddListing">
        <section id="listings">
            <div class="container">
                <div class="editListings col12">
                    <div class="listing">
                        <div class="editDetials">
                            <div class="pagehead">
                                <h1>Add New Listing</h1>
                                <!-- <form method="GET" action="php/jobsave.php">
                                <input type="submit"> 
                            </form>-->
                                <form method="GET" action="php/jobsave.php">
                                    <div class="jobInput">
                                        <input type="text" class="jobContent" required id="title" onfocus="highlight('title')" onblur="removeH('title')" placeholder="Job Listing Title" id="jobTitle" name="title">
                                        <i class="fas fa-check-circle full"></i>
                                        <i class="fas fa-exclamation-circle full"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <!-- <div class="jobInput">
                                        <p><img src="img/logo.jpg" alt="Company Logo"> Company Name</p>
                                    </div> -->
                                    <div class="jobInput">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <span>
                                            <?php
                                            $mysqli = new mysqli('localhost', 'root', '', 'recuritmenthub');
                                            $locationSet = $mysqli->query("SELECT locName FROM locationdb");
                                            ?>
                                            <select id="locDDL" name="location">
                                                <option>Select Location</option>
                                                <?php
                                                while ($rows = $locationSet->fetch_assoc()) {
                                                    $locName = $rows['locName'];
                                                    echo "<option value ='$locName'>$locName</option>";
                                                }
                                                ?>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-pencil-ruler icon"></i>
                                        <span>
                                            <?php
                                            $classificationSet = $mysqli->query("SELECT ClassName FROM classification");
                                            ?>
                                            <select id="classDDL" name="classification">
                                                <option>Select Classification</option>
                                                <?php
                                                while ($rows = $classificationSet->fetch_assoc()) {
                                                    $ClassName = $rows['ClassName'];
                                                    echo "<option value ='$ClassName'>$ClassName</option>";
                                                }
                                                ?>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-suitcase icon"></i>
                                        <span>
                                            <input type="text" class="jobContent" id="exper" onfocus="highlight('exper')" onblur="removeH('exper')" placeholder="0-x years experience" name="experience">
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-money-bill-wave icon"></i>
                                        <span id=icon>
                                            <input type="text" class="jobContent" id="salary" onfocus="highlight('salary')" onblur="removeH('salary')" placeholder="$$$ - $$$ anual salary" name="salary">
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-play icon"></i>
                                        <span>
                                            <input type="text" class="jobContent" id="date" onfocus="highlight('date')" onblur="removeH('date')" placeholder="start date" name="sDate">
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>

                                    <div class="jobInput">
                                        <input type="text" class="jobContent" required id="skill" onfocus="highlight('skill')" onblur="removeH('skill')" placeholder="Required Skills" id="skills" name="skills">
                                        <i class="fas fa-check-circle skills"></i>
                                        <i class="fas fa-exclamation-circle skills"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <p>Breif Description:</p>
                                    <div class="jobInput">
                                        <textarea type="text" required class=jobDescript id="jobBreif" onfocus="highlight('jobBreif')" onblur="removeH('jobBreif')" class="employerContent" name=brief></textarea>
                                    </div>
                                    <p>Full Description:</p>
                                    <div class="jobInput">
                                        <textarea type="text" required class=jobDescript id="jobDescript" onfocus="highlight('jobDescript')" onblur="removeH('jobDescript')" class="employerContent" name=description></textarea>
                                    </div>
                                    <p>
                                        <input type="submit" class="empProfileBtn" value="save">
                                        <a href="employer.php" id="cancel">cancel</a>
                                        <label id=output></label>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/addJob.js"></script>
</body>

</html>