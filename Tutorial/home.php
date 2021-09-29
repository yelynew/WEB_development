<?php

session_start() ; 

echo "Hi, ". $_SESSION['first_name'] . " ". $_SESSION['last_name'] . ".<br><br>";
echo $_SESSION[ 'first_name' ];

include 'connect.php';// include connection to MySQL Server

// Select students that have a GPA equal to or above 2.0
$sql = "SELECT * FROM Students "; 

// Issue the query
$result = $database->query($sql);
if (!$result) {
   die("Error executing query: ($database->errno) $database->error<br>SQL = $sql");
}

// Loop through all the rows returned by the query
while ($row = $result->fetch_row()) {
   echo "Student ID:". $row[0].  "\tStudent name: ". $row[1]. "\t has a " . $row[2] ."GPA<br>\n";
}


?>
