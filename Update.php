<?php

$conn = mysqli_connect('localhost', 'root', '', 'karan');

$id = $_GET['id'];

$q = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($conn, $q);

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update</h1>
    <form method="post" action="UpdateHandler.php">
        <div><input value="<?php echo $row['name'] ?>" type="text" name="name" placeholder="Name"></div>
        <div><input value="<?php echo $row['email'] ?>" type="text" name="email" placeholder="email"></div>
        <div><input value="<?php echo $row['id'] ?>" type="hidden" name="id" placeholder="email"></div>

        <div>
            <button>Submit</button>
        </div>
    </form>
</body>

</html>