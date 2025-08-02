<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System - Home</title>
    <style>
        body{
            background-image: url('images/background.jpg');
            background-size: cover;
            font-family: Arial;
            color: white;
            text-align: center;
        }
        .home{
            background: rgba(0,0,0,0.7);
            width: 400px;
            margin: 150px auto;
            padding: 30px;
            border-radius: 10px;
        }
        a{
            display: block;
            background: green;
            color: white;
            padding: 15px;
            margin: 15px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover{
            background: darkgreen;
        }
        h1{
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="home">
        <h1>Online Voting System</h1>
        <a href="voter_login.php">Voter Login</a>
        <a href="admin_login.php">Admin Login</a>
        <a href="result.php">View Results</a>
    </div>
</body>
</html>
