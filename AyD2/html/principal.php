<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="p.css">
    <link rel="stylesheet" href="login.php">
</head>
<body>
  <div class="login-container">
    <h1>INICIO DE SESIÓN</h1>
    <form>
      <form method="post"></form>
      <input type="text" placeholder="Nombre de usuario" required>
      <input type="password" placeholder="Contraseña" required>
      <button type="submit" id="login-button">Iniciar Sesión</button>
    </form>
    <?php include('principal_back.php'); ?>
    <script>
      document.getElementById('login-button').addEventListener('click', function() {
        window.location.href = 'menu.php';
      });
    </script>
  </div>
</body>
</html>
