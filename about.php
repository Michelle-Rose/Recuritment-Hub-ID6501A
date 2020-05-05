<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuritment Hub | About</title>
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
                    <li class="current"><a href="about.php">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="main">
        <div class="container" id="aboutContent">

            <article id="aboutMain" class="col6">
                <h1 id=aboutTitle>About Us</h1>
                <p>Recruitment Hub encompasses a strong international portfolio of employment and education businesses
                    and is a market leader in online employment marketplaces, with deep and rich insights into the
                    future of work.</p>
                <p>Recruitment Hub makes a positive impact on a global scale, with exposure to 2.9 billion people, more
                    than 51 million students and learners and a presence in 18 countries including China and across
                    South-East Asia and Latin America.
                </p>

                <p>At Recruitment Hub we create world-class products through the ongoing investment into AI and
                    technology and have a culture of innovation, empowerment and collaboration. Australian owned and
                    operated, Recruitment Hub employs 1,000 people in Australia and over 10,000 people around the world.
                </p>

            </article>
            <aside id="aboutSide" class=col3>
                <div class="aqua">
                    <h3>What we do</h3>
                    <p>Recruitment Hub is a diverse group of companies that have a unified purpose to help people live
                        more fulfilling and productive working lives and help organisations succeed.Recuritment Hub is
                        here to help get everyone in IT Roles they love. Recuritment Hub is to help you build your own
                        career </p>
                    <br>

                </div>
            </aside>
            <aside id="aboutSide" class=col3>
                <div class="yellow">
                    <h3>Our Detials</h3>
                    <p> <b>Location:</b> 3 Wi Neera Drive, Elsdon, Porirua 5022<br>
                        <b>Phone Number:</b> 0800 83 83 83 <br>
                        <b>email:</b> info@recuritmenthub.com</p>
                    <p>Please feel free to contact us anytime we are more than happy to help.Just keep in mind staff is
                        limited therefore there my be delays in replys.Our expected response
                        time is within 5 working days </p>

                </div>
            </aside>
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <h1>Sign up to get our Newsletters</h1>
            <form>
                <input type="email" required id="email" onfocus="highlight('email')" onblur="removeH('email')"placeholder="Enter Email">
                <button type="submit" class="submitBtn">Subscribe</button>
            </form>
        </div>
    </section>
    <section id=allRecruiters>
        <div class="container">
            <h1 class=pageTitle>Our Recruiters</h1>
            <div class="listRecuriter">
                <img src="img/absoluteIT.jpg">
                <img src="img/alpha.jpg">
                <img src="img/bnz.jpg">
                <img src="img/codeblue.jpg">
                <img src="img/datacom.jpg">
                <img src="img/deloitte.jpg">
                <img src="img/hays.jpg">
                <img src="img/hudson.jpg">
                <img src="img/kordia.jpg">
                <img src="img/momentum.jpg">
                <img src="img/nzpost.jpg">
                <img src="img/projectplus.jpg">
                <img src="img/recruitment studio.jpg">
                <img src="img/socialite.jpg">
                <img src="img/westpac.jpg">
                <img src="img/weta.jpg">
                <img src="img/xero.jpg">
                <img src="img/business.jpg">
                <img src="img/defence.jpg">
                <img src="img/health.jpg">
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