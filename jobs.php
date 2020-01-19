<?php

    include 'apply-email.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/ade368752d.js" crossorigin="anonymous"></script>
    <title>Loobi | Jobs</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="./img/LoobiLogoBorder.png" alt="logo" id="logo">
        </div>
        <ul class="nav-links">
            <li>
                <a href="index">Home</a>
            </li>
            <li>
                <a href="about">About</a>
            </li>
            <li>
                <a class="current" href="jobs">Jobs</a>
            </li>
            <li>
                <a href="#apply-form" class="modalOpenBtn">Apply Now</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <!-- MODAL -->
    <div id="apply-form" class="modal">
        <h2>Fill in your details</h2>
        <br>
        <div id="form-message">
            <? echo $error.$successMessage; ?>
        </div>
        <form id="apply-form-content" class="form" action="jobs" method="post" enctype="multipart/form-data">
            <div class="name-section form-section">
                <input type="text" name="name" id="nameInput" autocomplete="off" required>
                <label for="name" class="label-name">
                    <span class="content-name">Name</span>
                </label>
            </div>
            <div class="nationality-section form-section">
                <input type="text" name="nationality" id="nationalityInput" autocomplete="off" required>
                <label for="nationality" class="label-name">
                    <span class="content-name">Nationality</span>
                </label>
            </div>
            <div class="email-section form-section">
                <input type="text" name="email" id="emailInput" autocomplete="off" required pattern="[^@]+@[^\.]+\..+">
                <label for="email" class="label-name">
                    <span class="content-name">Email</span>
                </label>
            </div>
            <div class="resume-section form-section">
                <input type="file" name="uploaded_file" id="fileInput" required>
                <label for="file" class="resume">
                    Resume
                </label>
            </div>
            <div class="submit-section">
                <p><button type="submit" id="submitBtn" >Submit</button></p>
            </div>
            <br>
        </form>
    </div>



    <div class="jobs-page-content">

        <!-- INFO -->
        <section class="info-area">
            <div class="info-block first">
                <img src="./img/happy.jpg" alt="happy">
                <h1>Teaching At Loobi</h1>
                <p>At Loobi we strive to make every lesson an enjoyable learning experience for the students. With
                    on-site training you will be equipped with the skills to plan an engaging lesson for students of all
                    ages, using student centered language activities to practice new language in a compfortable
                    environment. </p>
            </div>
            <div class="break"></div>
            <div class="info-block second">
                <img src="./img/classroom.jpg" alt="classroom">
                <h1>In the Classroom</h1>
                <p>Each class will have, at most, 10 students, allowing for more time spent interacting with each
                    perosn. The classrooms are also equipped with touch screen computers with all the necessary songs,
                    activities and materials to teach our courses and keep the students engaged. You will also have a
                    local co-teacher in the classroom with you, helping to organize the students and communicate with
                    the parents (we try our best to keep the lessons 100% English, but sometimes the co-teacher can
                    translate if absolutely necessary).</p>
            </div>
            <div class="break"></div>
            <div class="info-block third">
                <img src="./img/schedule.png" alt="schedule" id="schedule">
                <h1>A Normal Week</h1>
                <p>In a normal week you will work 40 hours (full time) with two consecutive days off. You will have
                    classes on weekday evenings, and during the day at the weekend (we work when the students aren’t at
                    school!) During the weekdays you will have time to prepare lesson plans, create materials and help
                    plan extra-curricular events the school is organizing. There are always other teachers around to
                    help you if you need inspiration, or simply want to have a chat. There is also usually time left
                    over for personal development, if you have a desire to learn. </p>
            </div>
        </section>


        <!-- FOOTER -->
        <section class="footer-area">
            <div class="button-area footerBtnArea">
                <h1>JOIN OUR TEAM</h1>
                <a href="#apply-form" class="modalOpenBtn">Apply Now</a>
            </div>
            <div class="wechat">
                <h1>Find us on WeChat</h1>
                <img src="./img/qr.jpg" alt="qr">
            </div>
            <div class="locations">
                <div class="wanke"><i class="fas fa-map-marker-alt"></i><span> 1902 Wanke Plaza, Zhuangshi</span></div>
                <div class="luotuo"><i class="fas fa-map-marker-alt"></i><span> luotuo school address</span></div>
                <div class="tel"><i class="fas fa-phone-alt"></i><span> phone number</span></div>
            </div>
            <div class="icpCopy">ICP: PENDING | Loobi 2019 &copy;</div>
        </section>


        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="./app.js"></script>
    </div>
</body>

</html>