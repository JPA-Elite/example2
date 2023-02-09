<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form | G-Pay</title>
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
      <form class="form-control login-form p-5" action="/gpay.com/dash" method="post" name="registration" id="form">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="email" class="form-label fw-bold">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Input email" value="{{$errors->first('email')}}" required>
        </div>
        <div class="mb-3">

          <div class="d-flex justify-content-between align-items-end p-1">
            <label for="password" class="form-label fw-bold">Password</label>
            <a for="forgot-pass" class="fs-7" href="/gpay.com/forgot-password/">Forgot password<svg class="ms-1 mb-1" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.37305 0 0 5.37498 0 12C0 18.6289 5.37305 24 12 24C18.627 24 24 18.6289 24 12C24 5.37498 18.627 0 12 0ZM12 21.6774C6.65168 21.6774 2.32258 17.3501 2.32258 12C2.32258 6.65347 6.65187 2.32258 12 2.32258C17.3463 2.32258 21.6774 6.65182 21.6774 12C21.6774 17.3482 17.3501 21.6774 12 21.6774ZM17.1892 9.32903C17.1892 12.5735 13.685 12.6234 13.685 13.8224V14.129C13.685 14.4497 13.425 14.7097 13.1043 14.7097H10.8956C10.575 14.7097 10.315 14.4497 10.315 14.129V13.71C10.315 11.9805 11.6263 11.289 12.6172 10.7335C13.4669 10.2571 13.9877 9.9331 13.9877 9.30223C13.9877 8.46774 12.9232 7.91385 12.0627 7.91385C10.9406 7.91385 10.4226 8.445 9.6945 9.36397C9.49819 9.61171 9.13998 9.65773 8.88808 9.46674L7.54176 8.44587C7.29465 8.25852 7.23929 7.91042 7.41382 7.65411C8.55706 5.97537 10.0132 5.03226 12.2804 5.03226C14.6548 5.03226 17.1892 6.88568 17.1892 9.32903ZM14.0323 17.4194C14.0323 18.54 13.1206 19.4516 12 19.4516C10.8794 19.4516 9.96774 18.54 9.96774 17.4194C9.96774 16.2988 10.8794 15.3871 12 15.3871C13.1206 15.3871 14.0323 16.2988 14.0323 17.4194Z" fill="black" />
              </svg>
            </a>
          </div>
          <div class="d-flex form-control p-0 pe-1 justify-content-between">
            <input type="password" name="password" id="pass" class="w-90 form-control" placeholder="Input password" required>
            <svg width="24" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_5_23)">
                <path d="M33.4286 19.8C31.3929 15.375 28.8415 12.0656 25.7746 9.87187C26.5915 11.8219 27 13.9312 27 16.2C27 19.6687 26.1194 22.6359 24.3583 25.1016C22.5971 27.5672 20.4777 28.8 18 28.8C15.5223 28.8 13.4029 27.5672 11.6417 25.1016C9.88058 22.6359 9 19.6687 9 16.2C9 13.9312 9.40848 11.8219 10.2254 9.87187C7.15848 12.0656 4.60714 15.375 2.57143 19.8C4.35268 23.6437 6.58594 26.7047 9.2712 28.9828C11.9565 31.2609 14.8661 32.4 18 32.4C21.1339 32.4 24.0435 31.2609 26.7288 28.9828C29.4141 26.7047 31.6473 23.6437 33.4286 19.8ZM18.9643 9C18.9643 8.625 18.8705 8.30625 18.683 8.04375C18.4955 7.78125 18.2679 7.65 18 7.65C16.3259 7.65 14.8895 8.48906 13.6908 10.1672C12.4922 11.8453 11.8929 13.8562 11.8929 16.2C11.8929 16.575 11.9866 16.8937 12.1741 17.1562C12.3616 17.4187 12.5893 17.55 12.8571 17.55C13.125 17.55 13.3527 17.4187 13.5402 17.1562C13.7277 16.8937 13.8214 16.575 13.8214 16.2C13.8214 14.5875 14.2299 13.2094 15.0469 12.0656C15.8638 10.9219 16.8482 10.35 18 10.35C18.2679 10.35 18.4955 10.2187 18.683 9.95625C18.8705 9.69375 18.9643 9.375 18.9643 9ZM36 19.8C36 20.4375 35.8661 21.0844 35.5982 21.7406C33.7232 26.0531 31.202 29.5078 28.0346 32.1047C24.8672 34.7016 21.5223 36 18 36C14.4777 36 11.1328 34.6969 7.9654 32.0906C4.79799 29.4844 2.27679 26.0344 0.401786 21.7406C0.133929 21.0844 0 20.4375 0 19.8C0 19.1625 0.133929 18.5156 0.401786 17.8594C2.27679 13.5656 4.79799 10.1156 7.9654 7.50937C11.1328 4.90312 14.4777 3.6 18 3.6C21.5223 3.6 24.8672 4.90312 28.0346 7.50937C31.202 10.1156 33.7232 13.5656 35.5982 17.8594C35.8661 18.5156 36 19.1625 36 19.8Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_5_23">
                  <rect width="36" height="36" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>


        </div>

        <div class="d-flex justify-content-center gap-5 button-group">
          <button type="submit" class="btn bg-purple" id="signin">Log in</button>
          <a href="/Gpay.com/sign_up-profile_information/"> <button type="button" class="btn bg-purple" id="signup">Sign up</button></a>

        </div>



      </form>
      @if($errors->any())

      <div class="alert alert-warning mt-2 text-center text-dark alert-box">
        <strong>{{$errors->first('login')}}</strong>
      </div>

      @endif

    </div>

  </div>

  <script>
    var form = document.getElementById('form');

    form.addEventListener('click', () => {
      document.getElementsByClassName('alert-box')[0].style.display = 'none';
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