<?php
  include("Conexion.php");
  if(
  strlen($_POST["nombre"])>=1 &&
  strlen($_POST["apellido"])>=1 &&
  strlen($_POST["contraseña"])>=1 &&
  strlen($_POST["mail"])>=1 &&
  strlen($_POST["usuario"])>=1 &&
  strlen($_POST["telefono"])>=1 &&
  strlen($_POST["F_Nacim"])>=1
){
    $name=trim($_POST['nombre']);
    $lastname=trim($_POST['apellido']);
    $date=trim($_POST['F_Nacim']);
    $email=trim($_POST['mail']);
    $phone=trim($_POST['telefono']);
    $pass=trim($_POST['contraseña']);
    $user=trim($_POST['usuario']);
    $permissions = "user";

    $query = mysqli_query($con, "SELECT * FROM usuarios WHERE username='".$user."' and password = '".$pass."' and email ='".$email."'");
    $nr = mysqli_num_rows($query);
    if ($nr==0) {    
    $registro="INSERT INTO usuarios(nombre, apellido, f_nacim, email, telefono, username, password, permissions) VALUES('$name','$lastname','$date','$email', '$phone', '$user' ,'$pass', '$permissions')";
    $resultado = mysqli_query($con, $registro); 
    if($resultado){
        echo "tu registro se a completado";

    } else{
         echo "Ocurrio un error";
    } 
}else{
        echo "Llene todos los campos";
    }
}
  if ($nr>=1) {
    echo "Cuenta ya existente";
  }


?>