<?php
$conn = mysqli_connect("localhost", "root", "", "karan");


$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];



$q = "UPDATE users SET name = '$name',email='$email' WHERE id = $id";

$result = mysqli_query($conn, $q);
if ($result) {
    header('location:/karan');
}

?>