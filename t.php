<html>
<head>
<title>PHPForms</title>
</head>
<body>
<?php

$conn =mysqli_connect("localhost","root","","banking");
            //$balance=$_POST[tb];
            $sql    = "SELECT * FROM balancetable WHERE AccountID='123456'";
            $result = mysqli_query($conn,$sql) or die(mysql_error());
            while ($row    = mysqli_fetch_array($result))
            {

                $balance     = $row['balance'];
                            }
 // echo $balance;
            ?>
<center>
<h1>Transcation Details</h1>
<form name="myform" action="Report.php" method="POST">
balance:<?php echo $balance?>
<br/><br/>
To Account:<input type="text" name="toac" size="20"/>
<br/><br/>
Amount:<input type="text" name="amount" size="20"/>
<br/><br/>
<input type="submit" value="TRANSFER"/>
<input type="reset" value="CANCEL"/>
</form>
</center>
</body>
</html>
