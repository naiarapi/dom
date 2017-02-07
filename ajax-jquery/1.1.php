<?php

    $nombre= $_POST['a'];
    $email= $_POST['b'];
    $comentario= $_POST['c'];

    if(!empty($nombre) && !empty($email) && !empty($comentario)){
        echo "enviado";
    }else{
        echo "error";
    }



?>