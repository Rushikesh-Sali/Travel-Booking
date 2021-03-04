<?php
$insert = false;
if(isset($_POST['submit'])){
$server  = "localhost";
$username = "root";
$password = "";




$con = mysqli_connect($server,$username,$password);


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
// $desc = $_POST['desc'];
if(!$con)
{
    die("COnnection failed due to ".mysqli_connect_error());
}
$sql = "INSERT INTO `trip`.`passenger`( `Name`, `Email`, `Phone`, `gender`, `Department`)
               VALUES ( '$name', '$email', '$phone', '$gender', '$department' );";

if($con->query($sql)== true){
    // echo"successfully inserted";
    $insert = true;
}
else{
    echo "Error: $sql<br> $con->error";
}


$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <h1>College trip registration form</h1>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="email" id="email" placeholder="Enter your email id" required>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your nagender">
            <input type="text" name="department" id="namdepartment" placeholder="Enter your ndepartment" required>
            <!-- <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Write other information you want to mention"></textarea> -->
            <span>
            <button type="submit">SUBMIT</button>
            <button><a href="passenger.php">Passenger List</a></button>
            </span>
        </form>
    </div>
    <script src="index.js"></script>
    
</body>

