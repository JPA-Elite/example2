<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4" style="padding: 100px; background-color: rgba(250, 248, 253, 0.7);border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2>Forgot your password?</h2>
                <p>Change your password in three easy steps. This helps to keep your new password secure.</p>
                <ol class="list-unstyled">
                    <li><span class="text-primary text-medium">1. </span>Fill in your email address below.</li>
                    <li><span class="text-primary text-medium">2. </span>We'll email you a temporary code.</li>
                    <li><span class="text-primary text-medium">3. </span>Use the code to change your password on our secure website.</li>
                </ol>
                <form class="card mt-4" action="/gpay.com/forgot-pass-request" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email-for-pass">Enter your email address</label>
                            <input class="form-control" type="email" id="email-for-pass" name="email" required=""><small class="form-text text-muted">Type in the email address you used when you registered. Then we'll email a code to this address.</small>
                        </div>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-primary" type="submit" href="/gpay.com/login/">Back</a>
                        <button class="btn btn-primary" type="submit">Notify Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
