<?php
   $teste1 = 5;
   $teste2 = "João";
   $teste3 = 5.9;
   
   function verificar($a){
    
        if(is_int($a) or is_float($a)){
            $multi = $a * 2;
            echo "$a é um número!<br>";

            if($multi > 100){
                echo "$multi é maior que 100.<br>";
            }
            else{
                echo "$multi não é maior que 100.<br>";
            }
        }
        else{
             echo "$a Não é um número!<br>";
        }
   }
   verificar($teste3);
   echo "<br>";
   verificar($teste2);
   echo "<br>";
   verificar($teste1);

   
   