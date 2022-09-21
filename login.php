<center>
<h1>LOGIN FORM</h1>

<form method="post" action="">
<table border="2">
<tr>
<th>Email</th>
<td><input type="email" name="txtemail"/></td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="txtpass"/></td>
</tr>

<tr>
<th>:</th>
<td><input type="submit" name="btn_log" value="LOGIN"/></td>
</tr>

<tr>
<th>:</th>
<td><input type="Submit" name="btn_forget" value="Forget password"/></td>
</tr>
</table>
</form>
</center>
<?php
if(isset($_POST['btn_log'])){
	session_start();

$email=$_POST['txtemail'];	
$pass=$_POST['txtpass'];	
	
	
$connect=mysqli_connect("localhost","root","","career_boosting");

$select=mysqli_query($connect,"select * from student_data where email='$email' and password_pass='$pass' ");
$num=mysqli_num_rows($select);
$row=mysqli_fetch_array($select);
if($num>0){

$_SESSION['email']=$email;

echo"<script> alert('Login sucessfully');</script>";
echo"<script>window.location.assign('home.php')</script>";
}
else{
echo"<script>alert('email not exist');</script>";	
}

}


if(isset($_POST['btn_forget'])){
echo"<script>window.location.assign('forget-pass.php')</script>";	
	
}

?>