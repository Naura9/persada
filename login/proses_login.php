<?php
session_start();
include('../koneksi.php');

if(isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    $result = mysqli_query($kon, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username; 
        $_SESSION["login"] = true; 

        if(isset($_POST['remember']) && $_POST['remember'] == 'on') {
            setcookie('username', $username, time() + 86400, "/");
        } 

        header("Location: ../index.php"); 
        exit(); 
    } else {
        $error = "Username atau password salah.";
        include('login.php');
    }
}
?>