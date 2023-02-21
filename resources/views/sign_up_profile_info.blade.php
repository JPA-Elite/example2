<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Profile Information | G-Pay</title>
    <script defer src="/_vercel/insights/script.js"></script>
    <link rel="icon" type="image/x-icon"
        href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .body {
            background-image: url("https://github.com/JPA-EliteDeveloper/images/blob/main/login-back.png?raw=true");
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            width: 100%;
            height: 600px;

        }

        .main-signup {
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            padding: 0 !important;
            margin: 0 !important;
        }

        .sign-pg-left {
            background: #bfd7ed;
            height: 100%;
            width: 50%;
            padding: 80px;
            z-index: 1;
            overflow-y: scroll;
        }

        .sign-pg-left select {
            padding: 8px;
        }

        .line {
            width: 250px;
            height: 3px;
            background: rgba(0, 0, 0, 0.57);
            margin-top: 20px;
        }

        .next-button {
            background: #6D60F7;
            border-radius: 5px;
            color: #FAF8FD;
            width: 120px;
            height: 35px;
            border: none;
            margin-top: 10px;
        }

        .n-b-extend {
            width: 150px !important;
        }

        .bg-c {

            width: 400px;
            height: 400px;
            border-radius: 50%;

        }

        .bg1 {
            background: rgba(22, 144, 231, 0.62);
            top: -450px;
            left: 500px;
            position: absolute;
        }

        .bg2 {
            background: rgba(28, 147, 231, 0.33);
            top: -450px;
            left: 550px;
            position: absolute;
        }

        .bg3 {
            background: #3f3d9ac0;
            top: 250px;
            right: -200px;
            position: absolute;
        }

        .bg4 {
            background: #3F3D9A;
            top: 220px;
            right: -210px;
            position: absolute;
            opacity: 0.38;
        }

        .indicator {
            background: #4C4E8D;
            width: 5px;
            height: 100px;
        }

        .indicator::before {
            content: "1";
            background: #4C4E8D;
            top: -13px;
            left: -11px;
            position: relative;
            color: white;
            border-radius: 50%;
            padding: 5px 10px 5px 10px;

        }

        .i-2::before {
            background: rgba(47, 49, 122, 0.55) !important;
        }

        .indicator::after {
            content: "2";
            background: rgba(47, 49, 122, 0.55);
            top: 85px;
            left: -41px;
            position: relative;
            color: white;
            border-radius: 50%;
            padding: 5px 10px 5px 10px;

        }

        .i-2::after {
            background: #4C4E8D !important;
        }

        .sign-pg-right {
            background: transparent !important;
            height: 100%;
            width: 50%;

        }

        .sign-pg-right a {
            color: black;
            text-decoration: none;
        }

        .sign-pg-right>div {
            margin-top: 14rem;
        }

        .sign-pg-right>div>div:nth-child(1)>div:nth-child(2) p {
            position: relative;
            top: 3px;
            left: 30px;
        }

        .sign-pg-right>div>div:nth-child(2) {
            margin-top: 100px;
        }

        .txt-indicate {
            font-weight: 600;
            font-size: 20px;
        }

        .log {
            width: 18px;
            position: relative;
            top: -10px;
            left: 5px;
            cursor: pointer;
        }

        .label-txt {
            position: relative;
            top: 12px;
        }

        input {
            border: 2px solid #9D9D9D;
            border-radius: 2px;
            padding: 2px;
            font-weight: bold;
            padding-left: 10px;
            padding-right: 10px;
            width: 100%;
        }

        input::placeholder {
            font-size: 14px !important;
        }

        .input-b {
            width: 19.2rem !important;
        }

        .b-cont {
            /* height: 183px;
            overflow-y: scroll; */
        }


        .customized-btn {
            padding: 5px 10px 5px 10px;
            background: #E6EDF9;
            border: 2px solid #9D9D9D;
            border-radius: 2px;
            transition: 0.2s all;
            font-weight: 600;
        }

        .customized-btn:hover {
            background: #6d60f71a;
        }


        .active_btn {
            background: #6d60f71a !important;
        }

        /* Verification */
        .verify-body {
            background-image: url("https://github.com/JPA-EliteDeveloper/images/blob/main/login-back.png?raw=true");
        }

        nav {
            background: rgba(255, 255, 255, 0.72);
            padding: 0;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 50px;
        }

        nav a {
            text-decoration: none;
            font-weight: bold;
        }

        nav>div {
            position: relative;
            top: 10px;
        }

        .t-verify {
            color: black;
            position: relative;
            left: 25px;
        }

        .logo img {
            width: 90px;
            height: 50px;
            position: relative;
            top: -10px;
            left: 20px;
        }

        .logo h1 {
            font-size: 30px;
        }

        .logo p {
            font-size: 12px;
            position: relative;
            top: -10px;
        }

        .verify-title {
            font-size: 25px;
            position: relative;
            top: -5px;
            left: 20px;
            color: rgba(0, 0, 0, 0.795);
        }

        .verification-cont {
            margin: auto;
            width: 700px;
            height: 400px;
            background: #b2c7f24b;
            text-align: center;
            margin-top: 5rem;
            padding: 5rem;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .verification-cont h3 {
            font-weight: 500;
            color: rgba(0, 0, 0, 0.863);
        }

        .verification-cont p {
            font-weight: 500;
            margin: 20px;
            font-size: 15px;
            color: #0059AC;
        }

        .verification-cont button {
            padding: 10px 15px 10px 15px;
            border-radius: 5px;
            background: #6D60F7;
            color: rgba(255, 255, 255, 0.959);
            font-weight: bold;
            border: transparent;
            margin: 20px;
        }

        .timer-txt {
            display: none;
        }

        .resend_cont {
            display: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center main-signup h-100">
        <form class="sign-pg-left" action="/gpay.com/sign-up/about-business" method="post" name="registration">
            {{ csrf_field() }}
            <div class="d-flex" style="position:relative; left:-20px;top:-5px">
                <img style="width:80px;height:80px;position:relative;top:5px;left:-10px" class="logo-img"
                    src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true" alt="logo">
                <div class="title">
                    <h1 class="text-purple">G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>

            <h1>Welcome!<br>
                Let's Get You Set Up!
            </h1>

            <div class="d-grid justify-content-start align-items-center m-auto pt-3 b-cont">
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <div>
                        <p class="label-txt">First Name*</p>
                        <input class="f-name" name="f_name" type="text" required>
                    </div>
                    <div>
                        <p class="label-txt">Last Name*</p>
                        <input class="l-name" name="l_name" type="text" required>
                    </div>
                </div>
                <div class="">

                    <p class="label-txt">Where are you located?*</p>
                    <input class="location" name="location" type="text" class="w-100" required>

                </div>
                <div class="">

                    <p class="label-txt">Phone number*</p>
                    <input class="phone" name="phone" type="number" class="w-100" required>

                </div>
                <div class="">

                    <p class="label-txt">Email Address*</p>
                    <input class="email" name="email" type="text" class="w-100" required>

                </div>
                <div class="">

                    <p class="label-txt">Password*</p>
                    <input class="password" name="password" type="password" class="w-100" required minlength="8">

                </div>

                <div class="">

                    <p class="label-txt">Confirm Password*</p>
                    <input class="c-password" name="c-password" type="password" class="w-100" required>

                </div>
            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <!-- /gpay.com/sign_up-about_business/ -->
                <a href="#" class="pro-sub"><button class="next-button" type="submit">Next</button></a>
            </div>
        </form>

        <div class="sign-pg-right">

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="indicator"></div>
                    <div>
                        <p class="txt-indicate">Enter your profile information</p>
                        <br>
                        <p class="txt-indicate">Tell us about your business</p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center " style="gap:200px">
                    <a href="" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Contact Support</p>
                        <img class="log"
                            src="
                        https://github.com/JPA-EliteDeveloper/images/blob/main/question.png?raw=true"
                            alt="">
                    </a>
                    {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; --}}
                    <a href="/gpay.com/login/" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Back</p>
                        <img class="log"
                            src="https://github.com/JPA-EliteDeveloper/images/blob/main/back.png?raw=true"
                            alt="">
                    </a>
                </div>
            </div>


            <div class="bg-c bg1"></div>
            <div class="bg-c bg2"></div>
            <div class="bg-c bg3"></div>
            <div class="bg-c bg4"></div>




        </div>
    </div>
    <script>
        // Profile information
        const pro_sub = document.querySelector('.pro-sub');
        const f_name = document.querySelector('.f-name');
        const l_name = document.querySelector('.l-name');
        const locate = document.querySelector('.location');
        const phone = document.querySelector('.phone');
        const email = document.querySelector('.email');
        const password = document.querySelector('.password');
        const c_password = document.querySelector('.c-password');

        pro_sub.addEventListener("click", function(event) {
            if (f_name.value == "") {
                f_name.style.borderColor = "#842029";
                f_name.placeholder = "*This field must not be empty!";
                event.preventDefault();


            }
            if (l_name.value == "") {
                l_name.style.borderColor = "#842029";
                l_name.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }
            if (locate.value == "") {
                locate.style.borderColor = "#842029";
                locate.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }
            if (phone.value == "") {
                phone.style.borderColor = "#842029";
                phone.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }

            if (!(ValidateEmail(email))) {
                email.style.borderColor = "#842029";
                email.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }
            if (password.value != c_password.value && password.value != '' && c_password.value != '') {
                password.style.borderColor = "#842029";
                c_password.style.borderColor = "#842029";
                event.preventDefault();
            }
             else {
                createCookie("f_name", f_name.value, "1");
                createCookie("l_name", l_name.value, "1");
                createCookie("location", locate.value, "1");
                createCookie("phone", phone.value, "1");
                createCookie("email", email.value, "1");
                createCookie("password", password.value, "1");
                // window.location.href = "/gpay.com/sign_up-about_business/";
            }


        });

        function ValidateEmail(email) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(mailformat)) {
                return true;
            } else {
                return false;
            }
        }

        // Function to create the cookie
        function createCookie(name, value, days) {
            var expires;

            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = escape(name) + "=" +
                escape(value) + expires + "; path=/";
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // Profile information
            $(".main-signup input").on("focus", function() {
                $(".main-signup input").css("border-color", "#9D9D9D");
                $(".main-signup input").attr("placeholder", "");
            });

            $(".main-signup select").on("focus", function() {
                $(".main-signup select").css("border-color", "#9D9D9D");

            });

            // Business Information
            $(".btn-ml").on("click", function() {
                $(this).addClass("active_btn");
                $(".label-txt").css("color", "black");
                $(".btn-dc").removeClass("active_btn");
            });

            $(".btn-dc").on("click", function() {
                $(this).addClass("active_btn");
                $(".label-txt").css("color", "black");
                $(".btn-ml").removeClass("active_btn");
            });
        });
    </script>


</body>

</html>
