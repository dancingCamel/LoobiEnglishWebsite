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
    <title>Loobi | About Us</title>
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
                <a class="current" href="about">About</a>
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
        <form id="demo-form-content" class="form" action="index.php" method="post">
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
                <label for="age" class="label-name">
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

    <div class="about-page-content">

        <!-- HEADER -->
        <section class="header-area">
            <h1>About Us</h1>
            <p>Loobi started in Ningbo with the first Loobi Centre opening in Yingzhou in 2014. Since then two more
                Loobi school have opened in Zhenhai.</p>
        </section>


        <!-- INFO -->
        <section class="info-area">
            <div class="wanke-info school-info">
                <img src="./img/lobby.jpg" alt="wanke-lobby">
                <div class="info-text">
                    <h1>1902 Wanke Plaza</h1>
                    <p>The Loobi English 1902 Wanke Plaza centre opened in the beginning of 2017, located on the third
                        floor next to Martin’s Land. We quickly become synonymous with fun activities and great
                        teachers, always providing a comfortable and fun atmosphere for the students to learn well.</p>
                </div>
            </div>
            <div class="break"></div>
            <div class="luotuo-info school-info">
                <img src="./img/luotuo.jpg" alt="luotuo">
                <div class="info-text">
                    <h1>LuoTuo Loobi Center</h1>
                    <p>Opened in 2018, Luotuo Loobi Centre (located in the ...) brought professional foreign teacher
                        English training to the Luotuo area. With English lessons and dual language day care classes we
                        prepare the students for life in an ever connected world.</p>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <section class="footer-area">
            <div class="button-area footerBtnArea">
                <a href="#demo-form" class="modalOpenBtn">马上试听</a>
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