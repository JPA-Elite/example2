<!------ Include the above in your HEAD tag ---------->
<?php

use App\Models\User;
use App\Models\UserChat;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
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
				<li class="nav-item active">
					<a class="nav-link" href="/gpay.com/dashboard/">
						<i class="fa fa-home"></i>
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/gpay.com/messages/">
						<i class="fa fa-envelope-o">
							<span class="badge badge-danger"></span>
						</i>

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">
						<i class="fa fa-envelope-o">
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


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
		
		});
	</script>
</body>

</html>
