
<?php include("include/header.php") ?>
<?php include("db.php")?>
<!-- aqui va el llenado del formulario-->

<div class="padre">
    <form action="save.php" method="POST">
        <div class="hijo">
          <h3>INGRESE DATOS </h3>
        <p><input type="text" name="usuario" placeholder="USUARIO" autofocus><br> </p>
        <p><input type="text" name="correo" placeholder="CORREO"> </p>
        <p><input type="text" name="clave" placeholder="CLAVE"></p>
    

            <div>
            <input type="submit" name="guardar" value="guardar datos">
            </div>

        </div>
        
    </form>
    
<!--para mostrar una tabla-->

<div class="hijo">
        <table class="">
            <thead>
                <tr>
                    <th>USUARIO</th>
                    <th>CORREO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            
            <tbody>
 
                <?php 
                    $query="SELECT* FROM usuarios";
                    $result_consulta=mysqli_query($conn, $query);

                    while($row=mysqli_fetch_array($result_consulta)) {?>
                        
                        <tr>
                            <td><?php echo $row['usuario']?></td>
                            <td><?php echo $row['correo']?></td>
                            
                            <td>
                            <a style="text-decoration:underline" href="edit.php?id=<?php echo $row['id']?>">EDITAR</a>
                            <a style="text-decoration:underline" href="delete.php?id=<?php echo $row['id']?>">ELIMINAR</a>
                            </td>
                        </tr>
                    <?php }?>

            </tbody>
        </table>

    </div>


</div>




<?php include("include/footer.php") ?>