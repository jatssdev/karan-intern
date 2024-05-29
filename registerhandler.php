<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = mysqli_connect('localhost', 'root', '', 'karan');

$q = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";


$res = mysqli_query($conn, $q);

if ($res) {
    header('location:/karan');

} else {
    echo 'Error : user registration failed!';
}

?>