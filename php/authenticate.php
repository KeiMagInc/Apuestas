<?php
session_start();

// Recibir datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validar credenciales
if ($username === 'admin' && $password === 'admin') {
    $_SESSION['username'] = $username; // Crear la sesión
    header("Location: ../AUCTIONEER/AUCTIONEER_LOTS_BOARD.html"); // Redirigir al dashboard
    exit();
} else {
    echo "<script>alert('Invalid username or password'); window.location.href='../index.html';</script>";
    exit();
}
?>