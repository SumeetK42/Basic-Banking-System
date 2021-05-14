<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty3.css" type="text/css">
    <title>Recent Transaction</title>
</head>
<style>
.sorry{
  text-align: center;
}
.sorry a{
  background-color: darkblue;
  text-decoration:none;
  color: white;
  font-weight: bold;
  padding:8px 3cm;
  font-size: 0.6cm;
}
.bt{
  margin-top:30px;

}  
</style>
<body>
    <div class="container">
<div class="header">
        <a href="Home.html"><span class="logo"><img src="NHB_Bank.png" alt="logo"/></span></a>
        <h2 class="bank" style="text-align: center;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;">National Heritage Bank</h2>
        </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "people";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Name,Email,Balance FROM users ";
$result = $conn->query($sql);
$sql2 = "SELECT Balance FROM users WHERE Name= '$_POST[Name]'";
$result2 = $conn->query($sql2);
$d =date("Y-m-d");

function update($a,$b,$c,$d){
  $sql3 = "UPDATE users SET Balance = $a -$b  WHERE Name = '$c'";
  $sql4 = "UPDATE users SET Balance = Balance + $b  WHERE Name = '$d'";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "people";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if (($conn->query($sql3) and $conn->query($sql4)) === TRUE) {
    echo "<div class='sorry'>";
    echo "<h1>Transaction Done Succesfully</h1><br/>";
    echo "<div class='bt'><a href='Trans.php'>View Customers</a></div>";
    echo "";
    $sql5 = "INSERT INTO recent_transaction (From_user,To_user,Date,Amount) Values ('$_POST[Name]','$_POST[Name2]',$d,$_POST[Balance])";
    if(($conn->query($sql5) === TRUE)){
      echo "<div class='bt'><a href='Recent.php'>See Recent Transcation</a></div>";
    }
   echo "</div>"; 

  } else {
    echo "<div class='sorry'> <h1>Sorry Transaction failed please check the credentials </h1>" . $conn->error;
    echo "<a href='Send.php'><p>Back to Tranfer amount</p></a></div>";
  }
}


if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    if($_POST['Balance'] <= $row["Balance"]){
      echo update($row["Balance"],$_POST['Balance'],$_POST['Name'],$_POST['Name2']);
    }
    else{
      echo "<div class='sorry'><h1>Sorry Transaction failed Insuffient Amount</h1><br/>";
      echo "<a href='Send.php'>Back to Tranfer amount</a></div>";
    }
  }
} else {
    echo "<div class='sorry'><h1>Sorry Transaction failed Insuffient Amount</h1><br/>";
      echo "<a href='Send.php'>Back to Tranfer amount</a><div>";
}


$conn->close();  
            ?>
<div class="footer">
        <h2>All Copyrights are reserverd @NHB 2020-2021</h2>
</div>     
    </div>
    
</body>
</html>