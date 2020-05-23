<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
    //console.log("I made it to jobsave.php");
    //open database
    $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

    if (empty($_GET['title'])) {
        $titleError = "Job Title is Required";
    } else {
        //read inputs
        $titleInput = $connection->real_escape_string($_GET['title']);
        echo "<p value = $titleInput>Title: $titleInput</p>";
    }

    if (empty($_GET['location'])) {
        $locError = "Location is Required";
    } else {
        //read inputs
        $locInput = $connection->real_escape_string($_GET['location']);
        echo "<p value = $locInput>Location: $locInput</p>";
    }

    if (empty($_GET['classification'])) {
        $classError = "Classification is Required";
    } else {
        //read inputs
        $classInput = $connection->real_escape_string($_GET['classification']);
        echo "<p value = $classInput>Classification: $classInput</p>";
    }

    if (empty($_GET['experience'])) {
        $expError = "Experience is Required";
    } else {
        //read inputs
        $experInput = $connection->real_escape_string($_GET['experience']);
        echo "<p value = $experInput>Experience: $experInput</p>";
    }

    if (empty($_GET['salary'])) {
        $salaryError = "Salary is Required";
    } else {
        //read inputs
        $salaryInput = $connection->real_escape_string($_GET['salary']);
        echo "<p value = $salaryInput>Salary: $salaryInput</p>";
    }

    if (empty($_GET['sDate'])) {
        $sDate = "Start Date is Required";
    } else {
        //read inputs
        $sdateInput = $connection->real_escape_string($_GET['sDate']);
        echo "<p value = $sdateInput>Start Date: $sdateInput</p>";
    }

    if (empty($_GET['skills'])) {
        $skillsError = "Skills is Required";
    } else {
        //read inputs
        $skillsInput = $connection->real_escape_string($_GET['skills']);
        echo "<p value = $skillsInput>Skill: $skillsInput</p>";
    }

    if (empty($_GET['brief'])) {
        $briefError = "Brief Description is Required";
    } else {
        //read inputs
        $breifDInput = $connection->real_escape_string($_GET['brief']);
        echo "<p value = $breifDInput>Breif Description: $breifDInput</p>";
    }

    if (empty($_GET['description'])) {
        $fullError = "Full Job Description is Required";
    } else {
        //read inputs
        $fullDInput = $connection->real_escape_string($_GET['description']);
        echo "<p value = $fullDInput>Full Decription: $fullDInput</p>";
    }


    /* //query to get ID        
        //$empID =  $connection->query("SELECT empID FROM employer WHERE empName ");*/

    //query to get location ID  
    $result = $connection->query("SELECT locID 
        FROM locationdb 
        WHERE locName = \"$locInput\"")->fetch_row();
    echo "<p value = $result[0]>Result: $result[0]</p>";

    if ($result == "" || $result == Null) {
        $error = "Error getting Location ID";
        echo "<p value = $error>$error</p>";
    } else {
        $locID = $result[0];
        echo "<p value = $locID>locID: $locID</p>";
    }


    //query to get classification ID  
    $result = $connection->query("SELECT ClassID 
        FROM classification 
        WHERE ClassName = \"$classInput\"")->fetch_row();
    echo "<p value = $result[0]>Result: $result[0]</p>";

    if ($result == "" || $result == Null) {
        $error = "Error getting Classification ID";
        echo "<p value = $error>$error</p>";
    }
    else{
        $classID = $result[0];
        echo "<p value = $classID>locID: $classID</p>";
    }
   



    //query to save data
    /*  mysqli_query($connection,"INSERT INTO job(EmpID, LocID, ClassID, jobTitle, jobExperience, jobSalary, jobStartDate, jobBreifD, jobDescript)
        VALUES('{$empID}','{$locID}','{$classID}','{$titleInput}','{$experInput}','{$salaryInput}','{$sdateInput}','{$breifDInput}','{$fullDInput}')");
         */
        mysqli_query($connection,"INSERT INTO job(EmpID, LocID, ClassID, JobTitle, JobExperience, JobSalary, JobStartDate, JobSkill, JobBreifD, JobDescript)
        VALUES('{$empID}','{$locID}','{$classID}','{$titleInput}','{$experInput}','{$salaryInput}','{$sdateInput}','{$skillsInput}','{$breifDInput}','{$fullDInput}')");
        
        
    ?>
</body>

</html>