

<?php
include("db.php");

if(isset($_GET['id'])){
$id=$_GET['id'];
$query="SELECT * FROM usuarios WHERE id=$id";
$result=mysqli_query($conn, $query);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    $usuario=$row['usuario'];
    $correo=$row['correo'];
    $clave=$row['clave'];
}
}
if(isset($_POST['actualizar'])){
    $id=$_GET['id'];
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $query="UPDATE usuarios set usuario='$usuario', 
    correo='$correo', clave='$clave' WHERE id=$id";
    mysqli_query($conn,$query);
    header("location: usuarios.php");
    
}
?>




<?php include("include/header.php")?>

<div class="padre">
    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
        <div class="hijo">
        <input type="text" name="usuario" value="<?php echo $usuario?>" placeholder="actualizar usuario"><br>
        <input type="text" name="correo" value="<?php echo $correo?>" placeholder="actualizar correo"><br>
        <input type="text" name="clave" value="<?php echo $clave?>" placeholder="actualizar clave"><br>
        <button  name="actualizar">
        actualizar datos
        </button>
        </div>

        
    </form>

</div>

<?php include("include/footer.php")?>
