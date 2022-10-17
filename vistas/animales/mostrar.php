 
 <!-- funcion javascript para confirmar si se elimina o no el registro -->

<script type="text/javascript"> 
    function confirmar(id,nombre) {
        if (confirm('Esta seguro de eliminar el registro? \n\nId = ' + id)==true) {
            alert('El registro '+id+ ' ha sido eliminado correctamente!!! \n\nHaga clic en Aceptar para actualizar la tabla');
            return true;
        }else{
            return false;
        }
    }
</script>

<!-- fin de la funcion eliminar registro -->

<div class="container">
    <div class="btn-group p-3" role="group" aria-label="">
        <a href="index.php?controlador=animales&accion=crear" class= "btn btn-primary">Añadir una mascota</a>
    </div>

    <h2 class="text-center">ANIMALES</h2>
    <div class="container">
        <table id="productos" class="table table-bordered border-primary table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>sexo</th>
                    <th>edad</th>
                    <th>especie</th>
                    <th>historial</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datosanimales as $p) { ?>
                <tr>
                    <td>   <?php echo $p->idanimal  ?>   </td>
                    <td>   <?php echo $p->nombreanimal  ?>   </td>
                    <td>   <?php echo $p->sexoanimal  ?>   </td>
                    <td>   <?php echo $p->edadanimal  ?>   </td>
                    <td>   <?php echo $p->especieanimal  ?>   </td>
                    <td>   <?php echo $p->historialmedico  ?>   </td>
                    <td class="d-flex flex-row justify-content-center">
                        <div class="btn-group" role="group">
                            <a href="index.php?controlador=animales&accion=actualizarRegistro&id=<?php echo $p->idanimal  ?>" class="btn btn-warning">Editar</a>&nbsp &nbsp
                            <a href="index.php?controlador=animales&accion=borrarRegistro&id=<?php echo $p->idanimal  ?>" class="btn btn-danger" onclick="return confirmar(<?php echo $p->idProducto  ?>)">Eliminar</a>

                        </div>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        
    </div>
</div>