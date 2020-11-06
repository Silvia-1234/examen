<?php
include("db.php");
if(isset($_POST['guardar'])){
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $clave=md5($_POST['clave']);

    $query="INSERT INTO usuarios(usuario, correo, clave) 
    VALUES('$usuario', '$correo', '$clave')";
    $result =mysqli_query($conn, $query);
if(!$result){
    die("fallo la consulta");
}
header("location: usuarios.php");

}
?>