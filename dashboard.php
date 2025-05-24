<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Minimarket</title>
</head>
<body>
  <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h1>
  <a href="logout.php">Cerrar sesión</a>
</body>
</html>