<?php 
//Create a conection with database
$con = mysqli_connect("localhost", "root", "", "web");

//Set Variebles for the input
$name=$_POST['name'];
$ename=$_POST['ename'];
$contact=$_POST['contact'];
$date=date('y-m-d',strtotime($_POST['date']));

$ad=$_POST['ad'];
$district=$_POST['district'];


//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO info(name,ename,contact,date,ad,district) VALUES ('$name','$ename','$contact','$date','$ad','$district')";


//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "Data has not saved";
} else{
	echo "<script>alert('Wow! User Registration Completed.')</script>";
	header("Location:http://localhost/web-assesment-group-new/index.html");}



?>