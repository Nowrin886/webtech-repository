<?php

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



?>
