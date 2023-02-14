<?php

//   use App\Models\Profile_info;
//   use Illuminate\Routing\Controller as Controller;
//   use Illuminate\Http\Request;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - About your Business | G-Pay</title>
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
        <form class="sign-pg-left" name="registration" action="/gpay.com/verify-account/" method="post">
            {{ csrf_field() }}
            <div class="d-flex" style="position:relative; left:-20px;top:-5px">
                <img style="width:80px;height:80px;position:relative;top:5px;left:-10px" class="logo-img"
                    src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true" alt="logo">
                <div class="title">
                    <h1 class="text-purple">G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>

            <h1>Tell us about your business!<br>
                so we can tailor your<br> experience
            </h1>

            <div class="d-grid justify-content-start align-items-center m-auto pt-3 b-cont">
                <div class="">
                    <p class="label-txt">What’s your company name?*</p>
                    <input type="text" class="company_name input-b" placeholder="" name="company_name" required>

                </div>
                <div class="pt-3">

                    <p class="label-txt">What does your business do?*</p>
                    <!-- <input type="tel" class="company_do input-b" placeholder="Choose industry" name="company_do"> -->
                    <select class="company_do" name="company_do" id="" required>
                        <option value=""></option>
                        <option value="Construction, Trade & Home Services">Construction, Trade & Home Services</option>
                        <option value="Creative Professionals">Creative Professionals</option>
                        <option value="Marketing, Communications & Media">Marketing, Communications & Media</option>
                        <option value="Development & Programming">Development & Programming</option>
                        <option value="Management Consulting">Management Consulting</option>
                        <option value="Information Technology & Support">Information Technology & Support</option>
                        <option value="Accounting & Finance">Accounting & Finance</option>
                        <option value="Automotive & Transport">Automotive & Transport</option>
                        <option value="Health & Wellnes">Health & Wellness</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="pt-3">

                    <p class="label-txt">How would you describe your business? *
                    </p>
                    <!-- <input type="tel" class="describe_business input-b" placeholder="Choose an option" name="describe_business"> -->
                    <select class="describe_business" name="describe_business" id="" required>
                        <option value=""></option>
                        <option value="Its launching soon">It’s launching soon</option>
                        <option value="Its part-time or supplements my main income">It’s part-time or supplements my
                            main income</option>
                        <option value="Its a new business but its my full-time focus">It’s a new business but it’s my
                            full-time focus</option>
                        <option value="Its been my full-time focus for over a year">It’s been my full-time focus for
                            over a year</option>
                    </select>
                </div>

                <div class="pt-3">
                    <p class="label-txt">What's your estimated revenue this year? *
                    </p>
                    <div class=" d-flex justify-content-start align-items-center gap-2">
                        <div>
                            <!-- <input class="currency" name="currency" type="text" placeholder="USD - US Dollar"> -->
                            <select class="currency" name="currency" id="" required>
                                <option value=""></option>
                                <option value="USD - US Dollar">USD - US Dollar</option>
                                <option value="EUR - Euro">EUR - Euro</option>
                                <option value="AED - United Arab Emirates dirham">AED - United Arab Emirates dirham
                                </option>
                                <option value="PHP - Philippine Peso">PHP - Philippine Peso</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="demo-currency">

                            <!-- <input class="estimate_revenue" name="estimate_revenue" type="text" placeholder="Estimated Revenue"> -->
                            <select class="estimate_revenue" name="estimate_revenue" id="" required>
                                <option value=""></option>
                                <option value="Up to $30,000">Up to $30,000</option>
                                <option value="$31,000 to $75,000">$31,000 to $75,000</option>
                                <option value="$76,000 to $125,000<">$76,000 to $125,000</option>
                                <option value="$126,000 t">$126,000 to $500,000</option>
                                <option value="$500,000 or more">$500,000 or more</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="pt-3">

                    <p class="label-txt">How long does it take to complete your services? *
                    </p>
                    <!-- <input type="tel" class=" input-b" placeholder="Choose an option"> -->

                    <select class="long_service" name="long_service" id="" required>
                        <option value=""></option>
                        <option value="Real-time or within a few hours">Real-time or within a few hours</option>
                        <option value="Less than a week">Less than a week</option>
                        <option value="More than a week but less than a month">More than a week but less than a month
                        </option>
                        <option value="More than a month">More than a month</option>

                    </select>

                </div>

                <div class="pt-3">

                    <p class="label-txt">What do you currently use to bill your customers? *
                    </p>
                    <!-- <input type="tel" class=" input-b" placeholder="Choose an option"> -->
                    <select class="current_bill" name="current_bill" id="" required>
                        <option value=""></option>
                        <option class=" " value="Pen and paper">Pen and paper</option>
                        <option class=" " value="Spreadsheets and Word documents">Spreadsheets and Word documents
                        </option>
                        <option class=" " value="I don't use anything right now">I don't use anything right now
                        </option>
                        <option class=" " value="Another accounting software">Another accounting software
                        </option>

                    </select>


                </div>

                <div class="pt-3">
                    <p class="label-txt cust-txt">How customized is your offering for customers? *
                    </p>
                    <!-- <input type="tel" class=" input-b" placeholder="Choose an option"> -->
                    <select class="customized" name="customized" id="" required>
                        <option class=" " value=""></option>
                        <option class=" " value="More or Less The Same">More or Less The Same</option>
                        <option class=" " value="Different or customized">Different or customized</option>

                    </select>
                    {{-- <div class="d-flex justify-content-start align-items-center gap-2">
                        <input style="cursor:pointer; text-align:center;font-weight:400" type="button"
                            value=" More or Less The Same" class="customized-btn btn-ml" >


                        <input style="cursor:pointer; text-align:center;font-weight:400" type="button"
                            value="  Different or customized" class="customized-btn btn-dc">


                    </div> --}}

                </div>

            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <div class="d-flex justify-content-start align-items-center gap-3">
                    <a href="/gpay.com/sign-up/profile-info"><input class="next-button" type="button"
                            value="Back" style="cursor:pointer; text-align:center;font-weight:400"></a>
                    <a href="#"><button class="next-button n-b-extend save_extend_btn" type="submit">Save &
                            Finished</button></a>
                </div>


            </div>
        </form>



        <div class="sign-pg-right">

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="indicator i-2"></div>
                    <div>
                        <p class="txt-indicate">Enter your profile information</p>
                        <br>
                        <p class="txt-indicate">Tell us about your business</p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center" style="gap:200px">
                    <a href="" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Contact Support</p>
                        <img class="log"
                            src="https://github.com/JPA-EliteDeveloper/images/blob/main/question.png?raw=true"
                            alt="">
                    </a>
                    <a href="/gpay.com/login" class="d-flex align-items-center justify-content-center cursor-pointer">
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
        const save_extend_btn = document.querySelector('.save_extend_btn');
        const company_name = document.querySelector('.company_name');
        const company_do = document.querySelector('.company_do');
        const describe_business = document.querySelector('.describe_business');
        const currency = document.querySelector('.currency');
        const estimate_revenue = document.querySelector('.estimate_revenue');
        const long_service = document.querySelector('.long_service');
        const current_bill = document.querySelector('.current_bill');
        const btn_ml = document.querySelector('.btn-ml');
        const btn_dc = document.querySelector('.btn-dc');
        const cust_txt = document.querySelector('.cust-txt');
        const demo_currency = document.querySelector('.demo-currency');
        const customized = document.querySelector('.customized');


        currency.addEventListener('click', function() {
            if (this.value == "USD - US Dollar") {

                demo_currency.innerHTML = `
                <select  class="describe_business estimate_revenue" name="describe_business" id="">
                <option value="Up to $30,000">Up to $30,000</option>
                <option value="$31,000 to $75,000">$31,000 to $75,000</option>
                <option value="$76,000 to $125,000<">$76,000 to $125,000</option>
                <option value="$126,000 t">$126,000 to $500,000</option>
                <option value="$500,000 or more">$500,000 or more</option>
                </select>
                `;
            } else {
                demo_currency.innerHTML =
                    `<input style="padding:7px;width:92%" class="estimate_revenue" name="estimate_revenue" type="number" class="w-100" placeholder="Input an amount...">`;

            }
        });
        save_extend_btn.addEventListener("click", function(event) {
            if (company_name.value == "") {
                company_name.style.borderColor = "#842029";
                company_name.placeholder = "*This field must not be empty!";

            }
            if (company_do.value == "") {
                company_do.style.borderColor = "#842029";

                // l_name.placeholder = "*This field must not be empty!";
            }
            if (describe_business.value == "") {
                describe_business.style.borderColor = "#842029";

                // locate.placeholder = "*This field must not be empty!";
            }
            if (currency.value == "") {
                currency.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (estimate_revenue.value == "") {
                estimate_revenue.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (long_service.value == "") {
                long_service.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (current_bill.value == "") {
                current_bill.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (current_bill.value == "") {
                current_bill.style.borderColor = "#842029";
            }
            if (customized.value == "") {
                customized.style.borderColor = "#842029";
            } else {
                const estimate_revenue = document.querySelector('.estimate_revenue');
                createCookie("company_name", company_name.value, "1");
                createCookie("company_do", company_do.value, "1");
                createCookie("describe_business", describe_business.value, "1");
                createCookie("currency", currency.value, "1");
                createCookie("estimate_revenue", estimate_revenue.value, "1");
                createCookie("long_service", long_service.value, "1");
                createCookie("current_bill", current_bill.value, "1");
                createCookie("customized", customized.value, "1");
            }
        });

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



    <?php
    ?>





</body>

</html>
