<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'name'     => $_POST['name'],
        'email'    => $_POST['email'],
        'uname'    => $_POST['uname'],
		'pass'    => $_POST['pass'],
		'cpass'    => $_POST['cpass'],
        'birthday' => $_POST['dob'],
        'gender'    => $_POST['gender'],
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
<div style="text-align: center;">
    <h1>Form</h1>
    <form name="form1" method="post" action="">
        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Your full name" autofocus required>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="uname">User Name </label>
            <input type="text" name="uname" id="uname">
        </p>
        <p>
            <label for="pass"> Password: </label>
            <input type="Password" name="pass" id="pass">
        </p>
        <p>
            <label for="cpass"> Confirm Password:</label>
            <input type="Password" name="cpass" id="cpass"> 
        </p>
		<fieldset>
		
		<p>
		<legend>gender</legend>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<p>
		</fieldset>
		<fieldset>
		
		<p>
		<legend>Date Of Birth</legend>
		<label for="dob">Date of birth: </label>
         <input type="date" name="dob" id="dob">
		<p>
		</fieldset>
        <p style="text-align: center;">
            <input type="submit" name="submit" id="submit" value="Submit">
        </p>
    </form>
</div>
</body>
</html>