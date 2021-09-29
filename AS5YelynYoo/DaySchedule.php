<?php

# Set page title and display header section.
$page_title = 'Schedule' ;
include ( 'header.html' ) ;

?>
<?php
include 'connectOOP.php';// include connection to MySQL Server

session_start() ; 

echo "Hi, ". $_SESSION['User_Name'] .", ID : ". $_SESSION['Member_Id'] . "<br><br>";
//$day2 = $_SESSION['Days']
$day2 = isset($_POST['day']) ? $_POST['day'] : "";
//echo $day2;

$sql = "SELECT * FROM Schedule WHERE Day=$day2"; 

// Issue the query
$result = $pdo->query($sql);
//echo $result;

if ( $result->rowCount() > 0) {

echo '<table style="width:100%"; border="1" >';
  echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>Day</th>'; 
	echo '<th>Time</th>';
	echo '<th>Instructor_Id</th>';
  echo '</tr>';
   
// Loop through all the rows returned by the query
foreach ( $result as $row ) {
	   print '<tr>';
	print '<td>'."{$row['ID']}".'</td>';
	print  '<td>'."{$row['Day']}".'</td>';
   //print   '<td>'."{$row['Time']}".'</td>';
	$ti = new \DateTime($row['Time']);
	$ti= $ti->format("h:i A");
	print   '<td>'."{$ti}".'</td>';
	print   '<td>'."{$row['Instructor_Id']}".'</td>';
	print  '</tr>';
   
}
 echo '</table>';
 }
else {
	print "No rows matched the query.";
}
?>
	<br/>
	<a href="Payment.php"> Display the Payment </a>
	<br/>
	<a href="Schedule.php"> Display the Schedule </a>
	<br/>
	<a href="home2.php"> Home </a>
	<br/>
	<a href="login2.php"> Login </a>
	

<?php

include ( 'footer.html' ) ; 

?>
	