<?php
$array = range(1, 200, 3);
$key = 127;

if (recursive_binary_search($array, $key, 0, count($array)-1) >= 0) {
    echo "$key Found \n";
} else {
    echo "$key Not found \n";
}

function recursive_binary_search($array,$key,$start,$end){
    if($start > $end){
        return -1;
    }
    $mid = (($start+$end)/2);
    if($array[$mid] > $key){
        return recursive_binary_search($array,$key,$start,$mid-1);
    }else if($array[$mid] < $key){
        return recursive_binary_search($array,$key,$mid+1,$end);
    }else{
        return $mid;
    }
}

?>
