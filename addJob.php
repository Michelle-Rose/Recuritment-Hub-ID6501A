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
    <div id="AddListing">
        <section id="listings">
            <div class="container">
                <div class="editListings col12">
                    <div class="listing">
                        <div class="editDetials">
                            <div class="pagehead">
                                <h1>Add New Listing</h1>
                                <form action="#" id="addJobForm">
                                    <div class="jobInput">
                                        <input type="text" class="jobContent" required id="title"
                                            onfocus="highlight('title')" onblur="removeH('title')"
                                            placeholder="Job Listing Title" id="jobTitle">
                                        <i class="fas fa-check-circle full"></i>
                                        <i class="fas fa-exclamation-circle full"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-pencil-ruler icon"></i>
                                        <span>
                                            <?php
                                            $mysqli= new mysqli('localhost','root','','recuritmenthub');
                                            $classificationSet = $mysqli->query("SELECT ClassName FROM classification");
                                            ?>
                                            <select id="classDDL" name="classification">
                                                <option>Classification</option>
                                                <?php
                                                    while($rows = $classificationSet -> fetch_assoc()){
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
                                            <input type="text" class="jobContent" id="exper"
                                                onfocus="highlight('exper')" onblur="removeH('exper')"
                                                placeholder="0-x years experience" 2>
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                    <i class="fas fa-money-bill-wave icon"></i>
                                        <span id=icon>
                                            <input type="text" class="jobContent" id="salary"
                                                onfocus="highlight('salary')" onblur="removeH('salary')"
                                                placeholder="$$$ - $$$ anual salary">
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                        <i class="fas fa-play icon"></i>
                                        <span>
                                            <input type="text" class="jobContent" id="date" onfocus="highlight('date')"
                                                onblur="removeH('date')" placeholder="start date">
                                        </span>
                                        <i class="fas fa-check-circle quarter"></i>
                                        <i class="fas fa-exclamation-circle quarter"></i>
                                        <small>Error Message</small>
                                    </div>

                                    <div class="jobInput">
                                        <input type="text" class="jobContent" required id="skill"
                                            onfocus="highlight('skill')" onblur="removeH('skill')"
                                            placeholder="Required Skills" id="skills">
                                        <i class="fas fa-check-circle skills"></i>
                                        <i class="fas fa-exclamation-circle skills"></i>
                                        <small>Error Message</small>
                                    </div>
                                    <div class="jobInput">
                                        <textarea type="text" required class=jobDescript id="jobDescript"
                                            onfocus="highlight('jobDescript')" onblur="removeH('jobDescript')"
                                            class="employerContent"></textarea>
                                    </div>
                                    <p>
                                        <button type="submit" class="empProfileBtn">Save</button>
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