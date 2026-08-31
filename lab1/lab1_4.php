<?php
    // 4a & 4b
    $array = array(array(1,2,3,4,5), array(6,7,8,9,10), array(11,12,13));
    echo "4a & 4b<br/>";
    echo "The element with value of 8: ",$array[1][2]," and its indexes are: [1][2].<br/><br/>";
    
    echo "4c & 4d<br/>";

    // 4c & 4d
    $array[2][] = 14;
    $array[] = [15, 16, 17];
    $array[] = 18;
    // var_dump($array);

    /**
     * In here, I'm using is_array in order to avoid having to add 18 into
     * another array and match the provided output. I had to look up the doc for is_array
     */
    foreach($array as $key => $value) {
        if(is_array($value)) {
            foreach($value as $key2 => $value2) {
                echo "[$key] [$key2] => $value2<br/>";
            }
        } else {
            echo "[$key]"," => ",$value,"<br/>";
        }
    }
    echo "<br/><br/>";
    echo "4e<br/>";

    //  4e
    for($i=0; $i<count($array); $i++) {
        if (is_array($array[$i])) {
            for($j= 0; $j<count($array[$i]); $j++) {
                echo "[$i] [$j] => ", $array[$i][$j],"<br/>";
            }
        }else {
            echo "[$i] => ", $array[$i], "<br/>";
        }
    }

    echo "<br/><br/>";
    echo "4f & 4g<br/>";

    // 4f & 4g
    $array2 = [
        'name' => [
            'first' => 'Gabriel',
            'last' => 'Arias',
        ],
        'address' => [
            'street'=> '123 Main St',
            'city' => 'Rochester',
            'state' => 'New York',
            'zip' => '14623'
        ]
    ];

    foreach($array2 as $key => $value) {
        foreach($value as $key2 => $value2) {
            echo "[$key] [$key2] : ", $array2[$key][$key2],"<br/>";
        }
    }

    echo "<br/><br/>";
    echo "4h & 4i<br/>";

    // 4h and 4i
    $array2["name"]["middle"] = "none";
    $array2["name"][] = ["my" => "name"];
    $array2["name"][] = 25;
    $array2[] = [1,2,3,4,5];
    $array2[][] = ["testing" => "yes"];
    foreach($array2 as $key => $value) {
        if (is_array($value)) {
            foreach($value as $key2 => $value2) {
                if (is_array($value2)) {
                    foreach($value2 as $key3 => $value3) {
                        echo "[$key] [$key2] [$key3] : ", $array2[$key][$key2][$key3],"<br/>";
                    }
                } else {
                    echo "[$key] [$key2] : ", $array2[$key][$key2],"<br/>";
                }
            }
        } else {
            echo "[$key] [$key2] : ", $array2[$key][$key2],"<br/>";
        }
    }
?>