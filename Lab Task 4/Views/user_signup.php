
<?php
require_once '../Controllers/user_signup_controller.php';
include '../Controllers/user_signup_controller.php';
/*
	$uname="";$err_uname="";
	$pass="";$err_pass="";
	$fname="";$err_fname="";
  $lname="";$err_lname="";
  $mail="";$err_mail="";
  $add="";$err_add="";
  $phone="";$err_phone="";
  $occupation="";
	$has_error=false;
	$msg="";
  $user_type="gen_user";
  $status="active";

	if(isset($_POST['submit']))
	{
		$file = "data.json";
    $arr = array(
        'uname'     => $_POST['uname'],
		'fname'     => $_POST['fname'],
		'lname'     => $_POST['lname'],
        'mail'    => $_POST['mail'],
		'add'     => $_POST['add'],
        'phone'    => $_POST['phone'],
		'pass'    => $_POST['pass'],
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
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
      elseif (8>strlen($_POST['pass'])){$err_pass="*Password must contain at least 8 characters";
        $has_error=true;
      }
    		else
    		{
    			$pass=htmlspecialchars($_POST['pass']);
    		}
    if(empty($_POST['add']))
		{
			$err_add="*Address Required";
			$has_error=true;
		}
  		else
  		{
  			$add=$_POST['add'];
  		}
    if(empty($_POST['occupation']))
		{

		}
  		else
  		{
  			$occupation=$_POST['occupation'];
  		}
    if(empty($_POST['fname'])){
      $err_fname="*First Name Required";
      $has_error=true;
    }
      else
	    {
	      $fname=$_POST['fname'];
	    }
    if(empty($_POST['phone'])){
      $err_phone="*Phone Number Required";
      $has_error=true;
    }
      else
	    {
	      $phone=$_POST['phone'];
	    }
    if(empty($_POST['lname'])){
      $err_lname="*Last Name Required";
      $has_error=true;
    }
      else
	    {
	      $lname=$_POST['lname'];
	    }
    if(empty($_POST['mail'])){
       $err_mail="*Mail Required";
       $has_error=true;
    }
	    elseif(!strpos($_POST['mail'], "@")||!strpos($_POST['mail'], ".com")) {
	    	$err_mail="*Enter proper mail address";
	    	$has_error=true;	
	    }
  	   
	}


*/
?>

<html>
	<head><title>X Company</title>
		<style type="text/css">
    body
    {
      margin: 0;
      padding: 0;
    }
    nav
    {
      height: 70px;
      width: 100%;
      background: #000;
    }
      ul{
    margin:0;

    padding:0;
    justify-content: center;
    }
    ul li {
      list-style:none;
      display:inline-block;
      float:center;
      line-height:30px;
    }
    ul li a {
      display:block;
      text-decoration:none;
      font-size:18px;
      color: #2196f3;
      font-family:consolas;
      padding: 10px;
      transition: 0.5s;
      font-weight: bolder;
    }
    ul li a:hover
    {
      color: #255784;
      background:  #d6eaf8;
      border-radius: 20px;
    }
			.msg
			{
				font-weight: bold;
				text-align: center;
				color: green;
			}
			span
			{
				color: red;
				font-weight: bold;
			}
    .title
      {
        text-align: center;
        color: #2c3e50;
        font-family: consolas;
        font-size: 34px;
        font-weight: bolder;

      }
      input,select{
        outline: 0;
  			border-width: 0 0 2px;
  			border-bottom:2px solid  #2c3e50;
        width: 500px;
        height: 20px;
        font-size: 15px;
        font-family: consolas;
      }
      .txt
      {
        text-align: center;
        align-items: center;
        font-family: consolas;
        color:#566573;

      }
      td
      {
        padding: 8px;
      }
      .submit
      {
        width: 300px;
        height: 25px;
        font-size: 15px;
        font-weight: bold;
        transition: .5s;
      }
      .submit:hover
      {
        background: #2c3e50;
        border-radius: 15px;
        color: white;


      }
      table
      {
        padding: 20px;
      }

      .title1:hover
      {
        background: black;
      }
      .nav1
      {
       text-align: right;
      }
		</style>
	</head>
	<body align="center">
    <nav>
      <div class="nav1"><ul>
        <li><a class="title1" style="font-size:34px; padding-right:900px;text-align:left;" href="index.html"><span style="color:#d5d8dc;">X company</span></a></li>
        <li><a href="log_in.php"><span style="color: #5dade2;">Log In</span></a></li>
       <div>  </ul>
    </nav>
		<div class="title">Sign Up</div>
    <div class="txt">Fill the form below to become an user</div><hr>
		<form action="" method="post">
			<table align="center">
        <tr>
					<td>First Name: </td>
					<td><input type="text" value="<?php echo $fname;?>" name="fname">
						<br><span><?php echo $err_fname;?></span></td>
				</tr>
        <tr>
					<td>Last Name: </td>
					<td><input type="text" value="<?php echo $lname;?>" name="lname">
						<br><span><?php echo $err_lname;?></span></td>
				</tr>
        <tr>
					<td>Username: </td>
					<td><input type="text" value="<?php echo $uname;?>" name="uname">
						<br><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" value="<?php echo $pass;?>" name="pass">
					<br><span><?php echo $err_pass;?></span></td>
				</tr>
        <tr>
					<td>E-mail: </td>
					<td><input type="text" value="<?php echo $mail;?>" name="mail">
						<br><span><?php echo $err_mail;?></span></td>
				</tr>
        <tr>
					<td>Address: </td>
					<td><input type="text" value="<?php echo $add;?>" name="add">
						<br><span><?php echo $err_add;?></span></td>
				</tr>

        <tr>
          <td>Phone: </td>
          <td><input type="text" value="<?php echo $phone;?>" name="phone">
            <br><span><?php echo $err_phone;?></span></td>
        </tr>
        <tr>
          <td></td>
          

        </tr>
				<tr><td colspan="2" align="center"><input type="submit" class="submit" value="Submit" name="submit"></td></tr>
			</table>
			<div class="msg"><?php echo $msg; ?></div>
		</form>


	</body>
</html>
