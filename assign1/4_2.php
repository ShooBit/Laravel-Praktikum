<?php

while(true){
    $input = readline('Enter rows: ');
    if($input > 10){
        echo "Please enter integer beween 1 and 10 \n";
    }else{
        display($input);
    }
}


function display($input){
    for ($i = $input; $i>=1; $i--){
        for($j = $i; $j<$input;$j++){
            print(" ");
        }
        for($j = 0;$j<($i*2-1);$j++){
            print("*");
        }
        print("\n");
    }
}

?>