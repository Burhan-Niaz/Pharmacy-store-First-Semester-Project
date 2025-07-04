<?php 

$server ="localhost";
$username="root";
$password="";
$dbname="webcoding";
$con=mysqli_connect($sever,$username,$password,$dbname);
if(!$con){
    echo"not connected";
}

else{
    echo"connected";
}
//start
$name=$_POST['name'];
$email=$_POST['email'];
$phone =$_POST['phone'];
$city=$_POST['city'];
$password=$_POST['password'];
$sql="INSERT INTO `test`(`name`, `email`, `phone`, `city`, `password`) 
VALUES ('$name','$email','$phone','$city','$password')";
$result = mysqli_query($con,$sql);
 if($result){
    echo "data submitted";

 }
 else{
    echo "qurry failed";
 }


?>

