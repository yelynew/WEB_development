<?php

# Set page title and display header section.
$page_title = 'Payment' ;
include ( 'header.html' ) ;

?>
<?php

include 'connectOOP.php';// include connection to MySQL Server

session_start() ; 

echo "Hi, ". $_SESSION['User_Name'] .", ID : ". $_SESSION['Member_Id'] . "<br><br>";

$mid = $_SESSION['Member_Id'];

$sql = "SELECT * FROM Payments WHERE Member_Id = $mid"; 

// Issue the query
$result = $pdo->query($sql);

if ( $result->rowCount() > 0) {

echo '<table style="width:100%"; border="1" >';
  echo '<tr>';
    	echo '<th>ID</th>';
    	echo '<th> Member Id</th>'; 
   	echo '<th>Payment Date</th>';
  	echo '<th>Amount</th>';
  echo '</tr>';
   
// Loop through all the rows returned by the query
foreach ( $result as $row ) {
    print '<tr>';
    print '<td>'."{$row['ID']}".'</td>';
    print  '<td>'."{$row['Member_Id']}".'</td>';
	$mysql_date=$row['Payment_Date'];
	$dt = new DateTime($mysql_date);
	//echo $dt->format('Y-m-d');
	$interval = $dt->diff(new DateTime());
	//$date_obj = date_create_from_format('Y-m-d',$dt);
	$date = date_format($dt, 'm/d/Y');
	print   '<td>'."{$date}".'</td>';
    print   '<td> $'."{$row['Amount']}".'</td>';
    print  '</tr>';
   
}
 echo '</table>';


}
else {
    print "No rows matched the query.";
}?>
<a href="home2.php"> Home </a>
<br/>
<a href="Schedule.php"> Display the Schedule </a>
<br/>
<a href="login2.php"> Login </a>
<?php
include ( 'footer.html' ) ; 

?>

