<?php

# Set page title and display header section.
$page_title = 'Home' ;
include ( 'header.html' ) ;

?>
<?php

include 'connectOOP.php';// include connection to MySQL Server

session_start() ; 

//echo "Hi, ". $_SESSION['User_Name'] .", ID : ". $_SESSION['Member_Id'] . "<br><br>";


$sql = "SELECT * FROM UsersMember"; 

// Issue the query
$result = $pdo->query($sql);


if ( $result->rowCount() > 0) {

echo '<table style="width:100%"; border="1" >';
  echo '<tr>';
    	echo '<th>ID</th>';
    	echo '<th>Last Name</th>'; 
   	echo '<th>First Name</th>';
  	echo '<th>Phone</th>';
	echo '<th>Date Joined</th>';
  echo '</tr>';
   
// Loop through all the rows returned by the query
foreach ( $result as $row ) {
       print '<tr>';
    print '<td>'."{$row['ID']}".'</td>';
    print  '<td>'."{$row['Last_Name']}".'</td>';
   print   '<td>'."{$row['First_Name']}".'</td>';
    print   '<td>'."{$row['Phone']}".'</td>';
 print   '<td>'."{$row['Date_Joined']}".'</td>';
    print  '</tr>';
	
	if($row['ID']==$_SESSION['Member_Id']){
	echo "Hi, ". $row['First_Name']." ".$row['Last_Name']."<br>ID : ". $_SESSION['Member_Id'] . "<br><br>";
	}


   
}
 echo '</table>';


}
else {
    print "No rows matched the query.";
}?>

<br/>
<a href="login2.php"> Login </a>
<br/>
<a href="Payment.php"> Display the Payment </a>
<br/>
<a href="Schedule.php"> Display the Schedule </a>

<?php
include ( 'footer.html' ) ; 

?>
