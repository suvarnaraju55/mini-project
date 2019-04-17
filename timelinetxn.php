<?php
$con=mysqli_connect("localhost","root","","banking");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * from transcations";




if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
               echo "<table border=1 align=center>";
               echo "<caption>TRANSACTION DETAILS</caption>";
            echo "<tr>";
                echo "<th>TXN.ID</th>";
                echo "<th>AMOUNT</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Transid'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                  echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($con);
?>