<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="employer.php">Employer</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner">
        <div class="container">
            <h1>Recruitment for IT Roles</h1>
            <p>we can help you find a role that best suits you</p>
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <h1>Sign up to get our Newsletters</h1>
            <form>
                <input type="email" required id="email" onfocus="highlight('email')" onblur="removeH('email')"
                    placeholder="Enter Email">
                <button type="submit" class="submitBtn">Subscribe</button>
            </form>
        </div>
    </section>
    <section id=topRecruiters>
        <div class="container">
            <h1>Our Top Recruiters</h1>
            <div class="recuriter col4">
                <a class="logos" href="https://www.datacom.co.nz/Home.aspx" target="_blank"><img
                        src="img/datacom.jpg"></a>
                <p>A company who designs, builds and runs IT systems and process for business.</p>
                <p>With 50 years’ experience in technology, we have grown to be one of Asia Pacific’s leading
                    locally-owned IT-based service providers. We operate across New Zealand, Australia, Malaysia and the
                    Philippines.</p>
            </div>
            <div class="recuriter col4">
                <a class="logos" href="https://www.wetaworkshop.com/" target="_blank"><img src="img/weta.jpg"></a>
                <p>Specializes in concept design & manufacture for the creative.</p>
                <p>For over 30 years, we have applied our innovation and artistry to the world’s creative industries.We
                    take on exciting projects of any size, scope, or scale, from the earliest stages of creative
                    development through to manufacture and delivery almost anywhere in the world. We love working
                    collaboratively with clients to bring their ideas to life.</p>
            </div>
            <div class="recuriter col4">
                <a class="logos" href="https://www.xero.com/nz/" target="_blank"><img src="img/xero.jpg"></a>
                <p>online accounting software connects small businesses to their accountant, bookkeeper, bank, and
                    hundreds
                    of apps.</p>
                <p>We started Xero to change the game for small business. Our beautiful cloud-based accounting software
                    connects people with the right numbers anytime, anywhere, on any device. </p>
            </div>
        </div>
    </section>
    <section id=signUp>
        <div class="container">
            <div class="col12">
                <h1 class="pageTitle">Want your Company to be a Recruiter?</h1>
                <form>
                    <!-- <form method="get" action="account.php"> -->
                    <!-- <button type="submit" class="signupBtn">Create your Company Profile</button>
                    <button type="submit" class="signupBtn">Update your Company Profile</button>  -->
                    <a href="account.php?signup" class="signupBtn">Create your Company Profile</a>
                    <a href="account.php?login" class="signupBtn">Update your Company Profile</a>
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