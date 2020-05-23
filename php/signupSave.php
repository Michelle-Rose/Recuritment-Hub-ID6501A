<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    //connect to database
    $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

    //get company name
    if (empty($_POST['cNme'])) {
        $error = "Company Name is Required";
    } else {
        //read inputs
        $companyInput = $connection->real_escape_string($_POST['cNme']);
        echo "<p value= $companyInput>company: $companyInput</p>";
    }

    //get first name
    if (empty($_POST['fNme'])) {
        $error = "First Name is Required";
    } else {
        //read inputs
        $fNmeInput = $connection->real_escape_string($_POST['fNme']);
        echo "<p value= $fNmeInput>First Name: $fNmeInput</p>";
    }
    //get last name
    if (empty($_POST['lNme'])) {
        $error = "Last Name is Required";
    } else {
        //read inputs
        $lNmeInput = $connection->real_escape_string($_POST['lNme']);
        echo "<p value= $lNmeInput>Last Name: $lNmeInput</p>";
    }
    //get email
    if (empty($_POST['email'])) {
        $error = "Email is Required";
    } else {
        //read inputs
        $emailInput = $connection->real_escape_string($_POST['email']);
        echo "<p value= $emailInput>Email: $emailInput</p>";
    }
    //get password
    if (empty($_POST['pass'])) {
        $error = "Password is Required";
    } else {
        //read inputs
        $passInput = $connection->real_escape_string($_POST['pass']);
        echo "<p value= $passInput>Password: $passInput</p>";
    }
    
    //query to save data
    mysqli_query(
        $connection,
        "INSERT INTO employer(EmpCompany, EmpFName, EmpLName, EmpEmail, EmpPassword)
        VALUES('{$companyInput}','{$fNmeInput}','{$lNmeInput}','{$emailInput}','{$passInput}')"
    );

    //disconnect from database
    mysqli_close($connection);

    echo "<h4> Your Feedback has been submited  </h4>";
    ?>
</body>

</html>