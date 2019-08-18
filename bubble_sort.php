<?php

$result = bubblesort(array(89,1,9,3,90,47,30));
echo '<pre>';
print_r($result);

function bubblesort($array){
    $array_size = count($array);
    $i =0;$temp;
    for($i;$i < $array_size; $i++){
        for($j=0;$j < $array_size-$i-1;$j++){
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        } 
    }
    return  $array;
}
?>
