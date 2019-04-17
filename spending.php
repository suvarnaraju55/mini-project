<?php
$con=mysqli_connect("localhost","root","","banking");
$query = "SELECT SUM(amount) FROM transcations"; 
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){

echo  "Total amount is Rs". $row['SUM(amount)'];
	echo "<br />";
}
?>