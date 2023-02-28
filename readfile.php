<!DOCTYPE html>
<html>
<body>


<?php
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

/*

The first parameter of fopen() contains the name of the file to be opened
// to know file size
$file =  "file.txt";
$filesize = filesize($file);
 To read entire  file PHP instead of line by line
 $file_text = fread( $file, $filesize );

 The fclose() function is used to close an open file.

The fgets() function is used to read a single line from a file.

The feof() function checks if the "end-of-file" (EOF) has been reached.

The fgetc() function is used to read a single character from a file.



A simple way to read entire file is using
file_get_contents($filename);




*/
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</body>
</html>