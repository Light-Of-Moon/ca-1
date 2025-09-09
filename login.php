<?php

session_start();

if (isset($_POST['submit'])) {


    require_once 'database_connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['username'] = $username;
        header("Location: profile.php");

    }
    mysqli_close($conn);
}
?>
<html>
<body>
    <h2 style="text-align: center;">Login</h2>
    <form method="post" action="login.php" style="text-align: center;">

        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="Login">
        </div>

    </form>
    <div style="text-align: center;">
         No account? <button onclick='document.location="register.php"'>Register here
    </div>
</body>
</html>
