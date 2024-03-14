<?php
$servername="localhost";
$username="root";
$password="";
$dbname="photography";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$query="INSERT INTO uesrs(name,email,number) VALUES('$name','$email','$number')";
mysqli_query($conn,$query);
header('location:index.php');//after submit it will redirect into mentioned location


?>