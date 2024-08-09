<?php 
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to database failed" . mysqli_connect_error());
}
// echo "Success connecting to the database."
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

if($con->query($sql) == true){
    // echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Chitransh Travels</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img class="bg" src="Shanti_Stupa_at_Rajgir_(cropped).jpg" alt="image">
    <div class="container">
        <h1>Welcome to Bihar - Rajgir Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in trip.</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your contact">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
<script src="index.js"></script>    
</body>
</html>