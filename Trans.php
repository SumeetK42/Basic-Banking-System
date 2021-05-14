<!DOCTYPE html>
<title>National Heritage Bank</title>
<link rel="stylesheet" href="sty3.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
table {
margin: -0.1cm 8px 8px 8px;
background-color: yellow;
}
#tr{
  background-image: url("In.jpg");
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
.trans{
  display:inline-block;
  padding:1cm;
}
.mon{
  border-bottom: 2px solid white;
  padding: 7px 35px;
  font: bold 15px/13px Helvetica, Verdana, Tahoma;
  font-size:0.6cm;
  margin:7px;
  background-color : rgb(226, 147, 36, 0.5)
}
.mon:hover{
  margin-top:7px;
  box-shadow:4px 2px gray;
  transition: all 1ms;
}
#act{
  float:right;
  margin-right:3cm;
  border-bottom:4px solid #DDD;
  margin-top:3cm;
}
</style>
<body>
    <div class="container" id="tr">

        <div class="header">
        <a href="Home.html"><span class="logo"><img src="NHB_Bank.png" alt="logo"/></span></a>
        <h2 class="bank" style="text-align: center;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;">National Heritage Bank</h2>
        </div>

        <div class="table">
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

$sql = "SELECT Name,Balance,Email FROM users";
$result = $conn->query($sql);
$count = 0;
$link = "Send.php" ;
$link2 = "Recent.php";

if ($result->num_rows > 0) {
  // output data of each row
  echo '<div class="trans"><table>';
  echo "<tr><th>Sr.no</th><th>Name</th><th>Email</th><th>Balance</th></tr>";

  while($row = $result->fetch_assoc()) {
    $count += 1; 
    echo "<tr><td>$count</td><td>$row[Name]</td><td>$row[Email]</td><td style='padding:0px 2cm;'>$row[Balance]</td></tr>";
  }
  echo "</table></div>";
} 
else {
  echo "0 results";
}

echo '<div class="trans" id="act" >';
echo '<a href="Send.php" style="text-decoration:none;"><div class="mon"><h2>Tranfer Money</h2></div></a>';
echo '<a href="Recent.php" style="text-align:center; text-decoration:none;"><div class="mon"><h2>Recent Transaction</h2></div><a>';
echo '</div>';


$conn->close();

?>
</div>

        <div class="footer">
        <h2>All Copyrights are reserverd @NHB 2020-2021</h2>
        </div>     
    </div>
</body>
</html>
