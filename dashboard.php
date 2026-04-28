<?php
// dashboard.php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Ferroviario</title>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { background: #020617; color: #f1f5f9; font-family: 'Urbanist', sans-serif; margin: 0; display: flex; }
        .sidebar { width: 260px; background: #0f172a; height: 100vh; padding: 40px 20px; border-right: 1px solid #1e293b; box-sizing: border-box; }
        .main-content { flex: 1; padding: 40px; height: 100vh; overflow-y: auto; }
        
        .nav-item { padding: 15px; color: #94a3b8; text-decoration: none; display: block; border-radius: 10px; margin-bottom: 5px; }
        .nav-item.active { background: rgba(16, 185, 129, 0.1); color: #10b981; }
        
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .card { background: #1e293b; padding: 25px; border-radius: 20px; border: 1px solid #334155; }
        .card h3 { color: #10b981; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; margin: 0; }
        .card p { font-size: 32px; font-weight: 700; margin: 15px 0 0 0; }
        
        .table-section { margin-top: 40px; background: #1e293b; border-radius: 20px; padding: 25px; border: 1px solid #334155; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { text-align: left; padding: 15px; color: #94a3b8; border-bottom: 1px solid #334155; font-size: 14px; }
        td { padding: 15px; border-bottom: 1px solid #334155; font-size: 15px; }
        
        .status { padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; }
        .online { background: rgba(16, 185, 129, 0.1); color: #10b981; }
        
        .btn-logout { background: #ef4444; color: white; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-size: 14px; font-weight: 700; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="color:white; margin-bottom: 40px;">FERRO<span>LOG</span></h2>
        <a href="#" class="nav-item active"><i class="fa fa-th-large"></i> Dashboard</a>
        <a href="#" class="nav-item"><i class="fa fa-train"></i> Trenes</a>
        <a href="#" class="nav-item"><i class="fa fa-route"></i> Rutas activas</a>
        <a href="#" class="nav-item"><i class="fa fa-users"></i> Personal</a>
    </div>
    
    <div class="main-content">
        <div class="header">
            <div>
                <h1 style="margin:0">Panel de Operaciones</h1>
                <p style="color:#94a3b8; margin:5px 0 0 0">Bienvenido de nuevo, <?php echo $_SESSION['usuario']; ?></p>
            </div>
            <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
        </div>
        
        <div class="stats-grid">
            <div class="card">
                <h3>Trenes en tránsito</h3>
                <p>14 Unidades</p>
            </div>
            <div class="card">
                <h3>Tonelaje Total</h3>
                <p>12,840 Ton</p>
            </div>
            <div class="card">
                <h3>Cumplimiento</h3>
                <p>94.2%</p>
            </div>
        </div>

        <div class="table-section">
            <h3 style="margin:0">Monitoreo de Estaciones</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID Estación</th>
                        <th>Ubicación</th>
                        <th>Último Reporte</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EST-001</td>
                        <td>Sector Norte - Aduana</td>
                        <td>Hace 5 min</td>
                        <td><span class="status online">OPERATIVO</span></td>
                    </tr>
                    <tr>
                        <td>EST-005</td>
                        <td>Puerto Central</td>
                        <td>Hace 12 min</td>
                        <td><span class="status online">OPERATIVO</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>