<?php
    include "conectar.php";

    function execQuery($connection,$query){

        $result = mysqli_query($connection,$query);

        if($result){
            echo "Se ejecuto la operacion exitosamente";
        } else{
            die(mysqli_error($connection));
        }


        return $result;
    }
?>