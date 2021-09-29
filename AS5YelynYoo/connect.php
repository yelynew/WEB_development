<?php

$database = new mysqli("rei.cs.ndsu.nodak.edu", "yelynyoo_371s21", "afazxaph70", "yelynyoo_db371s21");

// Output error info if there is a connection problem
if ($database ->connect_errno) {
   die("Failed to connect to MySQL: ($database ->connect_errno) $database ->connect_error");
}
?>
