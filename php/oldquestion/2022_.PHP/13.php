<?php
$sourcefile = '15.php';
$destfile = 'destination.txt';
 
$read_handle = fopen($sourcefile, 'r');
$write_handle = fopen($destfile, 'w');
$line_number = 0;
 
if ($read_handle && $write_handle) {
    while (($line = fgets($read_handle)) !== false) {
        $line_number++;
        if ($line_number % 2 == 1) {
            fwrite($write_handle, $line);
        }  
    }
    fclose($read_handle);
    fclose($write_handle);      
} else {
    // error opening the file.
}
?>