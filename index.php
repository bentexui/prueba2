<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>pRUEBA</title>
    </head>
    <body>
        <?php
       //proyecto con ramas

  $operacion = 0;
   $resultado=0;
   $op1=0;
   $op2=0;
   if (isset($_GET['calcular'])){
       $op1 = $_GET["op1"];
       $op2 = $_GET["op2"];

       switch($_GET['operacion']){

           case"sumar": $resultado = sumar($op1,$op2);
               break;
           case "restar": $resultado = restar($op1,$op2);
               break;
           case "multiplicar": $resultado = multi($op1,$op2);
               break;
           case "dividir":  $resultado = div($op1,$op2);
               break;
       }

   }
        ?>
    </body>
</html>
