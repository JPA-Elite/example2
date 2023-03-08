<!------ Include the above in your HEAD tag ---------->
<?php

use App\Models\User;
use App\Models\UserChat;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat</title>
	<link rel="icon" type="image/x-icon" href="https://github.com/JPA-EliteDeveloper/images/blob/main/logo.png?raw=true">
	<script defer src="/_vercel/insights/script.js"></script>
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
				<li class="nav-item">
					<a class="nav-link" href="/gpay.com/dashboard/">
						<i class="fa fa-home"></i>
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/gpay.com/messages/">
						<i class="fa fa-envelope-o">
							<span class="badge badge-danger">{{count($chats)}}</span>
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
						<!-- <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i> -->
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
	<br><br>

	<div class="">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search" id="search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<div class="contacts">
							<?php



							$total = 1;


							?>
							@if($message_id != 0)
							@foreach ($chats as $chat)
							@if ($message_id == $chat )
							<a href="/gpay.com/messages/{{$chat}}" class="chat_list">
								<li class="active chat_box" style="cursor:pointer">
									<div class="d-flex bd-highlight">
										<div class="img_cont">

											<img src="data:image/jpeg;base64,{{base64_encode(User::where('id',$chat)->first()->image)}}" class="rounded-circle user_img">
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>
												{{User::where('id',$chat)->first()->name;}}
											</span>

											<p>{{User::where('id',$chat)->first()->created_at }}</p>




										</div>
									</div>
								</li>
							</a>


							@endif
							@if($message_id != $chat)
							<a href="/gpay.com/messages/{{$chat}}" class="chat_list">
								<li style="cursor:pointer" class="chat_box">
									<div class="d-flex bd-highlight">
										<div class="img_cont">


											<img src="data:image/jpeg;base64,{{base64_encode(User::where('id',$chat)->first()->image)}}" class="rounded-circle user_img">
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>
												{{User::where('id',$chat)->first()->name;}}
											</span>

											<p>{{User::where('id',$chat)->first()->created_at }}</p>




										</div>
									</div>
								</li>
							</a>
							@endif
							<?php
							$total++
							?>
							@endforeach
							@endif
						</div>
					</div>
					<div class="card-footer text-center">
						<!-- <button class="btn btn-primary">Search New</button> -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Find New Chat
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content bg-dark">
									<div class="modal-header">
										<div class="card-header">
											<div class="input-group">
												<input type="text" placeholder="Search..." name="" class="form-control search" id="search2">
												<div class="input-group-prepend">
													<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
												</div>
											</div>
										</div>
										<!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
										<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
									</div>

									<div class="modal-body bg-secondary">
										
										<?php $users = User::all(); ?>
										@foreach ($users as $user)
										@if($user->id != $user_id)
										<a href="/gpay.com/messages/{{$user->id}}" class="chat_list2">
											<li class="chat_box" style="cursor:pointer">
												<div class="d-flex bd-highlight">
													<div class="img_cont">

														<img src="data:image/jpeg;base64,<?php echo base64_encode($user->image); ?>" class="rounded-circle user_img">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>
															{{$user->name;}}
														</span>

														<p>{{$user->created_at }}</p>




													</div>
												</div>
											</li>
										</a>
										@endif




										<?php
										$total++
										?>
										@endforeach
									
									</div>
									<div class="modal-footer">
										<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
										<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 chat">
				<form class="card" data-action="/gpay.com/messages/send/request" method="POST" enctype="multipart/form-data" id="form">
					@csrf
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							@if($message_id != 0)
							<div class="img_cont">

								<img src="data:image/jpeg;base64,<?php echo base64_encode(User::where('id', $message_id)->first()->image); ?>" class="rounded-circle user_img">
								<span class="online_icon"></span>
							</div>

							<div class="user_info">

								<span>Chat with {{User::where('id',$message_id)->first()->name;}}</span>
								<p>Online</p>

							</div>
							<div class="video_cam">
								<span><i class="fas fa-video"></i></span>
								<span><i class="fas fa-phone"></i></span>
							</div>
							@endif
						</div>
						@if($message_id != 0)
						<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
						<div class="action_menu">
							<ul>
								<li><i class="fas fa-user-circle"></i> View profile</li>
								<li><i class="fas fa-users"></i> Add to close friends</li>
								<li><i class="fas fa-plus"></i> Add to group</li>
								<li><i class="fas fa-ban"></i> Block</li>
							</ul>
						</div>
						@endif
					</div>

					<?php
					$user_chats = UserChat::all();
					?>
					<div class="card-body msg_card_body">
						@if($message_id != 0)
						@foreach($user_chats as $chat)
						@if($chat->first_user == $user_id && $chat->second_user == $message_id)
						<div class="d-flex justify-content-start mb-4 ">
							<div class="img_cont_msg">

								
							</div>
							<div class="msg_cotainer">
								{{$chat->message}}
								<span class="msg_time">{{$chat->created_at}}</span>
							</div>
						</div>
						@endif
						@if($chat->first_user == $message_id && $chat->second_user == $user_id)
						<div class="d-flex justify-content-end mb-4 ">
							<div class="msg_cotainer_send">
								{{$chat->message}}
								<span class="msg_time_send">{{$chat->created_at}}</span>
							</div>
							<div class="img_cont_msg">

							
							</div>
						</div>
						@endif
						@endforeach
						@endif
					</div>
					<div class="card-footer">
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
							</div>
							<input type="text" style="display: none;" name="first_user" value="{{$user_id}}">
							<input type="text" style="display: none;" name="second_user" value="{{$message_id}}">
							@if($message_id != 0)
							<textarea name="message" class="form-control type_msg" placeholder="Type your message..." required></textarea>

							<div class="input-group-append send-message">
								<button class="input-group-text send_btn" type="submit"><i class="fas fa-location-arrow"></i></button>
							</div>
							@endif
							@if($message_id == 0)
							<textarea name="message" class="form-control type_msg" placeholder="Type your message..." disabled></textarea>

							<div class="input-group-append send-message">
								<button class="input-group-text send_btn" type="submit" disabled><i class="fas fa-location-arrow"></i></button>
							</div>
							@endif
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- <script>
		let chat_box = document.getElementsByClassName('.chat_box');

		chat_box.forEach(function(chat) {
			chat.addEventListener('click', () => {
				alert('dcedc');
			});
		});
	</script> -->
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
			var form = '#form';
			$(form).on('submit', function(event) {
				event.preventDefault();
				var data = `<div class="d-flex justify-content-start mb-4 ">
					<div class="img_cont_msg">
				
						<img src="data:image/jpeg;base64,<?php echo base64_encode(User::where('id', $user_id)->first()->image); ?>" class="rounded-circle user_img_msg">
					</div>
					<div class="msg_cotainer">` +
					$('.type_msg').val() +
					`
					    <span class="msg_time">now</span>
					</div>
				</div>`;

				$(".msg_card_body").append(data);

				$.ajax({
					url: '/gpay.com/messages/send/request',
					method: 'POST',
					data: new FormData(this),
					dataType: 'JSON',
					contentType: false,
					cache: false,
					processData: false,
					success: function(response) {
						//
					},
					error: function(response) {
						//
					}
				});
				$('.type_msg').val('');
			});
		});
	</script>
</body>

</html>