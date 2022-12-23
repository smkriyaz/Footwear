<?php
$a=$_POST['fname'];
$b=$_POST['lname'];

$d=$_POST['mail'];
$e=$_POST['cpass'];
$f=$_POST['kpass'];
$con=mysqli_connect("localhost", "root", "" ,"footwear");
$sql="INSERT INTO signup(firstname,lastname,email,createpassword,confirmpassword) values('$a','$b', '$d', '$e' , '$f')" ; 
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Signin Successfull";
}
else{
    echo "problem";
}
?>

// first server name, username ,password, databse name