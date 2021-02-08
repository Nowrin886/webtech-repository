<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
//define variables and set to empty value
$name = $email = $gender = $birthday = $blood_group = $degree = "";
$name_err = $email_err = $birthday_err = $gender_err = $blood_group_err = $degree_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST['name'])){
		$name_err = "Name cannot be empty!";
	}
	else{
		 $name = ($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $name_err = "Only letters and white space allowed";
    }
	}
 if(empty($_POST['email'])){
		$email_err = "Email cannot be empty!";
	}
	else{
		$email = ($_POST['email']);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
	}
	}
 if(empty($_POST['birthday'])){
		$birthday_err = "Birthday cannot be empty!";
	}
	else{
		$birthday = $_POST['birthday'];
	}
  
   if (empty($_POST['gender'])) {
    $gender_err = "Gender is required";
  } else {
    $gender = $_POST['gender'];
  }
   if (empty($_POST['blood_group'])) {
    $blood_group_err = "Blood Group is required";
  } else {
    $blood_group = $_POST['blood_group'];
  }
  if (empty($_POST["degree"])) {
    $degree_err = "Degree is required";
  } else {
    $degree = ($_POST["degree"]);
  }
  
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <table>
 <th><td>
<fieldset>
<legend>NAME</legend>
<input type="text" id="name" name="name"> <?php echo $name_err; ?></td>
</fieldset>
</th>
</table>
<table>
<th>
<td>
<fieldset>
    <legend>EMAIL</legend>
	<input type="text" id="email" name="email"> <?php echo $email_err; ?></td>
	
</fieldset>
</th>
</table>
<table>
<th>
<td>
<fieldset>
	<legend>Date of Birth</legend>
	<input type="date" id="birthday" name="birthday"><?php echo $birthday_err; ?></td>

</fieldset>
</th>
</table>
<table>
<th>
<td>
<fieldset>
	<legend>Gender</legend>
			<select name="gender">
				<option value="" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="")) echo "selected" ?>> </option>
				<option value="male" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="male")) echo "selected" ?>> Male </option>
				<option value="female" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="female")) echo "selected" ?>> Female </option>
				<option value="others" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="others")) echo "selected" ?>> Others </option>
			</select>
			<?php echo $gender_err; ?>
</td>

</fieldset>
</th>
</table>
<table>
<th>
<td>
<fieldset>
	<legend>Degree</legend>
	<input type="checkbox" name = "degree"value="ssc" <?php if((isset($_POST['degree'])) && ($_POST['degree']=="ssc")) echo "checked" ?>> SSC<br>
	<input type="checkbox" value="hsc" <?php if((isset($_POST['degree'])) && ($_POST['degree']=="hsc")) echo "checked" ?>> HSC<br>
	<input type="checkbox" value="bsc" <?php if((isset($_POST['degree'])) && ($_POST['degree']=="bsc")) echo "checked" ?>> BSC<br>
	<input type="checkbox" value="msc" <?php if((isset($_POST['degree'])) && ($_POST['degree']=="msc")) echo "checked" ?>> MSC
	
</td>
</th>
<th>
<td>
<?php echo $degree_err; ?>
</fieldset>
</td>
</th>
</table>
<table>
<th>
<td>
<fieldset>
<legend>Blood Group</legend>
<select name="blood_group">
				<option value="" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="")) echo "selected" ?>>  </option>
				<option value="B+" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="B+")) echo "selected" ?>> B+ </option>
				<option value="A+" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="A+")) echo "selected" ?>> A+ </option>
				<option value="AB+" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="AB+")) echo "selected" ?>> AB+ </option>
				<option value="O+" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="O+")) echo "selected" ?>> O+ </option>
				<option value="A-" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="A-")) echo "selected" ?>> A- </option>
				<option value="AB-" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="AB-")) echo "selected" ?>> AB- </option>
				<option value="O-" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="O-")) echo "selected" ?>> O-</option>
				<option value="B-" <?php if((isset($_POST['blood_group'])) && ($_POST['blood_group']=="B-")) echo "selected" ?>> AB </option>
				</select>
			<?php echo $blood_group_err; ?>

</td>
</th>
</table>
</fieldset>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $birthday;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood_group;
echo "<br>";
?>

</body>
</html>