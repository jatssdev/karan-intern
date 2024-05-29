<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/karan/register.php">register</a>

    <table border="1">
        <tr>
            <th colspan="4">Users Table</th>
        </tr>
        <tr>
            <th>ID</th> 
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
        </tr>

        <?php

        $conn = mysqli_connect("localhost", "root", "", "karan");

        $q = "SELECT * FROM users";


        $res = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_assoc($res)) {


            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>


        <?php } ?>

    </table>
</body>

</html>