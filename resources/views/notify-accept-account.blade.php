<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accept Account | G-Pay</title>
    <script defer src="/_vercel/insights/script.js"></script>
    <link rel="icon" type="image/x-icon"
        href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">

    <style>
        body {
            background-image: url("https://github.com/JPA-EliteDeveloper/images/blob/main/login-back.png?raw=true");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-control:not(textarea) {
            height: 44px;
        }

        .form-control {
            padding: 0 18px 3px;
            border: 1px solid #dbe2e8;
            border-radius: 22px;
            background-color: #fff;
            color: #606975;
            font-family: "Maven Pro", Helvetica, Arial, sans-serif;
            font-size: 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-group label {
            margin-bottom: 8px;
            padding-left: 18px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }


        .form-text {
            padding-left: 18px;
        }

        .text-muted {
            color: #9da9b9 !important;
        }

        #alert {
            display: none
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4" style="padding: 100px; background-color: rgba(250, 248, 253, 0.7);border-radius: 20px;">
        <div class="row justify-content-center">
            <form class="col-lg-8 col-md-10" method="post" action="/gpay.com/sign-up/account-process">
                @csrf
                <div class="card mt-2">
                    <input type="text" value="{{ $_COOKIE['email'] }}" name="email" style="display: none">
                    <div class="card-body">

                        <h5 class="text-dark" style="font-weight:bold">On the way verifying your account!</h5>
                        <hr>

                        <p>Complete the steps below:</p>

                        <?php
                        function randomPassword()
                        {
                            $alphabet = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@!#$%^&*';
                            $pass = []; //remember to declare $pass as an array
                            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                            for ($i = 0; $i <= 15; $i++) {
                                $n = rand(0, $alphaLength);
                                $pass[] = $alphabet[$n];
                            }
                            return implode($pass); //turn the array into a string
                        }

                        // echo randomPassword();

                        $rand = randomPassword();
                        ?>


                        <p>Please type <b style="color:blue">{{ $rand }}</b> in the input below:</p>
                        <input type="text" value="{{ $rand }}" id="pass" style="display:none">
                        <div class="mb-3">

                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">Enter the code</span>
                                <input type="text" class="form-control" id="input-pass"
                                    aria-describedby="basic-addon3" required>
                            </div>
                            <br>
                            <div class="alert alert-warning" id="alert">
                                Verication code does not match!
                            </div>

                        </div>
                    </div>



                    <div class="card-footer">
                        <div style="display:flex;align-items: center;gap:5px">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to our terms and conditions
                            </label>
                        </div>

                        {{-- <small class="text-muted">If email doesn't send, please try again by clicking the button below! </small> <br><br> --}}
                        <br>
                        <button id="submit" class="btn btn-primary" type="submit">Verify</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        var pass = document.getElementById('pass');
        var cpass = document.getElementById('input-pass');
        var submit = document.getElementById('submit');

        submit.addEventListener("click", function(event) {

            if (pass.value != cpass.value && pass.value != '' && cpass.value != '') {
                document.getElementById('alert').style.display = 'block';
                event.preventDefault();
            }
        });

        cpass.addEventListener('click', () => {
            document.getElementById('alert').style.display = 'none';
        });
    </script>
</body>

</html>
