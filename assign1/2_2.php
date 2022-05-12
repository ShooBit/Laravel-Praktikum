<?php 
$i = 0;
    do{
        $j = -1;
        do{
            print(" ");
            $j++;
        }while($j<$i);
        $j = $i;
        do{
            print("*");
            $j++;
        }while($j<=5);
        print("\n");
        $i++;
    }while($i<5);
?>