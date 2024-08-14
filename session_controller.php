<?php
 require 'Conexion.php';

 session_start();
 if(isset($_POST['loggin'])){
    $user = $_POST['usuario'];
    $pass = $_POST['contra'];
    $query = mysqli_query($con, "SELECT * FROM usuarios WHERE username='".$user."' and password = '".$pass."'");
    $nr = mysqli_num_rows($query);
    if($nr > 0){
        $mostrar = mysqli_fetch_array($query);
        $permisos = $mostrar['permissions'];
        $username = $mostrar['username'];
        $email = $mostrar['email'];
        if($permisos == "admin"){
            $_SESSION['user'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['islogged'] = true;
            header('Location: http://localhost/php-login/adminview.php', true, 303);
        }
        if($permisos == "user"){
            $_SESSION['user'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['islogged'] = true;
            header('Location: http://localhost/php-login/userview.php', true, 303);
        }
    }
    if($nr = 0){
        $_SESSION['user'] = "";
        $_SESSION['email'] = "";
        $_SESSION['islogged'] = false;
    }
 }
 if(isset($_SESSION['islogged'])){
    if($_SESSION['islogged'] === true){
        echo "Bienvenido ". $_SESSION['user'];
        echo "<a href='logout.php'>Log out</a>";
     }
}

 var_dump($_SESSION);
?>