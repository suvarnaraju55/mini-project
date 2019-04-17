<?php
$accid=$_POST['accid'];
$pwd=$_POST['pwd'];

$con=new mysqli('localhost','root','','banking');

if (!$con)
    die("Connection failed: " . mysqli_connect_error());
else
   $sql = "SELECT *FROM user1 WHERE AccountID='$accid'";

$result=mysqli_query($con,$sql);
$user=mysqli_fetch_assoc($result);
if($user){
    if($user['Password']==$pwd)
       {
      echo "logged in successfully";
      header('location:webpage.html');
       }
    else{
      echo "wrong password";
       }
}
else 
    echo "No such User....";
 
mysqli_close($con);
?>