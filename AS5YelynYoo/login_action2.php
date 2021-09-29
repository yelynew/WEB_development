<?php # PROCESS LOGIN ATTEMPT.

# Check form submitted.

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
 
  //read data from the form
  
  $email = $_POST[ 'User_Name' ];
  $password = $_POST[ 'pass' ];

// clean data with trim()

$email = trim($email);
$passwords = trim($password);
}

include 'connect.php';// include connection to MySQL Server
 
 # On success retrieve user_id, first_name, and last name from 'users' database.
  
  // Use MySQL to Select user from the table users
$sql = "SELECT User_Name, Member_Id FROM UsersMember2 WHERE User_Name='$email' AND Pass=SHA1('$password')" ; 

// Issue the query; $database connection string-see connect.php
$result = $database->query($sql);

#the function num_rows() checks if there are more than zero rows returned.
if ($result->num_rows > 0)
 {
	#load Home page
	// output data of each row, present $result as Array
   $row = $result->fetch_assoc();
      
    # Access session.
    session_start();
    $_SESSION[ 'User_Name' ] = $row["User_Name"];
    $_SESSION[ 'Member_Id' ] = $row["Member_Id"] ;
	

	#load Home page
     header("Location: home2.php");
     exit();//Output a message and terminate the current script

  }
else
{
	#return to Login page
	header("Location: login2.php");
       	exit();//Output a message and terminate the current script


}


  # Close database connection.
  mysqli_close( $database ) ; 

?>
