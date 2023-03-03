<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form | G-Pay</title>
    <script defer src="/_vercel/insights/script.js"></script>
    <link rel="icon" type="image/x-icon" href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
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
            padding: 5rem;
            overflow: hidden;
            width: 100%;
        }

        .cont-wrapper {
            position: fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
            left: 18rem;
            top: 3.5rem;
            width: 60rem;
            height: 40rem;
            /* background-image: url("/src/img/sign-background.jpg"); */
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .cont-wrapper .mask {
            position: absolute;
            left: 0rem;
            width: 60rem;
            height: 40rem;
            border-radius: 20px;
            background-color: rgba(250, 248, 253, 0.7);
            opacity: 0.4;
            z-index: 1;
        }

        .logo {
            /* position: absolute;
    left: 50px;
    top: 50px; */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .logo img {
            width: 80px;
        }

        .logo>div h1 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            color: #6D60F7;
        }

        .logo>div p {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 18px;

            color: #000000;

        }

        .logo>div .title {
            position: relative;
            left: 12px;
        }

        .log-form {
            z-index: 2;
        }

        .log-form h1 {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 61px;
            text-align: center;
            color: #6D60F7;
        }

        .log-form .button-group {
            margin-top: 25px;
        }

        .log-form .button-group button {
            transition: all 0.5s !important;
            border-radius: 25px !important;
            width: 120px;
        }

        .log-form .button-group button:hover {
            font-weight: bold !important;

        }

        .login-form {
            margin-top: 20px;
            background: rgba(46, 134, 217, 0.1) !important;
            border-radius: 20px;
        }


        @media only screen and (max-width: 1366px) {
            .cont-wrapper {
                left: 20rem;
                top: 3rem;
                padding: 2rem;
                width: 45rem;
                height: 35rem;
            }


            .cont-wrapper .mask {
                padding: 2rem;
                width: 45rem;
                height: 35rem;

            }

            .cont-wrapper .logo>div .back-img {
                width: 90% !important;
            }

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet"> -->

</head>

<body class="body">
    <div class="cont-wrapper">
        <div class="mask"></div>
        <div class="logo d-grid gap-2">
            <div class="d-flex align-items-center">
                <a href="/gpay.com">
                    <img src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true" alt="logo">
                </a>

                <div class="title">
                    <h1>G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>
            <div>
                <img class="w-75 back-img" src="https://raw.githubusercontent.com/JPA-EliteDeveloper/images/d60222f630772969fbeb65bf5ca86eb84b396391/com.svg" alt="com">
            </div>

        </div>
        <div class="log-form">
            <h1>Welcome to G-Pay!</h1>
            <form class="form-control login-form p-5" action="/gpay.com/upload/post" method="post" name="registration" id="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Image</label>
                    <input type="file" name="image" id="email" class="form-control" required>
                </div>

                <div class="d-flex justify-content-center gap-5 button-group">
                    <button type="submit" class="btn bg-purple" id="signin">Post</button>
                </div>
            </form>
            @if($errors->any())

            @if($errors->first('img_err'))
            <div class="alert alert-warning mt-2 text-center text-dark alert-box">
                <strong>{{$errors->first('img_err')}}</strong>
            </div>
            @endif

            @endif


        </div>

    </div>

    <script>
        const form = document.querySelector('#form');
        form.addEventListener('mouseover', () => {
            window.setTimeout(function() {
                document.querySelector('.alert-box').style.display = 'none';
            }, 1000);
        });
    </script>


    <!-- <div class="container" style="margin-top: 100px;">
      <h1>Create an account</h1>
      <form action="register/create_account" method="post" name="registration">
        {{ csrf_field() }}
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email2">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="submit">Register</button>
        </div>
      </form>
    </div> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->

</html>