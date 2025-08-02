<?php
session_start();
include "connection.php";
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $conn->query("INSERT INTO candidates(name,position,votes) VALUES('$name','$position',0)");
    $msg = "Candidate Registered!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Candidate</title>
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
            background: orange;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Register Candidate</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Candidate Name" required><br>
        <input type="text" name="position" placeholder="Position" required><br>
        <button type="submit" name="register">Register</button><br>
        <p><?php if(isset($msg)) echo $msg; ?></p>
    </form>
</body>
</html>
