<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    this is my first php website
    <br>
  <?php 
    echo "Hello This is Printed";
    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;
//   operators in PHP
// Arithmetic Operators
echo "<br>";
echo "The value of variable1 + variable2 is ";
echo $variable1 + $variable2;
echo "<br>";
echo "The value of variable1 - variable2 is ";
echo $variable1 - $variable2;
echo "<br>";
echo "The value of variable1 * variable2 is ";
echo $variable1 * $variable2;
echo "<br>";
echo "The value of variable1 / variable2 is ";
echo $variable1 / $variable2;
echo "<br>";

// Assignment Operators
$newVar = $variable1;
// $newVar += 1;
// $newVar -= 1;
// $newVar *= 2;
$newVar /= 2;
echo "The value of newVar is ";
echo $newVar;
echo "<br>";
// Comparison Operators
echo "The value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";
echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo "<br>";
echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";
echo "The value of 1<=4 is ";
echo var_dump(1<=4);
echo "<br>";
// Increment/Decrement Operators
// echo $variable1++;
// echo $variable1--;
// echo --$variable1;
echo ++$variable1;
echo "<br>";
echo $variable1;
echo "<br>";
// Logical Operators
// and (&&)
// or (||)
// xor
// !
$myVar = (true and true);
echo var_dump($myVar);
echo "<br>";
$myVar = (true and false);
echo var_dump($myVar);
echo "<br>";
$myVar = (false and true);
echo var_dump($myVar);
echo "<br>";
$myVar = (false and false);
echo var_dump($myVar);
echo "<br>";
$myVar = (true xor false);
echo var_dump($myVar);
echo "<br>";



    ?>
</dive>
</body>
</html>