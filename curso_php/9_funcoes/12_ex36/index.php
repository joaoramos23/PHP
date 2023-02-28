<?php

    $num = [1,3,6,7,17,23,1,10,50,45,-5];

    function select($a){
        $new = [];

        for($i = 0; $i < count($a); $i++){

            if($a[$i] > 7){
                array_push($new,$a[$i]);
            }
        }

        return $new;
    }

    $newarr = select($num);

    print_r($newarr);