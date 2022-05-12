<?php
function calcGrade_switch($percentage){
    //break statements are not needed because of return
switch($percentage){
    case($percentage>=95 and $percentage<=100):
        return 1.0;
        break;
    case($percentage>=90 and $percentage<=94):
        return 1.3;
        break;
    case($percentage>=85 and $percentage<=89):
        return 1.7;
        break;
    case($percentage>=80 and $percentage<=84):
        return 2.0;
        break;
    case($percentage>=75 and $percentage<=79):
        return 2.3;
        break;
    case($percentage>=70 and $percentage<=74):
        return 2.7;
        break;
    case($percentage>=65 and $percentage<=69):
        return 3.0;
        break;
    case($percentage>=60 and $percentage<=64):
        return 3.3;
        break;
    case($percentage>=55 and $percentage<=59):
        return 3.7;
        break;
    case($percentage>=50 and $percentage<=54):
        return 4.0;
        break;
    case($percentage>=0 and $percentage<=49):
        return 5.0;
        break;
    default:
       return "Error";
}
    
}

echo "Grade: " . calcGrade_switch($_POST['uGrade']) . "<br/>";
?>