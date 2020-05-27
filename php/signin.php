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
                $sql = "SELECT * FROM employer WHERE EmpEmail=? AND EmpPassword=?;";
                $stmt = $connection->prepare($sql);
                $stmt->bind_param("ss", $username, $pwd);
                // echo $username;

                $stmt->execute();
                $result =  $stmt->get_result();

                // echo "boop";
                $row = $result->fetch_row();
                if ($row != null) {
                    echo implode(", ", $row);
                    session_start();
                    $_SESSION['userID'] = $row[0];
                    echo $_SESSION['userID'];
                    $_SESSION['username'] = $row[9];
                    echo $_SESSION['username'];
                    header("Location: ../index.php?signin=sucess");
                    exit();
                } else {
                    header("Location: ../index.php?error=incorrectpasswordorusername");
                    exit();
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