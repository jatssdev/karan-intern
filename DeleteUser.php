<?php

$conn = mysqli_connect('localhost', 'root', '', 'karan');
$id = $_GET['id'];

$q = "DELETE FROM users WHERE id=$id";

$result = mysqli_query($conn, $q);
if ($result) {
    header('location:/karan');
}


?>