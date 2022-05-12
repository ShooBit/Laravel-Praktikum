<?php
function calcGrade($percentage){
    if($percentage>=95 and $percentage<=100){
        return 1.0;
    }elseif($percentage>=90 and $percentage<=94){
        return 1.3;
    }elseif($percentage>=90 and $percentage<=94){
        return 1.7;
    }elseif($percentage>=85 and $percentage<=89){
        return 1.7;
    }elseif($percentage>=80 and $percentage<=84){
        return 2.0;
    }elseif($percentage>=75 and $percentage<=79){
        return 2.3;
    }elseif($percentage>=70 and $percentage<=74){
        return 2.7;
    }elseif($percentage>=65 and $percentage<=69){
        return 3.0;
    }elseif($percentage>=60 and $percentage<=64){
        return 3.3;
    }elseif($percentage>=55 and $percentage<=59){
        return 3.7;
    }elseif($percentage>=50 and $percentage<=54){
        return 4.0;
    }elseif($percentage>=0 and $percentage<=49){
        return 5.0;
    }else{
        return "Error";
    }
    
}

echo "Grade: " . calcGrade($_POST['uGrade']) . "<br/>";
?>