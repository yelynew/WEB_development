<?PHP
try
{
$database = "mysql:host=rei.cs.ndsu.nodak.edu;dbname=yelynyoo_db371s21"; 
$user = "yelynyoo_371s21"; 
$pass = "afazxaph70"; 
$pdo = new PDO($database, $user, $pass);
//echo("connected"); 
}
catch (PDOException $e) 
{ die( $e->getMessage() ); }

?>
