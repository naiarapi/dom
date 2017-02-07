<?php


    $tipos= $_POST['a'];

    $jsonarchivo = file_get_contents("3.2.json");
    $jsondescodificar = json_decode($jsonarchivo, true);
    
    $jsonikasleak = $jsondescodificar["Ikasleak"];
    $jsonirakasleak = $jsondescodificar["Irakasleak"];
    
    if($tipos == "ikasleak"){
        $arrayikasle = array();
        foreach ($jsonikasleak as $ikasle){
            array_push($arrayikasle, $ikasle);
        }
        echo json_encode($arrayikasle, true);
    }elseif($tipos == "irakasleak"){
        $arrayirakasleak = array();
        foreach ($jsonirakasleak as $irakasle){
            array_push($arrayirakasleak, $irakasle);
        }
        echo json_encode($arrayirakasleak, true);
    }    