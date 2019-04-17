<?php
$con=mysqli_connect("localhost","root","","banking");
$query = "SELECT * FROM transcations"; 
$result = mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
               echo "<table border=1 align=center>";
               echo "<caption>DETAILED STATEMENT</caption>";
            echo "<tr>";
                echo "<th>TXN.ID</th>";
                echo "<th>AMOUNT</th>";
                echo "<th>TOACC</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Transid'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['toacc'] . "</td>";
                  echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
mysqli_close($con);
?>










