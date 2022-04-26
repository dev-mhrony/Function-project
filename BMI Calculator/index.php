<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
<?php


    $bmi = bmi(55,5.7); //<--- 

    function bmi($mass,$height) {
        

        $nheight = explode (".",$height);

        $farray = reset($nheight);

        $larray = end($nheight);

        $t_inch = ($farray*12)+$larray;

        $t_inch = $t_inch*0.0254;

        $bmi = $mass/($t_inch*$t_inch);

        return $bmi;
     }   

    
     

        $bmi = number_format($bmi, 2);
    

    if ($bmi <= 18.5) {
        $output = "ধুর মিয়া চিকন আলী , খাওয়া দাওয়া ঠিক মত করেন😁😁";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "সব ঠিক আছে , এখন মিষ্টি খাওয়ান 😋😋";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "খাওয়া দাওয়া কমান মিয়া 🥰🥰";

        } else if ($bmi > 30.0) {
        $output = "ভাই আপনার উপরে যাওয়ার টিকেট রেডি";
    }else {
        "এখনো বয়স হইনি BMI মাপার 😁 " ;
    }
    echo "Your BMI value is  " . $bmi . "  and you are : "; 
    echo "$output";



    // =================================Thank you===================================


?>
    
</body>
</html>