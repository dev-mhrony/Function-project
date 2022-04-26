<?php



    //Create a currency converter function from taka to USD, CAD, POUND, EURO etc


    function MonyExchange($monny, $Convater){

        $Convater = strtoupper($Convater);
       
        if($Convater==="USD"){
            $monny =$monny/86.23;
            return $monny;

        }elseif($Convater==="CAD"){
            $monny =$monny/67.55;
            return $monny;

        }elseif($Convater==="POUND"){
            $monny =$monny/109.75;
            return $monny;

        }elseif($Convater==="EURO"){
            $monny =$monny/92.39;
            return $monny;

        }else{
            return $monny;
        }
    }

    
    $input_value = MonyExchange(1000,"EURo");


    $result = number_format($input_value,2) ;


   echo "<h2> This is BDT  to  $result   </h2>";

   // =================================Thank you===================================