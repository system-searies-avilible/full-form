
<center>
<h1> Student Data</h1>

<table border="2">
<tr>
<th>ID </th>
<th>NAME </th>
<th>FATHER NAME</th>
<th>COURSE</th>
<th>AGE</th>
<th>CNIC NUMBER</th>
<th>RELISHION</th>
<th>GENDER</th>
<th>NUMBER</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>ADDRESS</th>
</tr>




<?php
session_start();
	
	$server="localhost";
	$username="root";
	$password="";
	$database="career_boosting";
	$email=$_SESSION['email'];
$connect=mysqli_connect($server,$username,$password,$database);



$select=mysqli_query($connect,"select * from student_data where email='$email'  ");

$num=mysqli_num_rows($select);


for($i=0; $i<$num; $i++){
	
$row=mysqli_fetch_array($select);
echo"<h1>".'Welcome to your id'.$row[1]."</h1>";

	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".$row[3]."</td>";
	echo"<td>".$row[4]."</td>";
	echo"<td>".$row[5]."</td>";
	echo"<td>".$row[6]."</td>";
	echo"<td>".$row[7]."</td>";
	echo"<td>".$row[8]."</td>";
	echo"<td>".$row[9]."</td>";
	echo"<td>".$row[10]."</td>";
	echo"<td>".$row[11]."</td>";
	echo"</tr>";
}
?>
</table>
</center>


<form method="post" >
<table border="2">
<tr>
<th>:</th>
<td><input type="submit" name="btn_logout" value="LOGOUT"/></td>
</tr>
</table>

</form>
<?php
if(isset($_POST['btn_logout'])){
session_unset();


echo"<script>alert('logout sucessfully')</script>";
session_destroy();
header('location:login.php');	
	
}

?>
