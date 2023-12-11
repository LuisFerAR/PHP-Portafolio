<?php include("cabecera.php"); ?>
   <br>
    <div class="card">
        <div class="card-header">Datos del proyecto
            <div class="card-body">
                <form action="portafolio.php" method="post">
                    Nombre del proyecto: <input class="form-control" type="text" name="nombre" id=""><br/>
                    Imagen del proyecto: <input class="form-control" type="file" name="archivo" id=""><br/>
                    <input class="btn btn-success" type="submit" value="Enviar proyecto">
                </form>
            </div>
        </div>
    <br>
 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th></th>Nombre</th>
                    <th>Imagen</the=>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>Aplicacion web</td>
                    <td>Imagen.jpg</td>
                </tr>
            </tbody>
        </table>
    </div>
    
   

 <?php include("pie.php"); ?>