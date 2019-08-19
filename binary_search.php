<?php
$input_array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,38,39,40,41,42,43,44,45,46,47,48,49,50);

$binary_search_output = binary_search($input_array,7);

if($binary_search_output == -1){
    echo "key doesn't exist in array";
}else{
    echo "key exist in given array. key =".$binary_search_output.' & value = '.$input_array[$binary_search_output];
}

function binary_search($array,$key){
    $start = 0;
    $end = count($array)-1;
    
    while($start <= $end){
        $mid = ($start + $end) / 2;
        if($array[$mid] == $key){
            return (int) $mid;
        }
        if($array[$mid] < $key){
            $start = $mid;
        }else{
            $end = $mid;
        }
    }
    return -1;
}


?>
