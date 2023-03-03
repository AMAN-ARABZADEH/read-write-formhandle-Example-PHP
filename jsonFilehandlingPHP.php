<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>JSON filehandling</title>
</head>
<body>

<form action="" method="post">
 <label for="name">Name:</label>
 <input type="text" name="name">
 <label for="text">Message:</label>
 <br> <br> <br>
 <textarea name="text" id="text" cols="30" rows="10"></textarea>
 <input type="submit" value="Submit" name="submit">
</form>
 
</body>
</html>

<?php

// Delete
  if (isset($_POST["delete"])) {
    $file = fopen("textfil.txt", "r");
    $lines = array();
    while (!feof($file)) {
      $line1 =  fgets($file);
      $line2  = fgets($file);
      $line3 = fgets($file);
      $lines[] = $line1 . $line2 . $line3;
    }
    $index = $_POST["delete"];
    fclose($file);
    unset($lines[$index]);

    $file = fopen("textfil.txt", "w");
    foreach($lines as $line){
        fwrite($file, $line);
    }
    fclose($file);
  }

// Write to file
if (isset($_POST["submit"])) {
  if (isset($_POST["name"]) && isset($_POST["text"])) {
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["text"]);
    $date = date('Y-m-d H:i:s');
    $file = fopen("textfil.txt", "a");
    $data = $name . " : " . $message;

    fwrite($file, $name . PHP_EOL);
    fwrite($file, $message . PHP_EOL);
    fwrite($file, $date . PHP_EOL);
    fclose($file);
  }
}

$file = fopen("textfil.txt", "r");

// read from file

$line = 0;
while (!feof($file)) {
  $name = fgets($file);
  $message = fgets($file);
  $date = fgets($file);
  if ($name && $message && $date) {
    echo "Namn: " . $name . "<br>";
    echo "Meddelande: " . $message . "<br>";
    echo "Datum: " . $date . "<br>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='delete' value='$line'>";
    echo "<input type='submit'  value='Delete'>";
    echo "</form>";
  }
  $line++;
}

fclose($file);

?>



