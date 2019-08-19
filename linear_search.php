<?php
    $input_array = array(90,32,68,1,86,19);
    $linear_search_output = linear_search($input_array,86);

    if($linear_search_output == -1){
        echo "key doesn't exist in array";
    }else{
        echo "key found in array. array index = ". $linear_search_output." & value is = ".$input_array[$linear_search_output];
    }
    
    function linear_search($array,$key){
      $array_size = count($array)-1;
      for($initial = 0; $initial < $array_size; $initial++){
          if($array[$initial] == $key){
              return $initial;
          }
       }
       $initial = -1;
       return $initial;
    }
    
  ?>
