<?php



    function GPAcalculator ($subject_A_mark,$subject_B_mark,$subject_C_mark,$subject_D_mark){

    
        $toral_mark = $subject_A_mark + $subject_B_mark +  $subject_C_mark + $subject_D_mark ;
    
        // Average Mark
    
        $average_mark = $toral_mark / 4 ;
    
    
        // ===================== If Formula and Elseif Formula Start ========================
    
    

        if ($subject_A_mark < 0 || $subject_B_mark < 0 || $subject_C_mark < 0 || $subject_D_mark < 0 ){
            $result = "There can be no number below 0 or 0 in the result sheet." ;
            return $result;
        }elseif ($subject_A_mark > 100 || $subject_B_mark > 100 || $subject_C_mark > 100 || $subject_D_mark > 100){
            $result = "In the result sheet, there can be no number above 100 marks." ;
    
        }elseif ($average_mark >= 80 && $average_mark <= 100 ) {
            $result = "You Get A+";
            return $result;

        }elseif ($average_mark >= 70 && $average_mark <= 79) {
            $result = " You Get A" ;
            return $result;

        }elseif ($average_mark >= 60 && $average_mark <= 69) {
            $result = " You Get A-" ;
            return $result;

        }elseif ($average_mark >= 50 && $average_mark <= 59) {
            $result = " You Get B" ;
            return $result;

        }elseif ($average_mark >= 40 && $average_mark <= 49) {
            $result = " You Get C" ;
            return $result;

        }elseif ($average_mark >= 33 && $average_mark <= 39) {
            $result = " You Get D" ;
            return $result;

        }else {
            $result = "You are Fail" ;
            return $result;
        }


    }

            echo GPAcalculator(50,60,80,99);

                
            
            //================================= Thank You ============================
    


    ?>