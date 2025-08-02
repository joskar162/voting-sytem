<?php
$conn = new mysqli("localhost", "root", "", "evoting");
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>
