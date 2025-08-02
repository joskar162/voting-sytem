<?php
session_start();
include "connection.php";
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $vid = $_POST['voter_id'];
    $pass = $_POST['password'];
    $conn->query("INSERT INTO voters(name,voter_id,password) VALUES('$name','$vid','$pass')");
    $msg = "Voter Registered!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Voter</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            font-family: Arial;
            color: white;
            text-align: center;
        }
        form{
            background: rgba(0,0,0,0.7);
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
        }
        input{
            padding: 10px;
            width: 90%;
            margin: 10px;
            border-radius: 5px;
        }
        button{
            padding: 10px 20px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Register Voter</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Voter Name" required><br>
        <input type="text" name="voter_id" placeholder="Voter ID" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Register</button><br>
        <p><?php if(isset($msg)) echo $msg; ?></p>
    </form>
</body>
</html>
