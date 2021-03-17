<?php
require_once '../Controllers/login_controller.php';
include '../Controllers/login_controller.php';
/*
session_start();
	$uname="admin";
	$err_uname="";
	$pass="admin";
	$err_pass="";
	$err_invalid="";
  	$id="";
	$has_error=false;
	$msg="";
	if (isset($_POST['uname'])) {
	if ($_POST['uname']==$uname && $_POST['pass']==$pass) {
		$_SESSION['uname'] = $uname;
		header("location:admin_home_view.php");
	}
	else{
		$msg="username or password invalid";

	}

}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
	}
	*/
?>

<html>
	<head><title>Gaming Buddy : Login</title>
			<style media="screen">
			body
				{
					background: #34495e ;
				}
				h1{
					text-align: center;
					color:  #34495e;
				}
				.msg
				{
					color: red;
					font-family: consolas;
					font-weight: bold;
					text-align: center;
				}
				.loginContainer
				{
					width: 320px;
					height: 310px;
					background:  #fdfefe;
					top: 27%;
					left: 40%;
					border: 1px solid #bdc3c7;
					border-radius: 5px;
					position: absolute;
					text-align: center;
					box-shadow: 5px 5px 10px;
				}
				input
				{

					width: 280px;
					padding: 8px;
					border: 1px solid  #34495e;
					border-radius: 5px;
					transition: .4s;
				}
				input:focus
				{
					border: 3px solid #2471A3;

				}
				.createAccount
				{
					text-align: center;
					padding-top: 8px;
					color: black;
				}
				span
				{
					color: red;
				}
				h1
				{
					padding-bottom: 30px;
				}
				.submit_btn
				{
					color: white;
					background:  #34495e;
					border-radius: 5px;
					transition: .4s;
				}
				.submit_btn:hover
				{
					color: white;
					background:#17202a;
					border-radius: 15px;
					transition: .4s;
				}
				.title
				{
					padding-top: 10px;
					color: #34495e;
					font-size: 34px;
					font-weight: bold;
					font-family: consolas;
					text-align: center;
				}
				.subtitle
				{
					color: #34495e;
					font-size: 14px;
					font-family: consolas;
					text-align: center;
				}
				hr
				{
					color: #34495e;
				}
				.email
				{
					padding-top: 20px;
				}
			</style>

	</head>
	<body align="center">

		<span><?php echo $err_invalid;?></span>
		<div class="loginContainer">
			<div class="title">X company</div>
			<div class="subtitle">Log in with your id and password</div><hr>
			<form method="post" action="">
				<table align="center">
					<tr>
						<div class="email">
							<td colspan="2"><input type="text" placeholder="email" value="<?php echo $uname;?>" name="uname">
								<br><span><?php echo $err_uname;?></span></td>
						</div>

					</tr>
					<tr>

						<td colspan="2"><input type="password" placeholder="password" value="<?php echo $pass;?>" name="pass">
						<br><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr><td colspan="2" align="center"><input type="submit" class="submit_btn" value="Submit" name="submit"></td></tr>

				</table>
				<div class="createAccount">
					<a href="user_signup.php">Create New account</a>
				</div>
			<div class="msg">
				<?php echo $msg; ?>
			</div>
		</div>
		</form>
	</body>
</html>
