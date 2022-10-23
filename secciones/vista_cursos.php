<?php include('../template/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>

<div class="col-md-5">

    <form action="" method="POST">
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" id="id" value="<?php echo $id ?>" aria-describedby="helpId" placeholder="ID">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" value="<?php echo $nombre_curso ?>" aria-describedby="helpId" placeholder="Nombre del curso">
            </div>

            <div class="btn-group" role="group" aria-label="Button group name">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
            </div>
            </div>

        </div>
    
    </form>

</div>   

    <div class="col-md-7">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaCursos as  $curso) { ?>
            
                    <tr>
                        <td><?= $curso['id'] ?></td>
                        <td><?= $curso['nombre_curso'] ?></td>
                        <td>

                        <form action="" method="POST">
                            <input type="hidden" name="id" id="id" value="<?= $curso['id'] ?>"/>
                            <input type="submit" value="Seleccionar" name="accion" class="btn btn-info" />
                        </form>

                        </td>
                    </tr>
                   <?php }?>
                </tbody>
            </table>
        </div>
        
        
</div>



    <?php include('../template/pie.php'); ?>