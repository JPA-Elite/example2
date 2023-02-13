<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif">
    <div class="container p-5">
        <h1>Change Password!</h1>
        <hr>
        <div class="container">
            <p>Hello there, <strong>{{$data['email']}}</strong> </p>
            <p>We receive a request to change your password in your G-Pay account!</p>
            <p>To change password, click the button below:</p>
            {{-- https://example2-self.vercel.app/ --}}
            <a href="https://example2-self.vercel.app/gpay.com/create-new-pass/{{$data['email']}}" style="cursor: pointer;"> <button class="btn btn-primary"
                    style="background: #0d6efd;color:#fff;border:none;padding:10px;cursor: pointer;">Change
                    Password</button></a>
        </div>
        <br>
        <div class="container text-center">
            <small class="text-primary" style="color:#0d6efd;font-weight: bold">Powered by G-Pay</small>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
