<html>
<a href="index.php">MAIN</a> <div align="right"><font style="color:#fff;"><B>DISCOVER THE INTERVALS AND REGIONS UNDER THE LORENTZ GRAVITATIONAL FIELDS</B></font></div>
</html>
 <?php
    $u1min = $_POST['u1min'];
    $u1max = $_POST['u1max'];
	$u2min = $_POST['u2min'];
	$u2max = $_POST['u2max'];
	$u3min = $_POST['u3min'];
    $u3max = $_POST['u3max'];
	$maxd = $_POST['maxd'];
	$maxd1 = $_POST['maxd1'];
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




//$sql = "SELECT name, u1, u2, u3 FROM project";
$sql = "SELECT id, name , u1, u2, u3 FROM project WHERE (u1 >='$u1min') AND (u1 <='$u1max') AND (u2 >='$u2min') AND (u2 <='$u2max') AND (u3 >='$u3min') AND (u3 <='$u3max') AND  name BETWEEN ('$maxd') AND ('$maxd1')";
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<div class='row'><div class='column' style='background-color:#00162B;'></div>";
    echo "<div class='column' style='background-color:#00162B; '>";
  // pics here	
echo "<img id='neo' src='Pictures/". $row["name"] . ".jpg '>";
$year = substr($row["name"], 0, 4);
echo "&nbsp&nbsp&nbsp&nbsp <a href='https://en.wikipedia.org/wiki/List_of_earthquakes_in_". $year . " 'target='blank'' '> View zones and seismic events  </a> ";	
$row["u1"] = $row["u1"]+1000;


	echo "</div>";
	echo "<div id='ka'>";
    echo "<table id='system'><tr><th>&nbsp&nbsp Year: </th><td>   </td><th>&nbsp&nbsp U1: </th><td>" . $row["u1"]. "</td><th>&nbsp&nbsp U2: </th><td>" . $row["u2"]. "</td><th>&nbsp&nbsp U3:  <td>" . $row["u2"]. "</th></td></tr> <th id=xyear> &nbsp&nbsp". $row["name"]."</th></table><br>";
	echo "</div>";
    echo "</div>";
	
	
	//echo "Year:" . $row["name"]. "&nbsp&nbsp- U1: " . $row["u1"]. "&nbsp&nbsp- U2: " . $row["u2"]. "&nbsp&nbsp- U3:  " . $row["u2"]. "<br>";
	$saver = $row["name"];
	$saver1 = $row["u1"];
	$saver2 = $row["u2"];
	$saver3 = $row["u3"];
	
	//echo $saver . ' -U1- ' . $saver1 . ' -U2- ' . $saver2 . ' -U3- ' . $saver3;
	
	$myfile = fopen("data.txt", "a") or die("Unable to open file!");
    $txt = $saver . ' -U1- ' . $saver1 . ' -U2- ' . $saver2 . ' -U3- ' . $saver3.PHP_EOL;;
    fwrite($myfile, $txt);
    fclose($myfile);
  }
} else {
  echo "0 results";
}
 
$conn->close();

?> 
<!--
<form class="" action="index.php" method='POST'>
  <label>U1 Min</label><input name="u1min" required id="u1min" />
   <label>U1 Max</label><input name="u1max" required id="u1max" />
    <label>U2 Min</label><input name="u2min" required id="u2min" />
   <label>U2 Max</label><input name="u2max" required id="u2max" /> 
     <label>U3 Min</label><input name="u3min" required id="u3min" />
   <label>U3 Max</label><input name="u3max" required id="u3max" />
   
   
   
 <!-- <label>Content:</label><input name="content" required id="content" /> --
  <button class="login-button" type="submit" title="Confirm">Confirm</button>
</form>
-->
<html>
<head>
<style>
body{
	background-color:#00558E;
}

a:visited {
  color:#ffad33;
    font-size: 1.875em;
}
a:link {
  color:#00ff99;
    font-size: 1.875em;
}


#system {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

#system td, #system th {
  border: 5px solid #ddd;
  padding: 0px;
  background-color: #ccc;
}

#system tr:nth-child(even){background-color: #f2f2f2;}

#system td:hover {background-color:#ff3300;}

#system th {
  padding-top: 0px;
  padding-bottom: 0px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<style>
#neo {
	width:100px;
  transition: transform .2s;
  margin: 0 auto;
}
#neo:hover {
  -ms-transform: scale(1.9); /* IE 9 */
  -webkit-transform: scale(1.9); /* Safari 3-8 */
  transform: scale(1.9); 
}
#ka {
	background-image:url("Pictures/signal.gif");
}
</style>
</head>
<body>


</body>
</html>