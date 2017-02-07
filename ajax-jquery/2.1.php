<?php

    $num1= $_POST['a'];
    $num2= $_POST['b'];
    $signos= $_POST['c'];

    if(!empty($num1) && !empty($num2)){
      if($signos=="mas"){
          echo $num1+$num2;
      }elseif($signos=="menos"){
          echo $num1-$num2;
      }elseif($signos=="bider"){
          echo $num1*$num2;
      }elseif($signos=="zati"){
          echo $num1/$num2;
      }
    }else{
       echo "introduzca operacion";
    }



?>