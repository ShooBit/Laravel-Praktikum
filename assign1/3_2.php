<?php

include "3_1.php";

function funExtractor($result){
    foreach(array_keys($result) as $key){
        print("Content_".$key." = ".$result[$key]."\n");
    }
}

funExtractor($result)

?>