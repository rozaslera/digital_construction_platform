<?php
 $path = 'data.txt';
 if (isset($_POST['email'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['email'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>