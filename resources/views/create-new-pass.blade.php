<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password | G-Pay</title>
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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-2" style="padding: 100px; background-color: rgba(250, 248, 253, 0.7);border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2>Create new password?</h2>
                <form class="card mt-4" action="/gpay.com/set-password" method="post" oninput='cpass.setCustomValidity(cpass.value != pass.value ? "Passwords do not match." : "")'>
                    @csrf

                    <div class="card-body">
                        <input type="text" name="email" style="display: none" value="{{$email}}">
                        <p>Setting up the password configuration to , <strong >{{$email}}</strong> :</p>
                        <div class="form-group">
                            <p >New Password</p>
                            <input class="form-control" type="password" id="pass" name="pass"
                                required minlength="8">
                            <br>
                            <p>Confirm Password</p>
                            <input class="form-control" type="password" id="c-pass" name="cpass"
                                required>
                            <hr>
                            <small class="text-muted">*Your password must be unique and strong. Recommended to combine numbers, letters, and symbols.</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" type="submit" href="/gpay.com/login/">Back</a>
                        <button class="btn btn-primary" type="submit">Set Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

    </script>
</body>

</html>
