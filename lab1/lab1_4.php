<?php
    // 4a & 4b
    $array = array(array(1,2,3,4,5), array(6,7,8,9,10), array(11,12,13));
    echo "4a)\n";
    echo "The element with value of 8: ",$array[1][2]," and its indexes are: [1][2].\n";
  
    // 4c & 4d
    $array[2][] = 14;
    $array[] = [15, 16, 17];
    $array[] = 18;
    // var_dump($array);

    /**
     * In here, I'm using is_array in order to avoid having to add 18 into
     * another array and match the provided output.
     */
    foreach($array as $key => $value) {
        if(is_array($value)) {
            foreach($value as $key2 => $value2) {
                echo "[$key] [$key2] => $value2\n";
            }
        } else {
            echo "[$key]"," => ",$value,"\n";
        }
    }

    //  4e
    for($i=0; $i<count($array); $i++) {
        if (is_array($array[$i])) {
            for($j= 0; $j<count($array[$i]); $j++) {
                echo "[$i] [$j] => ", $array[$i][$j],"\n";
            }
        }else {
            echo "[$i] => ", $array[$i], "\n";
        }
    }
?>