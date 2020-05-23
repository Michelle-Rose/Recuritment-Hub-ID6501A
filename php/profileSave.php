<!DOCTYPE html>
<html>

<head></head>

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
    //get sector
    if (empty($_POST['Sector'])) {
        $error = "Sector is Required";
    } else {
        //read inputs
        $sectorInput = $_POST['Sector'];
        echo "<p value= $sectorInput>Sector: $sectorInput</p>";
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
    //get Address
    if (empty($_POST['address'])) {
        $error = "Address is Required";
    } else {
        //read inputs
        $addressInput = $connection->real_escape_string($_POST['address']);
        echo "<p value= $addressInput>Address: $addressInput</p>";
    }
    //get Post code
    if (empty($_POST['code'])) {
        $error = "Post code is Required";
    } else {
        //read inputs
        $codeInput = $connection->real_escape_string($_POST['code']);
        echo "<p value= $codeInput>Post code: $codeInput</p>";
    }
    //get Suburb
    if (empty($_POST['sub'])) {
        $error = "Suburb is Required";
    } else {
        //read inputs
        $suburbInput = $connection->real_escape_string($_POST['sub']);
        echo "<p value= $suburbInput>Suburb: $suburbInput</p>";
    }
    //get city
    if (empty($_POST['city'])) {
        $error = "city is Required";
    } else {
        //read inputs
        $cityInput = $connection->real_escape_string($_POST['city']);
        echo "<p value= $cityInput>city: $cityInput</p>";
    }
    //get phone number
    if (empty($_POST['phNum'])) {
        $error = "Phone Number is Required";
    } else {
        //read inputs
        $phNumInput = $connection->real_escape_string($_POST['phNum']);
        echo "<p value= $phNumInput>Phone Number: $phNumInput</p>";
    }
    //get email
    if (empty($_POST['email'])) {
        $error = "Email is Required";
    } else {
        //read inputs
        $emailInput = $connection->real_escape_string($_POST['email']);
        echo "<p value= $emailInput>Email: $emailInput</p>";
    }
    //get description
    if (empty($_POST['des'])) {
        $error = "Description is Required";
    } else {
        //read inputs
        $desInput = $connection->real_escape_string($_POST['des']);
        echo "<p value= $desInput>Description: $desInput</p>";
    }
$queryString =  "INSERT INTO employer(EmpCompany, EmpSector, EmpFName, EmpLName, EmpAddress, EmpPostcode, EmpSuburb, EmpCity, EmpEmail, EmpPhNum, EmpDescription)
VALUES('{$companyInput}','{$sectorInput}','{$fNmeInput}','{$lNmeInput}','{$addressInput}','{$codeInput}','{$suburbInput}','{$cityInput}','{$emailInput}','{$phNumInput}','{$desInput}')";
echo "$queryString";
    //query to save data
     mysqli_query(
        $connection, $queryString
       
    );

    //disconnect from database
    mysqli_close($connection);

    echo "<h4> Your Feedback has been submited  </h4>";
    ?>
</body>

</html>