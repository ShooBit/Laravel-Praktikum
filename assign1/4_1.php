<?php 
function numberToText($number){
        switch($number){
            case 0:
                return "";
            case 1:
                return "one";
            case 2:
                return "two";
            case 3:
                return "three";
            case 4:
                return "four";
            case 5:
                return "five";
            case 6:
                return "six";
            case 7:
                return "seven";
            case 8:
                return "eight";
            case 9:
                return "nine";
            case 10:
                return "ten";
            case 11:
                return "eleven";
            case 12:
                return "twelve";
            case 13:
                return "thirteen";
            case 14:
                return "fourteen";
            case 15:
                return "fifteen";
            case 16:
                return "sixteen";
            case 17:
                return "seventeen";
            case 18:
                return "eighteen";
            case 19:
                return "nineteen";
            case $number >= 20 and $number <=29:
                return "twenty " . numberToText($number-20); 
            case $number >= 30 and $number <=39:
                return "thirty " . numberToText($number-30); 
            case $number >= 40 and $number <=49:
                return "fourty " . numberToText($number-40); 
            case $number >= 50 and $number <=59:
                return "fifty " . numberToText($number-50); 
            case $number >= 60 and $number <=69:
                return "seventy";
            case $number >= 70 and $number <=79:
                return "seventy " . numberToText($number-70); 
            case $number >= 80 and $number <=89:
                return "eighty " . numberToText($number-80); 
            case $number >= 90 and $number <=99:
                return "ninety " . numberToText($number-90); 
            case $number >= 100 and  $number <= 999:
                return numberToText(intval($number/100)). " hundred " . numberToText($number%100);
            case $number >= 1000 and  $number <= 100000:
                return numberToText(intval($number/1000)). " thousand " . numberToText($number%1000);
            default:
                return "maximum exceeded";
        }
    }

?>