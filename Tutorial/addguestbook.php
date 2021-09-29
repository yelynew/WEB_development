<?php
include 'connect.php';// include connection to MySQL Server

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{

 
  //read data from the form
  $name = $_POST[ 'name' ];
  $email = $_POST[ 'email' ];
  $comment = $_POST[ 'comment' ];
  $datetime=date("y-m-d h:i:s"); //date time
// clean data with trim()

$email = trim($email);
$name = trim($name);
$comment = trim($comment);

}
# Initialize an error array.
  $errors = array();

 # Check if email address already registered.
 
    $q = "SELECT * FROM guestbook WHERE email='$email'" ;
    // Issue the query
    $r = $database->query($q);

    if ( $r->num_rows > 0 )
    {
        $errors[] = 'Email address already registered' ;
                #move to view page
	header("Location: guestbook.html");
     	//exit();//Output a message and terminate the current script
    }
else
  {
$sql="INSERT INTO guestbook(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
// Issue the query
$result = $database->query($sql);

//check if query successful 
if($result)
{
#move to view page
	header("Location: viewguestbook.php");
     	exit();//Output a message and terminate the current script
}
else 
{
$errors[] = 'ERROR';
}
  }  ?>


