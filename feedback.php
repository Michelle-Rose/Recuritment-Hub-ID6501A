 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub | Feedback</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    require "php/header.php";
    ?>
    <section id=feedback>
        <div class=container>
            <div class=white>
                <!--Page Heading-->
                <div class="pagehead">
                    <h1>Feedback</h1>
                </div>
                <p>Recruitment Hub strives to bring the best recuriting experience to students, educators, creative
                    professionals, and anyone else within New Zealand the world through its innovative practices.
                    Recruitment Hub welcomes your feedback on its products. Please do so by filling in the form
                    below. </p>
                <form id=feedbackForm method="GET" action="php/feedbackSave.php">
                    <input type="text"  class="feedbackContent" id="nme" name="nme" onfocus="highlight('nme')"
                        onblur="removeH('nme')" placeholder="Name">
                    <input type="text" required class="feedbackContent" id="email" name="email" onfocus="highlight('email')"
                        onblur="removeH('email')" placeholder="Email is required">
                    <input type="text" required class="feedbackContent" id="subject" name="subject" onfocus="highlight('subject')"
                        onblur="removeH('subject')" placeholder="Subject is required">
                    <input type="text" required class="feedbackContent" id="url" name="url" onfocus="highlight('url')"
                        onblur="removeH('url')" placeholder="Page or URL is required">
                    <br><label class="feedbackContent" for="comments">Comments</label>
                    <br><textarea type="text" required class="feedbackContent" id="comment" name="comment"
                        onfocus="highlight('comment')" onblur="removeH('comment')"></textarea>

                    <br><button type="submit" class="fbsubmitBtn">Submit Feedback</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>Recuritment Hub, website for Responsive Web <br> Michelle Holmes 21900986</p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>