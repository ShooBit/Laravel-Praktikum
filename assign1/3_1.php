<?php
$param1 = array("hello","halo","foo");
$param2 = array("world","steven","bar");

function fun($p1,$p2){
    if(count($p1) != count($p2)){
        return "Error input does not have same length.";
    }elseif(count($p1)==0){
        return array();
    }else{
        $resulting_string = array_shift($p1) . " " . array_shift($p2);
        $resulted_array = fun($p1, $p2);
        array_unshift($resulted_array, $resulting_string);
        return $resulted_array;
    }
}
$result=fun($param1,$param2);
?>
