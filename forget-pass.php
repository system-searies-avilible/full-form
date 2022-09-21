
<form method="post">
<table border="2">
<tr>
<th>Email :</th>
<td><input type="email" name="txtemail" /></td>
</tr>

<tr>
<th> :</th>
<td><input type="submit" name="btn_forget" value="Next"/></td>
</tr>
</table>

</form>


<?php
if(isset($_POST['btn_forget'])){
$email=$_POST['txtemail'];

$connect=mysqli_connect("localhost","root","","career_boosting");

session_start();


$_SESSION['email']=$email;


$select=mysqli_query($connect,"select * from  student_data  where email='$email' ");	
	$num=mysqli_num_rows($select);
	//email varification
if($num>0){
	//random code genrator
$code=rand(111,999);
mysqli_query($connect,"insert into v_code value('','$code');");
echo"<script>alert('varification code has been send to your database');</script>";
echo"<script>window.location.assign('reset_pass.php');</script>";				
}
else{
echo"<script>alert('Email donot exist');</script>";

}	
	
}



?>