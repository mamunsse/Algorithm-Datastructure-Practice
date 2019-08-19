<?php
$array = array(1,14,5,2,6,11,3,4);
$array_size = count($array);
$sorted_array = selection_sort($array,$array_size);
print_r($sorted_array);

function selection_sort($array,$array_size){
    $i=0;
    $j=0;
    $min_index;
    $temporary_variable;
    for($i; $i < $array_size-1; $i++){
        $minimum_index = $i;
        for($j = $i+1 ; $j < $array_size; $j++){
            if($array[$j] < $array[$minimum_index]){
                $minimum_index = $j;
            }
        }
        
        if($minimum_index != $i){
            $temporary_variable = $array[$i];
            $array[$i] = $array[$minimum_index];
            $array[$minimum_index] = $temporary_variable;
        }
        
    }
    return $array;
}


?>
