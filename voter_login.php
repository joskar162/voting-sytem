<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){
    $vid = $_POST['voter_id'];
    $pass = $_POST['password'];

    // Check if voter exists
    $sql = "SELECT * FROM voters WHERE voter_id='$vid' AND password='$pass'";
    $res = $conn->query($sql);

    if($res->num_rows > 0){
        // Get total positions
        $pos_res = $conn->query("SELECT DISTINCT position FROM candidates");
        $total_positions = $pos_res->num_rows;

        // Get how many positions this voter has voted for
        $vote_check = $conn->query("SELECT COUNT(DISTINCT position) AS voted_positions FROM votes WHERE voter_id='$vid'");
        $voted = $vote_check->fetch_assoc();

        if($voted['voted_positions'] >= $total_positions){
            $msg = "You have already voted for all positions. You cannot login again.";
        } else {
            $_SESSION['voter_id'] = $vid;
            header("Location: vote.php");
        }
    } else {
        $msg = "Invalid Voter ID or Password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Voter Login</title>
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
            border: none;
        }
        button{
            padding: 10px 20px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a{
            color: lightblue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2>Voter Login</h2>
        <form method="POST">
            <input type="text" name="voter_id" placeholder="Voter ID" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button><br><br>
            <a href="index.php">Back to Home</a>
            <p style="color:red;"><?php if(isset($msg)) echo $msg; ?></p>
        </form>
    </div>
</body>
</html>
