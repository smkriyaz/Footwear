<?php
$n=$_POST['studentemail'];
$c=$_POST['studentpassword'];
$con=mysqli_connect("localhost", "root", "" ,"footwear");
$sql="INSERT INTO login(emails,passwords) values('$n','$c')" ; 
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Login Successfull";
}
else{
    echo "problem";
}
?>

