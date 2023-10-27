<?php
    include 'conectar.php';
    include 'query.php';

    if(isset($_POST['agregarLibro'])){
        $nombre = $_POST['nombre'];
        $Autor = $_POST['autor'];
        $Editorial = $_POST['Editorial'];
        $nPaginas = $_POST['nPaginas'];
        $Genero = $_POST['Genero'];

        $query = "INSERT INTO `libros` (`Nombre`, `Autor`, `Editorial`, `nPaginas`, `Genero`) VALUES ('$nombre','$Autor','$Editorial',$nPaginas,'$Genero');";

        execQuery($conection,$query);
    }  if(isset($_POST['eliminarLibro'])){
        $id = $_POST['id'];

        $query = "DELETE FROM libros WHERE Id='$id';";

        execQuery($conection,$query);


    } if(isset($_POST['modificarLibro'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $Autor = $_POST['autor'];
        $Editorial = $_POST['Editorial'];
        $nPaginas = $_POST['nPaginas'];
        $Genero = $_POST['Genero'];

        $query = "UPDATE libros SET Nombre='$nombre',Autor='$Autor',Editorial='$Editorial',nPaginas='$nPaginas',Genero='$Genero' WHERE Id='$id';";

        execQuery($conection,$query);

    }


?>