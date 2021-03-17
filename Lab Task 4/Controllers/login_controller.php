<?php


	$uname="Nowrin";
	$err_uname="";
	$pass="123";
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
	
?>