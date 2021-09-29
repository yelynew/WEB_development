<?php
$filePath = './sample/users_list_enclosed.csv'; 
header('Content-Type: text/csv');
header('Content-Length: ' . filesize($filePath));
header(sprintf('Content-Disposition: attachment; filename="%s"', basename($filePath)));
readfile($filePath);
?> 
