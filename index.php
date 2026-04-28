<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Ferroviario | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0; padding: 0; font-family: 'Urbanist', sans-serif;
            background: #020617;
            height: 100vh; display: flex; align-items: center; justify-content: center;
            background-image: radial-gradient(circle at 50% 50%, #0f172a 0%, #020617 100%);
        }
        .login-box {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(12px);
            padding: 40px; border-radius: 24px;
            width: 380px; text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        h2 { color: #fff; margin-bottom: 8px; font-size: 28px; }
        h2 span { color: #10b981; }
        p { color: #94a3b8; margin-bottom: 30px; font-size: 14px; }
        input {
            width: 100%; padding: 14px; margin-bottom: 20px;
            background: rgba(15, 23, 42, 0.6); border: 1px solid #334155;
            border-radius: 12px; color: white; box-sizing: border-box;
            outline: none; transition: 0.3s;
        }
        input:focus { border-color: #10b981; box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2); }
        button {
            width: 100%; padding: 14px; background: #10b981;
            border: none; border-radius: 12px; color: #020617;
            font-weight: 700; cursor: pointer; transition: 0.3s; font-size: 16px;
        }
        button:hover { background: #34d399; transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>PORTAL <span>FERRO</span></h2>
        <p>Introduce tus credenciales de operador</p>
        <form action="validar.php" method="POST">
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">INICIAR SESIÓN</button>
        </form>
    </div>
</body>
</html>