<?php 
    $n1 = 2;
    $n2 = 5;
    $n3 = 9;

    if($n2 > $n1){
        echo "$n2 + $n1 = ", $n2 + $n1;
    }
    pularlinha();
    if($n3 > $n2){
        echo "$n3 + $n2 = ", $n3 + $n2;
    }
    pularlinha();
    if($n1 < $n3){
        echo "$n1 é menor que $n3, e a soma deles é: ", $n3 + $n1;
    }
    pularlinha();
    if($n1 > 1){
        echo "caralho";
    }
    function pularlinha(){
       echo "<br>";
    }
?>