<?php


    function Area ($x=0 , $y=0 , $z=0){

            if($x>0 && $y>0 && $z>0){

                    $result = $x*$y*$z;
                    return $result;

            }elseif($x>0 && $y>0){

                    $result = $x*$y;
                    return $result;

            }else{
                    
                $result = $x*$x;
                    return $result;
            }
    }
    echo Area(2,9,0.5);


        // =================================Thank you===================================


    ?>