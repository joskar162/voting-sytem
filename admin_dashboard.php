<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            color: white;
            text-align: center;
            font-family: Arial;
        }
        .menu{
            margin-top: 100px;
        }
        a{
            display: block;
            background: rgba(0,0,0,0.7);
            margin: 20px auto;
            width: 250px;
            padding: 15px;
            text-decoration: none;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <div class="menu">
        <a href="register_voter.php">Register Voter</a>
        <a href="register_candidate.php">Register Candidate</a>
        <a href="result.php">View Results</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
