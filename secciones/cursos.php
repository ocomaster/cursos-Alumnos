<?php 
    include('../configuraciones/bd.php');

    $conecionBD= BD::crearInstancia();
    //print_r($_POST);

    // IF corto
    $id =isset($_POST['id'])?$_POST['id']: '';
    $nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']: ''; 
    $accion = isset($_POST['accion'])? $_POST['accion']: '';

    if ($accion!= '') {
        
        switch ($accion) {
            case 'agregar':
               $sql = "INSERT INTO cursos (id, nombre_curso) values (null, :nombre_curso)";
               $consulta = $conecionBD->prepare($sql);
               $consulta->bindParam(":nombre_curso",$nombre_curso);
               $consulta->execute();
            break;

            case 'editar':
               $sql = "UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
               $consulta = $conecionBD->prepare($sql);
               $consulta->bindParam(':id',$id);
               $consulta->bindParam(':nombre_curso',$nombre_curso);
               $consulta->execute();
            break;

            case 'borrar':
                $sql ="DELETE FROM cursos WHERE id = :id";
                $consulta = $conecionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();
            break;
            case 'Seleccionar':
                $sql = "SELECT * FROM cursos WHERE id =:id";
                $consulta = $conecionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();
                $curso = $consulta->fetch(PDO::FETCH_ASSOC);
                $nombre_curso = $curso['nombre_curso'];
                break;
        }
    }

    //Instancia consulta de cursos 
    $consulta = $conecionBD->prepare("SELECT * FROM cursos");
    $consulta->execute();
    $listaCursos = $consulta->fetchAll();

   // print_r($listaCursos)
?>
