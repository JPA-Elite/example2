<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
    <script defer src="/_vercel/insights/script.js"></script>
    <link rel="icon" type="image/x-icon" href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            overflow-x: hidden;
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 500px;
            border-radius: 15px !important;
            background-color: rgba(0, 0, 0, 0.4) !important;
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
        }

        .search:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .type_msg {
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            height: 60px !important;
            overflow-y: auto;
        }

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .contacts {
            list-style: none;
            padding: 0;
        }

        .contacts li {
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }

        .active {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .user_img {
            height: 70px;
            width: 70px;
            border: 1.5px solid #f5f6fa;

        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;

        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info span {
            font-size: 20px;
            color: white;
        }

        .user_info p {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
        }

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

        .video_cam span {
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        #action_menu_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }

        .action_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .action_menu ul li {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }

        .action_menu ul li i {
            padding-right: 10px;

        }

        .action_menu ul li:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }

        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }

        #profile_pop {
            display: none;
        }

        a:hover {
            text-decoration: none;
            color: none;
        }

        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }

        @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

        .navbar-icon-top .navbar-nav .nav-link>.fa {
            position: relative;
            width: 36px;
            font-size: 24px;
        }

        .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
            font-size: 0.75rem;
            position: absolute;
            right: 0;
            font-family: sans-serif;
        }

        .navbar-icon-top .navbar-nav .nav-link>.fa {
            top: 3px;
            line-height: 12px;
        }

        .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
            top: -10px;
        }

        @media (min-width: 576px) {
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa>.badge {
                top: -7px;
            }
        }

        @media (min-width: 768px) {
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa>.badge {
                top: -7px;
            }
        }

        @media (min-width: 992px) {
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa>.badge {
                top: -7px;
            }
        }

        @media (min-width: 1200px) {
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa>.badge {
                top: -7px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img style="width: 50px;" src="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/gpay.com/dashboard/">
                        <i class="fa fa-home"></i>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gpay.com/messages/">
                        <i class="fa fa-envelope">
                            <span class="badge badge-danger"></span>
                        </i>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <i class="fa fa-envelope">
                            <span class="badge badge-warning">11</span>
                        </i>

                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <ul class="navbar-nav ">
                <li class="">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-info">11</span>
                        </i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link" href="#">
                        <!-- <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i> -->

                    </a>
                </li>
            </ul>


        </div>
        <div id="profile">
            <a class="" href="#" id="profile">
                <!-- <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i> -->

                <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="" style="width: 40px;height:40px;border-radius: 50%;">
            </a>
            <div id="profile_pop" style="position: absolute;right:0px;top:75px;z-index: 1;background-color: white;">
                <a class="dropdown-item" href="/gpay.com/profile/">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/">Logout</a>
            </div>

        </div>

    </nav>
    <div class="container emp-profile">
        <form id="upload-form" method="post" enctype="multipart/form-data" action="/gpay.com/upload/post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img id="image-preview" style="height: 200px;" src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input id="file-input" style="cursor:pointer" type="file" name="image" accept="image/*" />

                        </div>

                    </div>


                </div>
                <div class="col-md-6">
                    <!-- <div class="profile-head"> -->
                    <h4>
                        {{$user->name}}
                    </h4>
                    <!-- <h6>
                            Web Developer and Designer
                        </h6> -->
                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item nav1" style="cursor:pointer">
                            <a class="nav-link active" id="home-tab" href="#profile-info">Profile Information</a>
                        </li>
                        <li class="nav-item nav2" style="cursor:pointer">
                            <a class="nav-link" id="home-tab" href="#business-info">Business Information</a>
                        </li>

                    </ul>
                    <!-- </div> -->
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br />
                        <a href="">Bootsnipp Profile</a><br />
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br />
                        <a href="">Web Developer</a><br />
                        <a href="">WordPress</a><br />
                        <a href="">WooCommerce</a><br />
                        <a href="">PHP, .Net</a><br />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="" id="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p>User-{{$user_id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user -> name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p style="font-size: 15px;">{{$user -> email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user -> phone}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Location</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user -> location}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="fade" id="business-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->company_name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Does</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->company_do}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Business Description</label>

                                    <p>{{$u_buss->describe_business}}</p>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Currency</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->currency}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Revenue Estimation</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->estimate_revenue}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Current Billing Tools</label>

                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->current_bill}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Customization</label>

                                </div>
                                <div class="col-md-6">
                                    <p>{{$u_buss->customized}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  d-flex justify-content-center">
                <button id="upload-btn" class="btn btn-primary" type="submit" disabled>Save Changes</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".contacts_body .contacts .chat_list").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#search2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".chat_list2").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $('#action_menu_btn').click(function() {
                $('.action_menu').toggle();

            });
            $('#profile').click(function() {
                $('#profile_pop').toggle();
            });

            $('.nav1').click(function() {
                $('#profile-tab').show();
                $('#business-tab').addClass('fade');
            });
            $('.nav2').click(function() {
                $('#profile-tab').hide();
                $('#business-tab').removeClass('fade');

            });


            $("#file-input").change(function() {
                // get the selected file
                var file = this.files[0];
                if (file) {
                    // create a new FileReader object
                    var reader = new FileReader();
                    // set the onload event handler
                    reader.onload = function(e) {
                        // set the source of the image element to the data URL
                        $("#image-preview").attr("src", e.target.result);
                    }
                    // read the selected file as a data URL
                    reader.readAsDataURL(file);
                    $("#upload-btn").prop("disabled", false);
                    // var formData = new FormData();
                    // var formData = $("#upload-form").serialize();
                    // add the file to the FormData object
                    //  formData.append("image", file);

                    // $.ajax({
                    //     url: '/gpay.com/upload/post',
                    //     method: 'POST',
                    //     data: formData,
                    //     contentType: false,
                    //     cache: false,
                    //     processData: false,
                    //     success: function(response) {
                    //         alert('yes');
                    //     },
                    //     error: function(response) {
                    //         alert(response)
                    //     }
                    // });
                }else {
                    $("#upload-btn").prop("disabled", false);
                }
            });

        });
    </script>
</body>

</html>