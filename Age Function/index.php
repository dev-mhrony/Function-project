<?php

    function YourCorrentYear($year){
        $Cyear = date("Y");              // $Cyear = your Corrent Year 
        $correntyear = $Cyear - $year;  //$year = your date of birth 
        return $correntyear;    
    }

    echo YourCorrentYear (1959);









?>