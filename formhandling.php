<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>


 input[name="gender"]{
  margin-left: 20px;
 }
 

 </style>
 <title>Document</title>
</head>
<body>
 <div class="form">
    <form method="POST" action="">
         <label for="name">Name:</label>
         <input type="text" name="name" placeholder="Name">
         <label for="Email">E-mail:</label>
         <input type="email" name="email" placeholder="E-Mail">
         <label for="age">Age:</label>
         <input type="number" name="age" placeholder="Age">
         <label for="Male">Male</label>
         <input type="radio" name="gender" value="Male"> 
         <label for=" Female"> Female</label>
         <input type="radio" name="gender" value="Female">
         <label for=" Others"> Others</label>
         <input type="radio" name="gender" value="Others">
         <input type="submit" name="submit" value="Submit">
    </form>

 </div>
</body>
</html>


<?php

if(isset($_POST["submit"])){
 // Simple form handling example 
// https://www.w3schools.com/php/php_file_upload.asp

// I use regex  for checking in put is valid or not
echo '<div class"info"
 style="background-color: lightblue; 
 width: 50%; 
 margin-top: 5%;
 padding: 20px;
 ">';
if (isset($_POST["name"]) && !empty($_POST["name"])) {
$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z ]*$/",$name))
echo "<br>Name: Only letters and whitespace allowed";
else
echo "<br>Name:   ".$_POST["name"]."";
}
if (isset($_POST["email"]) && !empty($_POST["email"])) {
echo "<br>E-Mail:  ".$_POST["email"]."";
}
if (isset($_POST["age"]) &&!empty($_POST["age"])) {
 echo "<br>Age:  ".$_POST["age"]."";
}
if (isset($_POST["gender"]) && !empty($_POST["gender"])) {
echo "<br>Gender:  ".$_POST["gender"];
}
echo '</div';
}
?>

