<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 

    if($_POST){
        print_r($_POST);
        $nombre=$_POST['nombre'];
        $imagen=$_FILES['archivo']['name'];
        $descripcion=$_POST['descripcion'];
        $imagen_temporal=$_FILES['archivo']['tmp_name'];

        move_uploaded_file($imagen_temporal, "imagenes/".$imagen);

        $objConexion=new conexion();
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion')";
        $objConexion->ejecutar($sql);

    }
    if($_GET){
        //DELETE FROM `proyectos` WHERE `proyectos`.`id` = 9
        $objConexion=new conexion();
        $id=$_GET['borrar'];
        $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id`=".$id;
        $objConexion->ejecutar($sql);
    }


    //INSTANCIAR LOS DATOS Y SE EJECUTA CON EL METODO CONSULTAR
    $objConexion=new conexion();
    $proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");
   // print_r($proyectos);

?>
   
   <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Datos del proyecto</div>
                        <div class="card-body">
                            <form action="portafolio.php" method="post" enctype="multipart/form-data">
                                Nombre del proyecto: <input class="form-control" type="text" name="nombre" id=""><br/>
                                Imagen del proyecto: <input class="form-control" type="file" name="archivo" id=""><br/>
                                Descripcion: <textarea class="form-control" name="descripcion" id="" rows="3" ></textarea><br>
                                <input class="btn btn-success" type="submit" value="Enviar proyecto">
                            </form>
                        </div>
                 </div>                
            </div>

        <div class="col-md-6">       
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th></th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($proyectos as $proyecto){  ?>
                    <tr>
                        <td><?php echo $proyecto['id']; ?></td>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td><?php echo $proyecto['imagen']; ?></td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td> <a name="" id="" class="btn btn-primary" href="?borrar=<?php echo $proyecto['id']; ?>" role="button">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    

 
    
   

 <?php include("pie.php"); ?>