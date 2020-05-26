<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    if (isset($_POST['signup-submit'])) {
        //connect to database
        $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

        if (!$connection) {
            die("Connection to database fail: " . mysqli_connect_error());
        }

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
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Email is invaild');</script>";
                header("Location: ../signup.php?error=invaildEmail&cNme=" . $companyInput  . "fNme=" . $fNmeInput . "lNme=" . $lNmeInput . "address=" . $addressInput . "code=" . $codeInput . "sub=" . $suburbInput . "city=" . $city . "phNum=" . $phNumInput);
                exit();
            } else {
                //read inputs
                $emailInput = $connection->real_escape_string($_POST['email']);
                echo "<p value= $emailInput>Email: $emailInput</p>";
            }
        }

        //get password
        if (empty($_POST['pass'])) {
            $error = "Password is Required";
        } else {
            //read inputs
            $intalpassInput = $connection->real_escape_string($_POST['pass']);
            echo "<p value= $intalpassInput>Password: $intalpassInput</p>";
        }

        //get password
        if (empty($_POST['confirmed'])) {
            $error = "Password is Required";
        } else {
            //read inputs
            $passwordRepeat = $connection->real_escape_string($_POST['confirmed']);
            echo "<p value= $passwordRepeat>Password: $passwordRepeat</p>";
        }

        if ($intalpassInput !== $passwordRepeat) {
            header("Location: ../signup.php?error=passworddonotmatch&cNme=" . $companyInput  . "fNme=" . $fNmeInput . "lNme=" . $lNmeInput . "address=" . $addressInput . "code=" . $codeInput . "sub=" . $suburbInput . "city=" . $city . "phNum=" . $phNumInput . "email=" . $emailInput);
            exit();
        } else {
            $passInput = $intalpassInput;
        }

        if (!empty($error)) {
            echo "<script>alert('All fields must be fill in');</script>";
            header("Location: ../signup.php?error=emptyfields&cNme=" . $companyInput  . "fNme=" . $fNmeInput . "lNme=" . $lNmeInput . "address=" . $addressInput . "code=" . $codeInput . "sub=" . $suburbInput . "city=" . $city . "phNum=" . $phNumInput . "email=" . $emailInput);
            exit();
        } else {

            //query to see if username already exist in database
            $sql = "SELECT EmpEmail FROM employer WHERE EmpEmail=?";
            $statement = mysqli_stmt_init($connection);
            if (!mysqli_stmt_prepare($statement,  $sql)) {
                header("Location: ../signup.php?error=SQLerror&cNme=" . $companyInput  . "fNme=" . $fNmeInput . "lNme=" . $lNmeInput . "address=" . $addressInput . "code=" . $codeInput . "sub=" . $suburbInput . "city=" . $city . "phNum=" . $phNumInput . "email=" . $emailInput);
                exit();
            } else {
                //query to save data
                mysqli_query(
                    $connection,
                    "INSERT INTO employer(EmpCompany, EmpSector, EmpFName, EmpLName, 
                    EmpAddress, EmpPostcode, EmpSuburb, EmpCity, EmpEmail, EmpPhNum, EmpPassword)
                    VALUES('{$companyInput}','{$sectorInput}','{$fNmeInput}','{$lNmeInput}',
                    '{$addressInput}','{$codeInput}','{$suburbInput}','{$cityInput}','{$emailInput}','{$phNumInput}','{$passInput}')"
                );
                //disconnect from database
                mysqli_stmt_close($statement);
                mysqli_close($connection);
                header("Location: ../signup.php?signup=success&cNme=" . $companyInput  . "fNme=" . $fNmeInput . "lNme=" . $lNmeInput . "address=" . $addressInput . "code=" . $codeInput . "sub=" . $suburbInput . "city=" . $city . "phNum=" . $phNumInput . "email=" . $emailInput);
                exit();
            }
            //header("Location: http://localhost/Recuritment-Hub-ID6501A/account.php?login");
        }
    } else {
        header("Location: http://localhost/Recuritment-Hub-ID6501A/signup.php");
        exit();
    }


    /*  

    
    
    
    
    


    echo "<h4> Your Feedback has been submited  </h4>"; */
    ?>
</body>

</html>