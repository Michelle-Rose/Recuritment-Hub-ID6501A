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
    <section id="listings">
        <div class="container">
            <div class="editListings col12">
                <div class="listing">
                    <div class="editDetials">
                        <div class="pagehead">
                            <h1>Update job Listing</h1>
                            <form action="#" onsubmit="return editJobValidation()">
                                <input type="text" required class="jobContent" required id="title"
                                    onfocus="highlight('title')" onblur="removeH('title')"
                                    placeholder="Job Listing Title">
                                <br>
                                <i class="fas fa-map-marker-alt icon"></i>
                                <span>
                                    <?php
                                    $mysqli= new mysqli('localhost','root','','recuritmenthub');
                                    $locationSet = $mysqli->query("SELECT locName FROM locationdb");
                                    ?>
                                    <select id="locDDL" name="location">
                                        <option>Select Location</option>
                                        <?php
                                        while($rows = $locationSet -> fetch_assoc()){
                                            $locName = $rows['locName'];
                                            echo "<option value ='$locName'>$locName</option>";
                                        }
                                        ?>
                                    </select>
                                </span>
                                <i class="fas fa-pencil-ruler icon"></i>
                                <?php
                                $mysqli= new mysqli('localhost','root','','recuritmenthub');
                                $classificationSet = $mysqli->query("SELECT ClassName FROM classification");
                                ?>
                                <span>
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
                                <br>
                                <i class="fas fa-suitcase icon"></i>
                                <span>
                                    <input type="text" required class="jobContent" id="exper"
                                        onfocus="highlight('exper')" onblur="removeH('exper')"
                                        placeholder="0-x years experience">
                                </span>
                                <br>
                                <i class="fas fa-money-bill-wave icon"></i>
                                <span>
                                    <input type="text" class="jobContent" id="salary" onfocus="highlight('salary')"
                                        onblur="removeH('salary')" placeholder="$$$ - $$$ anual salary">
                                </span>
                                <br>
                                <i class="fas fa-play icon"></i>
                                <span>
                                    <input type="text" class="jobContent" id="date" onfocus="highlight('date')"
                                        onblur="removeH('date')" placeholder="start date">
                                </span>
                                <br>
                                <p>
                                    <input type="text" class="jobContent" required id="skills"
                                        onfocus="highlight('skills')" onblur="removeH('skills')"
                                        placeholder="Required Skills">
                                </p>
                                <br>
                                <textarea type="text" class="jobContent descript" required id="descript"
                                    onfocus="highlight('descript')" onblur="removeH('descript')"
                                    placeholder="Description"> </textarea>


                                <button type="submit" class="empProfileBtn">Save</button>
                                <a href="employer.php" id="cancel">cancel</a>
                                <label id=output></label>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/editJob.js"></script>
</body>

</html>