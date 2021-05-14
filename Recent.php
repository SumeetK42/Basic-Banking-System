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
#ty{
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
}
table {
margin: -0.1cm 8px 8px 8px;
background-color: yellow;
}
th {
font-family: Arial, Helvetica, sans-serif;
font-size: 0.6cm;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 0.6cm;
border: 1px solid darkgrey;
padding:4px 20px;
color:black;
margin:10px;
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

$sql = "SELECT Sr,From_user,To_user,Amount,Date FROM recent_transaction";
$result = $conn->query($sql);
$d = date("Y-m-d");


if ($result->num_rows > 0) {
    // output data of each row
    echo '<div class="trans" id="ty"><table>';
    echo "<h1>Recent transactions</h1>";
    echo "<tr><th>Sr.no</th><th>From</th><th>To</th><th>Date</th><th>Amount</th></tr>";
  
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>$row[Sr]</td><td>$row[From_user]</td><td>$row[To_user]</td><td>$d</td><td>$row[Amount]</td></tr>";
    }
    echo "</table></div>";
  } 
  else {
    echo '<h1 style="text-align: center;transform: translateY(30vh);">No Recent Transactions !!</h1>';
  }
  
        
        
        ?>
<div class="footer">
        <h2>All Copyrights are reserverd @NHB 2020-2021</h2>
</div>     
    </div>
    
</body>
</html>