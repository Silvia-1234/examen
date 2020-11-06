<?php 
include("db.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
$query="DELETE FROM usuarios WHERE id=$id";
$result = mysqli_query($conn, $query);
if(!$result){
    die("consulta fallida");
}
header("location: usuarios.php");
}

?>