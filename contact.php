<?php 
//Create a conection with database
$con = mysqli_connect("localhost", "root", "", "web");

//Set Variebles for the input
$name = $_POST['name'];
$ename = $_POST['ename'];
$bank = $_POST['bank'];


//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO web(name,ename,bank) VALUES ('$name', '$ename','$bank')";


//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "Data has not saved";
} else{
	echo "<script>alert('Wow! User Registration Completed.')</script>";
	header("Location:http://localhost/web-assesment-group-new/contact us.html");}
?>
