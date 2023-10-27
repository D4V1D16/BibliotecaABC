<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1 style="center">Biblioteca ABC</h1>
        <h2>Libros</h2>
            <form class="Formulario" method="post" action="index.php">
                <label for="id" class="lblInput">Id</label><br>
                <input id="id" name="id" class="input" type="number"><br>
                <label for="nombre" class="lblInput">Nombre</label><br>
                <input id="nombre" name="nombre" class="input" type="text"><br>
                <label for="autor" class="lblInput">Autori</label><br>
                <input id="autor" name="autor" class="input" type="text"><br>
                <label for="Editorial" class="lblInput">Editorial</label><br>
                <input id="Editorial" name="Editorial" class="input" type="text"><br>
                <label for="nPaginas" class="lblInput">nPaginas</label><br>
                <input id="nPaginas" name="nPaginas" class="input" type="text"><br>
                <label for="Genero" class="lblInput">Genero</label><br>
                <input id="Genero" name="Genero" class="input" type="text"><br>
                <div class="buttonsCrud">
                    <button type="submit" class="button" name="agregarLibro">Agregar</button>
                    <button type="submit" class="button" name="eliminarLibro">Eliminar</button>
                    <button type="submit" class="button" name="modificarLibro">Modificar</button>
                    
                </div>
            </form>
            <h2>Categoria</h2>
            <form class="Formulario" method="post" action="index.php">
                <label for="nombre" class="lblInput">Nombre</label><br>
                <input id="nombre" name="nombre" class="input" type="text"><br>
                <label for="edad" class="lblInput">Edad Minima</label><br>
                <input id="edad" name="edad" class="input" type="text"><br>
                <div class="buttonsCrud">
                    <button type="submit" class="button" name="agregar">Agregar</button>
                    <button type="submit" class="button" name="mostrar">Eliminar</button>
                    <button type="submit" class="button" name="modificar">Modificar Usuario</button>
                    <button type="submit" class="button" name="mostrar">Mostrar</button>
                </div>
            </form>

    </body>
</html>

<?php

include 'CRUD.php';


?>