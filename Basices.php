<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    .{
        margin: 0;
        padding: 0;
        box-sizing: bored-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(237, 206, 206);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class= "container">
    <h1>Lets learn about PHP</h1>
    <p>Your party status is here:</p>
    <?php
$age = 34;
if ($age>18){echo "You can go to the party";}
else {echo "You can not go to the Party";}

$languages = array("Java","C++","PHP","JS","HTML");
echo $languages[0];
echo count ($languages);

// Loops in PHP
$a = 0;
while ($a <= 10) {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;}
// Iterating arrays in PHP using while LOOP
 $a = 0;
while ($a < count($languages)) {
    echo "<br>The value of a is: ";
    echo $languages[$a];
    $a++;   
}
// Do while LOOP
$a = 200;
do {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;} while($a <= 10);
// For Loop
for ($a=0; $a < 10; $a++) { 
    echo "<br>The value of a for a for loop is: ";
    echo $a;
}
// foor each loop
foreach ($languages as $value) {
    echo "<br> The value from for each is: ";
    echo $value;
}
// craet a function
function print_number($number){
    echo "<br> Your number is: ";
    echo $number;
}
print_number(45);
print_number(69);
print_number(98);



    ?>
    </div>

</body>
</html>