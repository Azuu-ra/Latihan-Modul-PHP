<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "123") {
        header("Location: admin.php");
        exit();
    } else {
        $pesan = "Username atau password salah!";
    }
}
?>

<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
if ($pesan != "") {
    echo "<p style='color:red;'>$pesan</p>";
}
?>
