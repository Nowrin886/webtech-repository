<?php
// define variables and set to empty values
$cpass = $npass = $rpass = "";
$err = $errName = $errName1 = $errName2 = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (test_input($_POST["rpass"]))
        {   
            $npass = $_POST["npass"];
            $rpass = $_POST["rpass"];
            if ($npass != $rpass) {
            $err = "Your passwords does not match!<br />";
            }
		
	if (empty($_POST["cpass"])) {
    $errName = "Current password is required";
  } else {
    $cpass = test_input($_POST["cpass"]);	
	if (empty($_POST["npass"])) {
    $errName1 = "New password is required";
  } else {
    $npass = test_input($_POST["cpass"]);
	if (empty($_POST["rpass"])) {
    $errName2 = "Retype Password is required";
  } else {
    $rpass = test_input($_POST["rpass"]);
	
  }
}
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
<legend><b>Change Password</legend>
<table>
<tr>
<th>
<td>
<label>Current Password</label>
<input type="text" id="cpass" name="cpass"><br><br> </td> 
<td><?php echo $errName;?></td>

</th></tr>
<tr>
<th>
<td>
<label>New Password :</label>
<input type="text" id="npass" name="npass"><br><br></td>
<td><?php echo $errName1;?></td>
<td><?php echo $err;?></td>
</th> </tr>
<tr>
<th>
<td>
<label>Retype Password :</label>
<input type="text" id="rpass" name="rpass"><br><br></td>
<td><?php echo $errName2;?></td>
</th> </tr>

<tr>
<th>
<td>
<input type="submit" value="Submit"></td>

</tr>
</table>
</fieldset>
</td>
</th>
</table> 
</body>
</html>