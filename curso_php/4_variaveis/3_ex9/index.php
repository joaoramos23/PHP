<?php

    $n1 = 10; // int
    $n2 = 12.5; // float
    $n3 = $n1 + $n2;

    echo "$n1 + $n2 = $n3 <br>";
    echo "<br>";

    $arr1 = [1,3,7]; //array
    $arr2 = [6,4,0]; //array
    $arr3 = [$arr1[0] + $arr2[0],$arr1[1] + $arr2[1],$arr1[2] + $arr2[2]]; //array somando outros arrays
    
    print_r($arr1);
    echo " + ";
    print_r($arr2);
    echo " = ";
    print_r($arr3);
    

    

?>