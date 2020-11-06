<?php
include("db.php");
if(isset($_POST['guardar'])){
    $descripcion=$_POST['descripcion'];


    $query="INSERT INTO roles(descripcion) 
    VALUES('$descripcion')";
    $result =mysqli_query($conn, $query);
if(!$result){
    die("fallo la consulta");
}
header("location: roles.php");

}
?>