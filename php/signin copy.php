<!DOCTYPE html>

<html>

<head></head>

<body>
    <?php
    if (isset($_POST['login-submit'])) {
        //connect to database
        $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

        if (!$connection) {
            die("Connection to database fail: " . mysqli_connect_error());
        } else {

            $username = $_POST['email-login'];
            $pwd = $_POST['pass-login'];
            // echo "<p>Username: +$username +Password: + $pwd</p>";

            if (empty($username) || empty($pwd)) {
                header("Location: ../index.php?error=emptyfields");
                exit();
            } else {
                $sql = "SELECT * FROM employer WHERE EmpEmail=?;";
                $stmt = mysqli_stmt_init($connection);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "<p>I got to the prepare</p>";
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    $result =  mysqli_stmt_get_result($stmt);

                    if ($row = mysqli_fetch_assoc($result)) {
                        $sql2 = "SELECT EmpPassword FROM employer WHERE EmpEmail= $pwd;";
                        $savePassword = $sql2;
                        if ($savePassword !== $pwd) {
                            header("Location: ../index.php?error=wrongpassword");
                            exit();
                        } else if ($passCheck === $pwd) {
                        } else {
                            header("Location: ../index.php?error=errorwithpassword");
                            exit();
                        }
                    } else {
                        echo "boop";
                        echo $result;
                        // header("Location: ../index.php?error=nouserfound");
                        // exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
    ?>
</body>

</html>