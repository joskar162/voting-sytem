<?php
session_start();
include "connection.php";
if(!isset($_SESSION['voter_id'])){
    header("Location: voter_login.php");
}
$vid = $_SESSION['voter_id'];

if(isset($_POST['submit_vote'])){
    foreach($_POST['position'] as $position => $candidate_id){
        // Check if already voted for this position
        $check = $conn->query("SELECT * FROM votes WHERE voter_id='$vid' AND position='$position'");
        if($check->num_rows == 0){
            $conn->query("INSERT INTO votes(voter_id,position,candidate_id) VALUES('$vid','$position','$candidate_id')");
            $conn->query("UPDATE candidates SET votes=votes+1 WHERE id='$candidate_id'");
        }
    }
    $msg = "Your votes have been submitted successfully!";
}
$candidates = $conn->query("SELECT * FROM candidates ORDER BY position");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            font-family: Arial;
            color: white;
            text-align: center;
        }
        table{
            width: 70%;
            margin: 30px auto;
            background: rgba(0,0,0,0.7);
            border-radius: 10px;
            padding: 20px;
            color: white;
        }
        td, th{
            padding: 10px;
        }
        button{
            padding: 10px 20px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Cast Your Vote</h2>
    <?php if(isset($msg)) echo "<p style='color:lightgreen;'>$msg</p>"; ?>

    <form method="POST">
        <table border="1">
            <tr>
                <th>Candidate Name</th>
                <th>Position</th>
                <th>Select</th>
            </tr>
            <?php
            $last_position = '';
            while($row = $candidates->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['position']."</td>";
                echo "<td><input type='radio' name='position[".$row['position']."]' value='".$row['id']."' required></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button type="submit" name="submit_vote">Submit Votes</button>
    </form>
    <a href="logout.php" style="color:white;">Logout</a>
</body>
</html>
