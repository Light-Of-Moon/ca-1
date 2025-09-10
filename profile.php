<?php
session_start();

require_once 'database_connection.php';

if (isset($_POST['edit'])) {
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];
    $old_username = $_SESSION['username'];

    $sql = "UPDATE users SET username='$new_username', password='$new_password' WHERE username='$old_username'";
    mysqli_query($conn, $sql);

    $_SESSION['username'] = $new_username;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<html>
<body>
    <h2 style="text-align: center;">Profile</h2>
    <form method="post" style="text-align: center;">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
        <br><br>
        <label>Password:</label>
        <input type="text" name="password" value="">
        <br><br>
        <input type="submit" name="edit" value="Edit">
    </form>
    <form method="post" style="margin-top:10px;">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>