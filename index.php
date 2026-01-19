<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$insert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $con = mysqli_connect("localhost", "root", "", "trip");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $desc   = $_POST['desc'];

    $sql = "INSERT INTO trip (name, age, gender, email, phone, other)
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";

    if (mysqli_query($con, $sql)) {
        $insert = true;
    } else {
        die("SQL ERROR: " . mysqli_error($con));
    }

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Come to travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bj.jpg" alt="Lahore Uni">
   <div class="container">
    
    <form method="post" action="index.php">
    <h1>Well Come to Lahore University Murree Trip Form</h1>

    <p>Please enter your details and submit this form to confirm participation in the trip.</p>
    
   <?php 
   if($insert == true){
    echo "<p class='submitSmg'>Thans for submitting you form.</p>";
   }
    ?>
<form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="number" name="age" placeholder="Enter Your Age" required>
    <input type="text" name="gender" placeholder="Enter Your Gender" required>
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <input type="text" name="phone" placeholder="Enter Your Phone Number" required>
    <textarea name="desc" placeholder="Enter other information"></textarea>
    <button class = "btn" type="submit">Submit</button>
</form>





   </div> 
<script src="index.js"></script>


</body>
</html>