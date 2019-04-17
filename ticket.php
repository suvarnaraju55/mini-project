<?php
$tickets = $_POST['tickets'];
$conn =mysqli_connect("localhost","root","","ticketdb");
$INSERT = "INSERT Into tickettable (tickets) values('$tickets')";
if(mysqli_query($conn,$INSERT))
{echo "ticket booked";}
else
{echo "ticket not booked";}
?>