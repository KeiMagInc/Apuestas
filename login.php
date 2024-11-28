<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulación de validación de usuario
    if ($username === "admin" && $password === "1234") {
        $_SESSION['username'] = $username;
        setcookie("last_login", date("Y-m-d H:i:s"), time() + 3600); // Cookie de última sesión
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Credenciales inválidas'); window.location.href = 'index.html';</script>";
    }
}
?>
