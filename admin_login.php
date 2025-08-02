<?php
session_start();
include "connection.php";
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $_SESSION['admin'] = $user;
        header("Location: admin_dashboard.php");
    } else {
        $msg = "Invalid Admin Login!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            font-family: Arial;
            color: white;
        }
        .login{
            background: rgba(0,0,0,0.7);
            width: 300px;
            padding: 20px;
            margin: 150px auto;
            border-radius: 10px;
            text-align: center;
        }
        input{
            padding: 10px;
            width: 90%;
            margin: 10px;
            border-radius: 5px;
        }
        button{
            padding: 10px 20px;
            background: darkblue;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2>Admin Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button>
            <p style="color:red;"><?php if(isset($msg)) echo $msg; ?></p>
        </form>
    </div>
</body>
</html>
