

<?php include("include/header.php") ?>
<?php include("db.php")?>
<!-- aqui va el llenado del formulario-->

<div class="padre">
    
<div class="hijo">
        <table class="">
            <thead>
                <tr>
                    <th>USUARIO</th>
                    <th>PERMISOS</th>
                    <th>OPCIONES DE PERMISOS</th>
                </tr>
            </thead>
            
            <tbody>
 
                <?php 
                    $query="SELECT* FROM usuarios";
                    $result_consulta=mysqli_query($conn, $query);

                    while($row=mysqli_fetch_array($result_consulta)) {?>
                        
                        <tr>
                            <td><?php echo $row['usuario']?></td>
                            <td></td>
                            
                            <td>
                            <a style="text-decoration:underline" href="permisos.php?id=<?php echo $row['id']?>">añadir </a>
                            <a style="text-decoration:underline" href="permisos.php?id=<?php echo $row['id']?>">eliminar </a>
                            </td>
                        </tr>
                    <?php }?>

            </tbody>
        </table>

    </div>


</div>




<?php include("include/footer.php") ?>