<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<form action="" method="post">
 <label for="name">Name:</label>
 <input type="text" name="name" id="name">
 <label for="message">Massage:</label>
 <textarea  name="message" id="message" cols="30" rows="10"></textarea>
<input type="submit" name="submit" value="Save Data">
</form>

</body>
</html>



<?php

/*

The fopen() function is also used to create a file.
The fwrite() function is used to write to a file.
we closed the file using the fclose() function.


one easy wy to write to file is using 
file_put_contents(filename);

Mode	            Meaning 


r	               reading only

r+              	reading and writing 

w                open for writing only


w+               open for reading and writing

a	               writing in append mode

a+	               reading and writing in append mode






*/
// retrieve user input from textarea and name
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    // open the file for writing, creating it if it does not exist
    $file = fopen("file.txt", "a");
    
    // write the name and textarea data to the file
    fwrite($file, $name . " : " . $message . "\n");
    
    // close the file
    fclose($file);
}
?>
