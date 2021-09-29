<?php

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'header.html' ) ;

?>


<!-- Display body section. -->
<h1>Login</h1>
<form action="login_action2.php" method="post">
<p>User Name: <input type="text" required name="User_Name"> </p>
<p>Password: <input type="password" required name="pass"></p>
<p><input type="submit" value="Login" ></p>
</form>
<br>
<br>
<?php
include ( 'footer.html' ) ; 

?>
