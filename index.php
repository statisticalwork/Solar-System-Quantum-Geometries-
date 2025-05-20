<html>
<style>








body{
	background-image: url("https://image.freepik.com/vector-gratis/vista-tierra-espacio-satelite_41814-308.jpg");
	 background-repeat: no-repeat;
     background-size: cover;
	 color:white;
	 background-color:#177AA3;
	 
	 
}



input{
	background-color:#b8dff2;
flex-grow: 1;
  color: $input-text-active;
  font-size: 1.8rem;
  line-height: 2.4rem;
  vertical-align: middle;
  &::-webkit-input-placeholder {
    color: $input-text-inactive;
}}

button {
  color:  $input-text-inactive;
  font-size: 1.4rem;
  line-height: 2.4rem;
  vertical-align: middle;
  transition: color .25s;
  &:hover {
    color: $input-text-active;
  }

  
  
  
    border-radius: 4px;
  background-color: #0E6CD6; <!--#f4511e;-->
  border: none;
  color: #FFFFFF;
  text-align: center;
 
 

  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
  
  
}
input {
  position: relative;
  display: flex;
  flex-direction: row;
  width: 100%;
  max-width: 200px;
  margin: 0 auto;
  border-radius: 2px;
  padding: 1.0rem 1rem 1.1rem;
  
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  
 
</style>

<style>

.scroll-left  {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>




<head>
<title>Planetary Quantum Computer QGI  PQGE  SOLQORE AI    </title
<meta description="Building the First Planetary-Scale Quantum Computer for AI Shielding and Cosmic Information Encoding   " >
</head>

<body>

<div class="scroll-left" >
<div align="right">
<font style="font-size:3vw;">SOLQORE - The Solar Quantum Core QGIengine</font></div></div>
<!--<img src="Pictures/logosl.jpg">-->
<h3>&nbsp </h3>
<div class="column">
<form class="" action="system.php" method='POST'>
  <table>
  <tr>
  <td><label>U1 Min:</label><input name="u1min" required id="u1min"  /></td>
   <td><label>U1 Max:</label><input name="u1max" required id="u1max" /></td>
 </tr>
  <tr>
   <td> <label>U2 Min:</label><input name="u2min" required id="u2min" /></td>
  <td> <label>U2 Max:</label><input name="u2max" required id="u2max" /> </td>
   </tr>
   <tr>
    <tr>
  <td>   <label>U3 Min:</label><input name="u3min" required id="u3min" /></td>
  <td> <label>U3 Max:</label><input name="u3max" required id="u3max" /></td>
   </tr>
   <tr><td>&nbsp&nbsp&nbsp </td><td>&nbsp&nbsp&nbsp </td></tr>
    <tr>
 <td><label>Between:</label><input name="maxd"  id="maxd" /></td>&nbsp&nbsp&nbsp
   <td><label> And: </label><input name="maxd1"  id="maxd1" /></td><br>
     </tr>	
   </table><br>
   
 <!-- <label>Content:</label><input name="content" required id="content" /> -->
  <button class="login-button" type="submit" title="Confirm">SYSTEM START</button>
<a href="about.html"><button type="button">ABOUT SOLQORE</button></a>
  </form>
 The first brick of the solar system quantum computer SOLQORE
V. 1.2 How to use? - Insert the correlation date in YYYY-MM-DD where DD could be only 05, 19 ( beggining and middle of the month). You will get the planetary coordinates values which must be copied and inserted in the Umin - Umax fields and then press system start. Press twice on the buttons for better experience if you encounter delay in touch.<br>
<a href="QGI.mp4">Old video tutorial here</a>
</div>



<div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div><p>


<form class="" action="/" method='POST'>
<table><tr><td><label>Choose next date:</label></td></tr><p><tr><td><input name="daten"  id="daten" value="" /></td><td><img src="Pictures/quantumcore.jpg" width="80px"></td></tr></table><br>
<button class="login-button" type="submit" title="Confirm">GET COORDINATES</button>
</form>




<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername = "localhost";
$username = "";
$password = "";
$dbname = "    ";
$daten = $_POST['daten'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM project WHERE name = ('$daten')";

//$sql = "SELECT id, name , u1, u2, u3 FROM project WHERE (u1 >='$u1min') AND (u1 <='$u1max') AND (u2 >='$u2min') AND (u2 <='$u2max') AND (u3 >='$u3min') AND (u3 <='$u3max') AND  name BETWEEN ('$maxd') AND ('$maxd1')";
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
 while($row = $result->fetch_assoc()) {
    
echo "<div style='background-color: rgba(0,0,0,0.4); padding: 10px; border-radius: 10px; font-size: 4vw; line-height: 1.6em; max-width: 95%; margin: auto;'>";
echo "<strong>Coordinates format:</strong> Year-Month-Day<br>";
echo "<strong>Your coordinates:</strong><br>";
echo "Date: <b>" . $row['name'] . "</b><br>";
echo "U1: <b>" . $row['u1'] . "</b> | U2: <b>" . $row['u2'] . "</b> | U3: <b>" . $row['u3'] . "</b><br><hr style='border-color:white;'>";

	echo ">98% U1 min: <b>";
	echo  $row['u1'] - 20 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	// U1 ///
    echo ">98% U1 max: <b>";
	echo  $row['u1'] + 20 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	/// U2 ////
	echo ">98% U2 min: <b>";
	echo  $row['u2'] - 20 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	///U2////
	echo ">98% U2 max: <b>";
	echo  $row['u2'] + 20 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	////U3////
	echo ">98% U3 min: <b>";
	echo  $row['u3'] - 20 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	// U3 ///
    echo ">98% U3 max: <b>";
	echo  $row['u3'] + 20 ;
    echo "</b>";
	echo "<p>";
	/// U1 95% //// // / / 
	echo ">95% U1 min: <b>";
	echo  $row['u1'] - 30 ;
	$u195 = $row['u1'] - 30 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	///U1////
	echo ">95% U1 max: <b>";
	echo  $row['u1'] + 30 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	echo ">95% U2 min: <b>";
	echo  $row['u2'] - 30 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	///U2////
	echo ">95% U2 max: <b>";
	echo  $row['u2'] + 30 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	////U3////
	echo ">95% U3 min: <b>";
	echo  $row['u3'] - 30 ;
    echo "</b>";
	// U3 ///
	echo "&nbsp&nbsp";
    echo ">95% U3 max: <b>";
	echo  $row['u3'] + 30 ;
    echo "</b>";
	echo "<p>";
	/// U1 90% //// // / / 
	echo ">90% U1 min: <b>";
	echo  $row['u1'] - 45 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	///U1////
	echo ">90% U1 max: <b>";
	echo  $row['u1'] + 45 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	echo ">90% U2 min: <b>";
	echo  $row['u2'] - 45 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	///U2////
	echo ">90% U2 max: <b>";
	echo  $row['u2'] + 45 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	////U3////
	echo ">90% U3 min: <b>";
	echo  $row['u3'] - 45 ;
    echo "</b>";
	echo "&nbsp&nbsp";
	// U3 ///
    echo ">90% U3 max: <b>";
	echo  $row['u3'] + 45 ;
    echo "</b>";
	
	
	
  }
} else {
  echo "<img id='globe'  src='Pictures/globe.gif' ></div>";
}
 
$conn->close();


  

?>

