<?php
// define variables and set to empty values
$uname = $pass = "";
$errName = $errPass = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $errName = "Name is required";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z_]{2,}$/",$uname)) {
      $errName = "User Name can contain alpha numeric characters, period, dash or underscore only";
    }
  }
  if (empty($_POST["pass"])) {
    $errPass = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["pass"],$pass)) {
      $errName = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
</head>
<body> 
<h2></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <table>
 <th><td>
<fieldset>
<legend><b>Login</legend>
<table>
<tr>
<th>
<td>
<label>User Name :</label>
<input type="text" id="uname" name="uname"><br><br> </td> 
<td><?php echo $errName;?></td>
</th></tr>
<tr>
<th>
<td>
<label>Password :</label>
<input type="text" id="pass" name="pass"><br><br></td>
<td><?php echo $errPass;?></td>
</th> </tr>
<tr>
<th>
<td>
<input type="checkbox" value="lsRememberMe" id="rememberMe">
<label for="rememberMe">Remember me</label></td> </th>
</tr>
<tr>
<th>
<td>
<input type="submit" value="Login" onclick="lsRememberMe()"></td>
<td> <a href="#">forget password?</a></span></td> </th>
</tr>
</table>
</fieldset>
</td>
</th>
</table> 
</body>
</html>