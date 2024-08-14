<?php
 include 'session_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registro</title>
</head>
<body>
    <header>
          <h1>Proyecto Dis. e Implem. de Sist. Computacionales</h1>
          <div class="header">
          <a href="login.php">Login</a>
        </div>
    </header>
    <main>
        <center>
        <form action="Registro.php" method="POST" class="formu">
            <div class="title">
                 <legend>
                    <strong>CREAR CUENTA DE USUARIO</strong>
                 </legend>
            </div>
            <br>
            <input type="text" name="nombre" placeholder="Nombre" class="input-50" required>
            <input type="text" name="apellido" placeholder="Apellido" class="input-50" required>
            <strong><p class="texto">Fecha de Nacimiento</p></strong>
            <input type="date" name="F_Nacim" class="input-100" required>
            <input type="mail" name="mail" placeholder="✉️Correo Electronico" class="input-100" required>
            <input type="number" name="telefono" placeholder="Telefono" class="input-100" required>
            <input type="text" name="usuario" placeholder="Nombre de usuario" class="input-50" required>
            <input type="password" name="contraseña" placeholder="🔒Contraseña" class="input-50" required>
			<center><input type="submit" value="Registrarse" name="Registrarse" class="button" required/></center>
        </form>
    </center>
    </main>
    <footer>

    </footer>
    
</body>
</html>