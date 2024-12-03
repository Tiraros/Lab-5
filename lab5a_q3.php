<!DOCTYPE html>
<html lang="en">
<head>
   <title>Lab 5a Q3</title>
</head>
<body>
   <?php
   function calculateArea($width, $height) {
      return $width * $height;
   }

   $width = 7;
   $height = 3;
   $area = calculateArea($width, $height);

   echo "The area of a rectangle with a width of $width and a height of $height is $area.";
   ?>
</body>
</html>