<?php

    
    $conection = new mysqli('localhost','root','','biblioteca');

    if(!$conection){
        die(mysqli_error($conection));
    } 

?>