<?php include("include/header.php") ?>
<?php include("db.php")?>
<!-- aqui va el llenado del formulario-->

<div class="padre">
    <form action="save_rol.php" method="POST">
        <div class="hijo">
          <h3>INGRESE UN ROL </h3>
        <p><input type="text" name="descripcion" placeholder="INGRESAR UN ROL" autofocus><br> </p>
       
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
                    <th>ROL</th>
                    <th>actions</th>
                    
                </tr>
            </thead>
            
            <tbody>
 
                <?php 
                    $query="SELECT* FROM roles";
                    $result_consulta=mysqli_query($conn, $query);

                    while($row=mysqli_fetch_array($result_consulta)) {?>
                        
                        <tr>
                            <td><?php echo $row['descripcion']?></td>
          
                            
                            <td>
                            <a style="text-decoration:underline" href="edit_rol.php?id=<?php echo $row['id']?>">EDITAR</a>
                            <a style="text-decoration:underline" href="delete_rol.php?id=<?php echo $row['id']?>">ELIMINAR</a>
                            </td>
                        </tr>
                    <?php }?>

            </tbody>
        </table>

    </div>


</div>




<?php include("include/footer.php") ?>