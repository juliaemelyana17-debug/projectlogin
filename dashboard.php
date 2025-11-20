<?php
session_start();

//cek apakah unser sudah login
if(!isset ($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
<body>
    <h2>selamat datang,<?php echo $_SESSION['username']; ?>!</h2>
    <?php
    echo  "<h2>selamat datang," . $_SESSION['username'] . "!</h2>";
    ?>
    <P>Role: <?php echo $_SESSION['role']; ?></P>
    <a href ="logout.php">Logout</a>
</body>
</html>