<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Account | G-Pay</title>
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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4" style="padding: 100px; background-color: rgba(250, 248, 253, 0.7);border-radius: 20px;">
        <div class="row justify-content-center">
            <form class="col-lg-8 col-md-10" method="post" action="/gpay.com/verify-account/">
                @csrf
                <div class="card mt-2">
                    <input type="text" value="{{$_COOKIE['email']}}" name="email" style="display: none">
                    <div class="card-body">

                        <p class="text-dark alert alert-warning">Check your email while verifying your account!</p>

                        <ul>
                            <li>1. You cannot login when your account is not verified!</li>
                            <li>2. You must verify your account first for security purposes!</li>
                            <li>3. Be sure that you own your email address!</li>
                        </ul>
                    </div>

                    <div class="card-footer">
                        <small class="text-muted">If email doesn't send, please try again by clicking the button below!
                        </small> <br><br>
                        <button class="btn btn-primary" type="submit">Resend</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>

    </script>
</body>

</html>