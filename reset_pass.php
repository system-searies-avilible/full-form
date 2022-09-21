<form method="post">
<h3>change your password</h3>
<table border="2">
<tr>
<th>Varification Code :</th>
<td><input type="text" name="txtcode"/></td>
</tr>

<tr>
<th>Password :</th>
<td><input type="password" name="txtpass"/></td>
</tr>

<tr>
<th>Conferm Password :</th>
<td><input type="password" name="c_pass"/></td>
</tr>

<tr>
<th>:</th>
<td><input type="submit" name="btn_conferm" value="Next"/></td>
</tr>
</table>
</form>

<?php
if(isset($_POST['btn_conferm'])){
	$code=$_POST['txtcode'];
	$pass=$_POST['txtpass'];
	$c_pass=$_POST['c_pass'];
session_start();	
$connect=mysqli_connect("localhost","root","","career_boosting");
	
$email=$_SESSION['email'];

$varify=mysqli_query($connect,"select * from v_code where code='$code'");
$num=mysqli_num_rows($varify);
//conferm password
if($pass== $c_pass){

//varification
if($num>0){
$select=mysqli_query($connect,"update student_data set password_pass='$pass' where email='$email' ");
if($select){
echo"<script> alert('Password change sucessfully');</script>";
//when password is change the code will delete automaticaly.
mysqli_query($connect,"delete from v_code where code='$code' ");
echo"<script>window.location.assign('login.php');</script>";
}	
else{
echo"<script>alert('email donot exist');</script>";
}	
}
else{
echo"<script>alert('Invalid varification code');</script>";	
}	
}	
else{
echo"<script>alert('Please write the same password');</script>";	
}	
}

?>