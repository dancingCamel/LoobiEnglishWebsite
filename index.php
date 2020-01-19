<?php

    include 'demo-email.php';

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
    <title>Loobi | Home</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="./img/LoobiLogoBorder.png" alt="logo" id="logo">
        </div>
        <ul class="nav-links">
            <li>
                <a href="index" class="current">Home</a>
            </li>
            <li>
                <a href="about">About</a>
            </li>
            <li>
                <a href="jobs">Jobs</a>
            </li>
            <li>
                <a href="#demo-form" class="modalOpenBtn">马上试听</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <!-- MODAL -->
    <div id="demo-form" class="modal">
        <h2>Fill in your details</h2>
        <br>
        <div id="form-message">
            <? echo $error.$successMessage; ?>
        </div>
        <form id="demo-form-content" class="form" action="index" method="post">
            <div class="name-section form-section">
                <input type="text" name="name" id="nameInput" autocomplete="off" required>
                <label for="name" class="label-name">
                    <span class="content-name">Name</span>
                </label>
            </div>
            <div class="age-section form-section">
                <input type="text" name="age" id="ageInput" autocomplete="off" required pattern="^[0-9]{1,2}$">
                <label for="age" class="label-name">
                    <span class="content-name">Student Age</span>
                </label>
            </div>
            <div class="xiaoqu-section form-section">
                <input type="text" name="xiaoqu" id="xiaoquInput" autocomplete="off" required>
                <label for="xiaoqu" class="label-name">
                    <span class="content-name">XiaoQu</span>
                </label>
            </div>
            <div class="tel-section form-section">
                <input type="tel" name="tel" id="telInput" autocomplete="off" required pattern="^[0-9]{1,11}$">
                <label for="tel" class="label-name">
                    <span class="content-name">Telephone</span>
                </label>
            </div>
            <div class="submit-section">
                <p><button type="submit" id="submitBtn" >Submit</button></p>
            </div>
            <br>
        </form>
    </div>

    <div class="home-page-content">
        <!-- SHOWCASE -->
        <section class="home-showcase">
            <div class="showcase-bg"></div>
            <h1>Enjoy English</h1>
            <h1>Enjoy Life</h1>
            <a href="#demo-form" class="modalOpenBtn">马上试听</a>
        </section>



        <!-- COURSES -->
        <section class="course-area">
            <div class="courses">
                <h1>Our Courses</h1>
                <div class="card-area">
                    <div class="helloWorld course-card">
                        <img src="./img/helloworld2.jpg" alt="" class="card-img">
                        <h2>Hello World</h2>
                        <p>A gentle introduction to classroom based English language learning. The course is based on the Mice Reader story books, in addition to lots of songs, crafts and fun games so the students learn to love learning.</p>
                    </div>

                    <div class="firstFriends course-card">
                        <img src="./img/firstfriends.jpg" alt="" class="card-img">
                        <h2>First Friends</h2>
                        <p>A comprehensive course designed for kindergarten students incorporating longer dialogs, writing, CLIL, phonics and reading (based on the Mice Reader story books). </p>
                    </div>

                    <div class="ourDiscoveryIsland course-card">
                        <img src="./img/odi2.jpg" alt="" class="card-img">
                        <h2>Our Discovery Island</h2>
                        <p>A more in-depth look at the English language across a broad range of topics. The course includes regular writing, CLIL, phonics, reading comprehension and listening aspects.</p>
                    </div>
                </div>
            </div>
            <div class="button-area">
                <a href="#demo-form" class="modalOpenBtn">马上试听</a>
            </div>
        </section>


        <!-- FEATURES -->
        <section class="feature-area">


            <div class="features">
                <h1>Key Features</h1>
                <p id="feature-description">The Loobi courses incorporate various important features to create an
                    interactive and
                    engaging
                    learning experience.</p>

                <!-- carousel for desktop -->
                <div class="card-carousel">
                    <div class="my-card">
                        <i class="feature-icon fas fa-comments"></i>
                        <h2 class="feature-title">Functional Language</h2>
                        <p class="feature-text">we focus on functional language to get the students communicating
                            confidently and effectively right from the start.</p>
                    </div>
                    <div class="my-card">
                        <i class="feature-icon fas fa-cookie-bite"></i>
                        <h2 class="feature-title">Cooking</h2>
                        <p class="feature-text">we spend time in the kitchen at each level allowing the students to
                            experience something they wouldn’t normally have a chance to do, not only that, but all in
                            English!</p>
                    </div>
                    <div class="my-card">
                        <i class="feature-icon fas fa-flask"></i>
                        <h2 class="feature-title">Science & Math</h2>
                        <p class="feature-text">with an ever increasing focus on STEM, we introduce science and
                            math to the students, in English, from a young age to better prepare them for the future.
                        </p>
                    </div>
                    <div class="my-card">
                        <i class="feature-icon fas fa-palette"></i>
                        <h2 class="feature-title">Arts & Crafts</h2>
                        <p class="feature-text">arts and crafts are used to practice fine motor skills at a young age,
                            and encourage creativity and creative use of language when the students are older. </p>
                    </div>
                    <div class="my-card">
                        <i class="feature-icon fas fa-laugh-beam"></i>
                        <h2 class="feature-title">Fun</h2>
                        <p class="feature-text">we use student led activities and various bespoke language games to
                            keep the students engaged and having fun in class. After all, happy student is a good
                            student.</p>
                    </div>
                </div>



                <!-- feature cards for mobile -->
                <div class="feature-block-area">
                    <div class="feature">
                        <i class="feature-icon fas fa-comments"></i>
                        <h2 class="feature-title">Functional Language</h2>
                        <p class="feature-text">we focus on functional language to get the students communicating
                            confidently and effectivly right from the start.</p>
                    </div>
                    <div class="feature">
                        <i class="feature-icon fas fa-cookie-bite"></i>
                        <h2 class="feature-title">Cooking</h2>
                        <p class="feature-text">we spend time in the kitchen at each level allowing the students to
                            experience something they wouldn’t normally have a chance to do, not only that, but all in
                            English!</p>
                    </div>
                    <div class="feature">
                        <i class="feature-icon fas fa-flask"></i>
                        <h2 class="feature-title">Science & Math</h2>
                        <p class="feature-text">with an ever increasing focus on STEM subjects, we introduce science and
                            math to the students, in English, from a young age to better prepare them for the future.
                        </p>
                    </div>
                    <div class="feature">
                        <i class="feature-icon fas fa-palette"></i>
                        <h2 class="feature-title">Arts & Crafts</h2>
                        <p class="feature-text">arts and crafts are used to practice fine motor skills at a young age,
                            and encourage creativity and creative use of language when the students are older. </p>
                    </div>
                    <div class="feature">
                        <i class="feature-icon fas fa-laugh-beam"></i>
                        <h2 class="feature-title">Fun</h2>
                        <p class="feature-text">we use student led activities and an various bespoke language games to
                            keep the students engaged and having fun in class. After all, happy student is a good
                            student.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <section class="footer-area">
            <div class="button-area footerBtnArea">
                <a href="#demo-form" class="modalOpenBtn ">马上试听</a>
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