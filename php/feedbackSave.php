<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    //connect to database
    $connection = mysqli_connect("localhost", "root", "", "recuritmenthub");

    if (empty($_GET['nme'])) {
        $nameError = "Name is Required";
    } else {
        //read inputs
        $nameInput = $connection->real_escape_string($_GET['nme']);
        echo "<p value= $nameInput>Name: $nameInput</p>";
    }
    if (empty($_GET['email'])) {
        $emailError = "Email is Required";
    } else {
        //read inputs
        $emailInput = $connection->real_escape_string($_GET['email']);
        echo "<p value= $emailInput>Email: $emailInput</p>";
    }
    if (empty($_GET['subject'])) {
        $subjectError = "Subject is Required";
    } else {
        //read inputs
        $subjectInput = $connection->real_escape_string($_GET['subject']);
        echo "<p value= $subjectInput>Subject: $subjectInput</p>";
    }
    if (empty($_GET['url'])) {
        $urlError = "URL is Required";
    } else {
        //read inputs
        $urlInput = $connection->real_escape_string($_GET['url']);
        echo "<p value= $urlInput>URL: $urlInput</p>";
    }
    if (empty($_GET['comment'])) {
        $commentError = "Comment is Required";
    } else {
        //read inputs
        $commentInput = $connection->real_escape_string($_GET['comment']);
        echo "<p value= $commentInput>Comment: $commentInput</p>";
    }

    //query to save data
    mysqli_query(
        $connection,
        "INSERT INTO feedback(FbName, FbEmail, FbSubject, FbURL, FbComment)
        VALUES('{$nameInput}','{$emailInput}','{$subjectInput}','{$urlInput}','{$commentInput}')"
    );

    //disconnect from database
    mysqli_close($connection);

    echo "<h4> Your Feedback has been submited  </h4>";
    ?>
</body>

</html>