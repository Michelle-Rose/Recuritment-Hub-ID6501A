<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    if (isset($_POST['login-submit'])) {
    }
    else{
    header("Location: ../index.php");
        exit();
    }

    //connect to database
    $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

    //get email
    if (empty($_POST['email-login'])) {
        $error = "Email is Required";
    } else {
        //read inputs
        $emailInput = $connection->real_escape_string($_POST['email-login']);
        echo "<p value= $emailInput>Email: $emailInput</p>";
    }
    //get password
    if (empty($_POST['pass-login'])) {
        $error = "Password is Required";
    } else {
        //read inputs
        $passInput = $connection->real_escape_string($_POST['pass-login']);
        echo "<p value= $passInput>Password: $passInput</p>";
    }

    //query to get Employer data
    $query= "SELECT * from employer";
    echo $query;
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    
    while ($row = mysqli_fetch_row($result)){
        if($row[10]== $emailInput && $row[13] == $passInput){
            //do something
            echo "<p>if</p>";
        break;
        }else{
            //do something else
            echo "<p>else</p>";
        }
    }
    ?>
</body>

</html>