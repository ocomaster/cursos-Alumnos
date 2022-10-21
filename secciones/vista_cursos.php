<?php include('../template/cabecera.php'); ?>

<div class="col-md-5">

    <form action="" method="POST">
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="ID">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del curso">
            </div>

            <div class="btn-group" role="group" aria-label="Button group name">
                <button type="button" class="btn btn-success">Agregar</button>
                <button type="button" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
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
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
</div>



    <?php include('../template/pie.php'); ?>