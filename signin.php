<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <h2 class="title">Sign In</h2>

        <form action="homepage.php" method="post">

        <label>Username</label>
            <input
                class="textfield"
                type="text"
                name="username"
                id="myUsername"
                required
                >

        <label>Password</label>
            <input
                class="textfield"
                type="password"
                name="myPassword"
                id="myPassword"
                required
                >

            <label for="Registration">
                <a href="index.php">Create New</a>.
            </label>


            <input type="submit" value="Sign In" class= "button" >

        </form>
    </div>
</body>
</html>