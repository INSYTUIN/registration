<!DOCTYPE html>
 <?php
$name = $_POST["fullname"];
$number = $_POST["number"];
$username = $_POST["username"];
$email = $_POST["myEmail"];
$password = $_POST["myPassword"];
$birthdate = $_POST["birthdate"];
$gender = $_POST["gender"];
$status = $_POST["status"];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h4>Hello <?= $name ?>
        </h4>

        <h4>Age: <?= $number ?> years old
        </h4>

        <h4>Username: <?= $username ?>
        </h4>

        <h4>Email: <?= $email ?>
        </h4>

        <h4>Password: <?= $password ?>
        </h4>

        <h4>Birthdate: <?= $birthdate ?>
        </h4>

        <h4>Gender: <?= $gender ?>
        </h4>

        <h4>Status: <?= $status ?>
        </h4>

        <p>Registration Successful!
        </p>

        <p>Thank you for Registering.
        </p>

        <input type="button" value="Continue" class="button" onclick="window.location.href='signin.php'">

    </div>
</html>