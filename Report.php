<?php
$amount=$_POST['amount'];
$toacc=$_POST['toac'];
$conn=mysqli_connect("localhost","root","","banking");
$sql="INSERT INTO TRANSCATIONS(TOACC,amount) VALUES('$toacc','$amount')";

if(mysqli_query($conn,$sql)===TRUE)
{
$msg="Your transaction is successful";
echo "<script type='text/javascript'>alert('$msg');</script>";
}

$bal=$_POST['amount'];

$sql="select * from balancetable";
$result=mysqli_query($conn, $sql);

$row=mysqli_fetch_row($result);
$sql1="update balancetable set balance=$row[0]-$bal";
//$sql1="select * from transcations";
$result1=mysqli_query($conn, $sql1);
mysqli_close($conn);
?>
