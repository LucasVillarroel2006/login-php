<?php
 include 'session_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
          <div class="header">
          <a href="index.php">Registrarse</a>
        </div>
    </header>
    <main>
        <center>
        <form method="POST" class="formu">
            <div class="title">
                 <legend>
                    <strong>USUARIO </strong>
                 </legend>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="text" name="usuario" placeholder="Nombre de usuario" class="input-50">
            <input type="password" name="contra" placeholder="🔒Contraseña" class="input-50">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<center><input type="submit"  name="loggin" class="button"/></center>
        </form>
    </center>
    </main>
    <footer>

    </footer>
    
</body>
</html>