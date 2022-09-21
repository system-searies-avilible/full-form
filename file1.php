<!DOCTYPE html>
<html>
<head>
<title>Signup form</title>
</head>
<body>
<center>
<h1> Signup Form</h1>
<form method="post" >
<table border="2" width="500px">
<tr>
<th>Name</th>
<td><input type="text" name="txtname" placeholder="Enter the username" required /></td>
</tr>

<tr>
<th>Father Name</th>
<td><input type="text" name="txtfname" placeholder="Enter the user's father name" required /></td>
</tr>

<tr>
<th>Class</th>
<td><input type="text" name="txtclass" placeholder="Enter the class name" required /></td>
</tr>

<tr>
<th>Age</th>
<td><input type="text" name="txtage" placeholder="Enter your age" required /></td>
</tr>

<tr>
<th>Cnic Number</th>
<td><input type="text" name="txtcnic" placeholder="Enter the cnic number" required /></td>
</tr>

<tr>
<th>Relishion</th>
<td><input type="text" name="txtrel" placeholder="Enter the relishion" required /></td>
</tr>

<tr>
<th>Gender</th>
<td><input type="text" name="txtgen" placeholder="Enter the gender" required /></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><input type="number" name="txtnum" placeholder="Enter the phone number" required /></td>
</tr>

<tr>
<th>Email</th>
<td><input type="email" name="txtemail" placeholder="Enter the email" required /></td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="txtpass" placeholder="Enter the Password" required /></td>
</tr>

<tr>
<th>Confurm Password</th>
<td><input type="password" name="txtpass2" placeholder="Enter the password again" required /></td>
</tr>

<tr>
<th>Address</th>
<td><input type="text" name="txtaddr" placeholder="Enter the address" required /></td>
</tr>

<tr>
<th>:</th>
<td><input type="submit" name="btn_sub" value="Signup"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong><a href="login.php" style="text-decoration:none; color:black; " > LOGIN </a></strong></td>
</tr>

</table>

</form>
</center>
</body>
</html>
<?php
if(isset($_POST['btn_sub'])){
$name=$_POST['txtname'];	
$fname=$_POST['txtfname'];	
$course=$_POST['txtclass'];	
$age=$_POST['txtage'];	
$cnic=$_POST['txtcnic'];
$reli=$_POST['txtrel'];	
$gender=$_POST['txtgen'];	
$numb=$_POST['txtnum'];	
$email=$_POST['txtemail'];	
$pass=$_POST['txtpass'];	
$c_pass=$_POST['txtpass2'];	
$address=$_POST['txtaddr'];	
	
$connect=mysqli_connect("localhost","root","","school");	
$select=mysqli_query($connect,"select * from student_data where email='$email'");
$num=mysqli_num_rows($select);
$row=mysqli_fetch_array($select);

$array=array($name,$fname,$course,$age,$cnic,$reli,$gender,$numb,$email,$pass,$c_pass,$address);
$count=count($array);

for($i=0; $i<$count; $i++){
$abc=str_word_count($array[$i]);
}	
if($abc>11){
echo"<script>alert('email already exist');</script>";
}
else{
$select1=mysqli_query($connect,"select * from student_data where email='$email' ");
$num1=mysqli_num_rows($select1);
$row1=mysqli_fetch_array($select);
if($pass ==$c_pass){
$insert=mysqli_query($connect,"insert into student_data values('','$name','$fname','$course','$age','$cnic','$reli','$gender','$numb','$email','$pass','$address')");

session_start();

if($insert){
$_SESSION['email']=$email;
echo"<script>alert('Data insertd sucessfully');</script>";
echo"<script>window.location.assign('index1.php?id=".$row[0]."');</script>";
}	
else{
echo"<script>alert('signup error');</script>";
}	
}
else{
echo"<script> alert('counform password is wronge');</script>";	
}
}	
}
else{
echo"<script>aler('less then 11 words!');</script>";	
}


?>