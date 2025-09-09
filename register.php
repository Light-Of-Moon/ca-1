<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'database_connection.php';;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
      
        header("Location: login.php");
    
    }
    mysqli_close($conn);
}
?>

<html>
<body>
    <h2 style="text-align: center;">Create an Account</h2>
    <form action="register.php" method="post" style="text-align: center;">
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
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
    <div style="text-align: center;">
        Already have an account? <button onclick='document.location="login.php"'>Login here</button>
    </div>
</body>
</html>