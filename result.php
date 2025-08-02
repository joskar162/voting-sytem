<?php
include "connection.php";
$results = $conn->query("SELECT * FROM candidates ORDER BY votes DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Election Results</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            font-family: Arial;
            color: white;
            text-align: center;
        }
        table{
            width: 60%;
            margin: 50px auto;
            background: rgba(0,0,0,0.7);
            border-radius: 10px;
            padding: 20px;
        }
        td,th{
            padding: 15px;
            border-bottom: 1px solid #fff;
        }
    </style>
</head>
<body>
    <h1>Election Results</h1>
    <table>
        <tr>
            <th>Candidate</th>
            <th>Position</th>
            <th>Votes</th>
        </tr>
        <?php while($row=$results->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['votes']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
