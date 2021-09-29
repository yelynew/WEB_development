<?php

$filePath = './sample/student.txt';
$fileResource = fopen($filePath, 'r');
if ($fileResource === false) {
    exit(sprintf('Cannot read [%s] file.', $filePath));
}
else
{

    $lineNumber = 0;
while (!feof($fileResource)) {
    $lineNumber++;
    $line = fgets($fileResource);
    echo sprintf("Line %d: %s", $lineNumber, $line);
}

}
fclose($fileResource);

?>
