<?php
// session_start();
// if (!isset($_SESSION['usuario'])) {
//     header('Location: login.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Minimarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: #fff;
            padding: 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .dashboard-content {
            padding: 20px;
        }
        .card-icon {
            font-size: 2rem;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h4 class="text-white">Minimarket</h4>
        <a href="#"><i class="bi bi-house-door"></i> Inicio</a>
        <a href="#"><i class="bi bi-cart4"></i> Ventas</a>
        <a href="#"><i class="bi bi-box-seam"></i> Productos</a>
        <a href="#"><i class="bi bi-layers"></i> Inventario</a>
        <a href="#"><i class="bi bi-bar-chart-line"></i> Reportes</a>
        <a href="#"><i class="bi bi-person"></i> Usuarios</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</a>
    </div>

    <!-- Content -->
    <div class="flex-grow-1">
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light px-4">
            <span class="navbar-brand mb-0 h1">Panel de Control</span>
            <span>Bienvenido, Usuario</span>
        </nav>

        <!-- Dashboard content -->
        <div class="dashboard-content container-fluid">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Ventas Hoy</h6>
                                <h4>S/ 420.00</h4>
                            </div>
                            <i class="bi bi-cash-stack card-icon text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Productos</h6>
                                <h4>125</h4>
                            </div>
                            <i class="bi bi-box-seam card-icon text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Inventario Bajo</h6>
                                <h4>8</h4>
                            </div>
                            <i class="bi bi-exclamation-circle card-icon text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Usuarios</h6>
                                <h4>3</h4>
                            </div>
                            <i class="bi bi-people card-icon text-info"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Puedes agregar más secciones aquí -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h1>
  <a href="logout.php">Cerrar sesión</a>
</body>
</html>