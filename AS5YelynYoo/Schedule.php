<?php

# Set page title and display header section.
$page_title = 'Schedule' ;
include ( 'header.html' ) ;

?>
<?php

include 'connectOOP.php';// include connection to MySQL Server

session_start() ; 

echo "Hi, ". $_SESSION['User_Name'] .", ID : ". $_SESSION['Member_Id'] . "<br><br>";


$sql = "SELECT * FROM Schedule"; 

// Issue the query
$result = $pdo->query($sql);

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
<html>
	<body>
	<form action="DaySchedule.php" method="POST">
    <input type ="number" id ="day" name="day">
    <input type="submit" value="submit" name="submit">
	</form>
	

	<br/>
	<a href="Payment.php"> Display the Payment </a>
	<br/>
	<a href="home2.php"> Home </a>
	<br/>
	<a href="login2.php"> Login </a>

	</body>
</html>


<?php
//echo day.value;
 $_SESSION['Days'] = day.value;


include ( 'footer.html' ) ; 

?>