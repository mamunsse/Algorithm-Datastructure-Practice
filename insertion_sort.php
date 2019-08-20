<?php

$input_array = array(8,1,5,9,2,90,12,21);
$array_size = count($input_array);
$sorted_array = insertionSort($input_array,$array_size);
print_r($sorted_array);

function insertionSort($input_array,$array_size){
	$i;
	$j;
	$temp;
	for($i =1; $i <$array_size; $i++){
	    $temp = $input_array[$i];
	    
	    $j = $i-1;
	    while($j >=0 && $input_array[$j] > $temp){
	        $input_array[$j+1] = $input_array[$j];
	        $j = $j - 1;
	    }
	    $input_array[$j+1] = $temp;
	}
	return $input_array;
}

?>
