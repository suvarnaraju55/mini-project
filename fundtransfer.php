<?php
$amount=$_POST['amount'];
$toacc=$_POST['toac'];
if($balance<$amount)
{
$msg1="Insufficient balance";
echo "<script type='text/javascript'>alert('$msg1');</script>";

}
else
{
$con=mysqli_connect("localhost","root","","banking");
$sql="INSERT INTO TRANSCATIONS(TOACC,amount) VALUES('$toacc','$amount')";

if(mysqli_query($con,$sql)===TRUE)
{
$msg="Your transaction is successful";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
else
{echo "insertion failed";}

}
?>
