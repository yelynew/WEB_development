<?php

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'header.html' ) ;

?>


<!-- Display body section. -->
<h1>Login</h1>
<form action="login_action.php" method="post">
<p>Email Address: <input type="text" required name="email"> </p>
<p>Password: <input type="password" required name="pass"></p>
<p><input type="submit" value="Login" ></p>
</form>
<br>
<br>
<a href="register.php">Register-Create account</a>;
<?php
include ( 'footer.html' ) ; 

?>
