<?php 


        function Current_age_type($age){
                if($age>=0 && $age <=12){
                        $result = "You are Children ";
                        return $result ;
                }elseif($age>=13 && $age <=18){
                        $result = "You are Teenagers";
                        return $result ;
                }elseif($age>=19){
                        $result = "You are Young ";
                        return $result ;
                }else{
                        $result = "In terms of age - values ​​are never real.";
                        return $result;
                }
        }
        echo Current_age_type(15);



                //================================= Thank You ============================