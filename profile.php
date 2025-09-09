<?php
session_start();

if (isset($_POST['edit'])) {
    $_SESSION['username'] = $_POST['username'];
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
        <input type="submit" name="edit" value="Edit">
    </form>
    <form method="post" style="margin-top:10px;">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>