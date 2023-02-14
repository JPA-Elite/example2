<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Confirmation - Email Address | G-Pay</title>
    <link rel="icon" type="image/x-icon"
        src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            padding: 5rem;
        }

        .header {
            border-bottom: 2px solid black;
            width: 50%;
            margin: auto;
            text-align: center;
        }

        .header h1 {
            left: -20px;
            color: #6D60F7;
            position: relative;
            font-size: 60px;
        }

        .verify-add {
            text-align: center;
            margin-top: 3rem;
            line-height: 30px;
        }

        .verify-add h3,
        .verify-add p {
            font-weight: bold;
            z-index: 1;
        }

        .verify-add h3 {
            font-size: 20px;
        }

        .verify-add p {
            color: rgba(0, 0, 0, 0.48);
        }

        .verify-add img {
            position: relative;
            top: -30px;
            z-index: -1;
        }

        .button {
            width: 200px;
            height: 45px;
            background: #6D60F7;
            border-radius: 10px;
            text-align: center;
            line-height: 45px;
            margin: auto;
            cursor: pointer;
            position: relative;
            top: 5rem;

        }

        .button p {
            font-weight: bold;
            color: white;
        }

        .footer {
            padding-top: 10px;
            background: rgba(109, 96, 247, 0.15);
            text-align: center;
            margin-top: 3rem;
        }

        .footer>div {

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer p {
            color: rgba(0, 0, 0, 0.48);
            font-weight: bold;
        }

        .footer h6 {
            position: relative;
            left: -10px;
        }

        .copyright {
            color: rgba(0, 0, 0, 0.48);
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="header">
        <h1>G-Pay</h1>

    </div>
    <div class="verify-add">
        <img width="90" height="50"
            src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true" alt="">
        <h3>Hello <b>{{$data['email']}}</b>,</h3>
        <br>
        <h3>Verify Your Account to Start Using <br>G-Pay</h3>
        <img style="position: relative;" src="https://easy-software.com/wp-content/uploads/2018/07/genehmigung.gif"
            alt="verification">
        <p>Thank you for signing up. Click the button below to access your<br> G-Pay account:</p>
    </div>

     {{-- https://example2-self.vercel.app/ --}}

    <a href="https://example2-self.vercel.app/gpay.com/account-verification/" style="text-decoration: none;">
        <div class="button">
            <p>Verify my Email</p>
        </div>
    </a>


    <div class="footer">
        <p>Powered by G-Pay</p>
    </div>
    <p class="copyright">©2022 G-Pay</p>

</body>

</html>
