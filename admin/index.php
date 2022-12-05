<?php
ob_start();
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id']))
	header('location:home.php');
?>
<!DOCTYPE html>
<html lang="eng">

<head>
	<title>HR Application webbase application</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<style type="text/css">
		#sidelogin {
			width: 25%;
			float: right;
			position: relative;
			top: 120px;
			right: 20px;
			padding: 10px;
			border-radius: 5px;
			height: 350px;
			background-color: rgba(255, 255, 255, 0.6);
			border: 1px solid #e7e7e7;
		}
	</style>
</head>

<body>
	<div class="navbar navbar-default" style="background-color:blue;">
		<img src="" style="float:left;" height="55px" /><span class="navbar-brand">HR Application webbase application </span>
	</div>
	<div class="container">
	<div class="row">
		<h3>Admin panel</h3>
		
		<div class="col-md-4">
			<div id="top" class="">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center>
							<h1 class="panel-title">Administrator</h1>
						</center>
					</div>
					<div class="panel-body">
						<form enctype="multipart/form-data" action="login_query.php" role="form" method="POST">
							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control" name="admin_user" placeholder="Username" type="text" required="required">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" name="admin_pass" placeholder="Password" type="password" required="required">
							</div>
							<div class="form-group">
								<button class="btn btn-block btn-success" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="footer">
		<label class="footer-title">&copy; HR Application webbase application</label>
	</div>
</body>
<?php
include("script.php");
?>
<script type="text/javascript">
	$(document).ready(function() {
		function disableBack() {
			window.history.forward()
		}

		window.onload = disableBack();
		window.onpageshow = function(evt) {
			if (evt.persisted) disableBack()
		}
	});
</script>

</html>