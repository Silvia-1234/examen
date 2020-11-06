<?php
include("db.php");

if(isset($_GET['id'])){
$id=$_GET['id'];
$query="SELECT * FROM roles WHERE id=$id";
$result=mysqli_query($conn, $query);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    $descripcion=$row['descripcion'];
   
}
}
if(isset($_POST['actualizar'])){
    $id=$_GET['id'];
    $descripcion=$_POST['descripcion'];
    
    $query="UPDATE roles set descripcion='$descripcion' WHERE id=$id";
    mysqli_query($conn,$query);
    header("location: roles.php");
    
}
?>




<?php include("include/header.php")?>

<div class="padre">
    <form action="edit_rol.php?id=<?php echo $_GET['id'];?>" method="POST">
        <div class="hijo">
        <input type="text" name="descripcion" value="<?php echo $descripcion?>" placeholder="actualizar descripcion de rol"><br>
        
        <button  name="actualizar">
        actualizar rol
        </button>
        </div>

        
    </form>

</div>

<?php include("include/footer.php")?>
