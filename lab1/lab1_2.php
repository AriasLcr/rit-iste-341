<?php 
    $scores = array(87, 75, 93, 95);
    $total_score = 0;
    foreach ($scores as $score) {
        $total_score += $score;
    }
    $average = $total_score / count($scores);
    echo "The average score is: $average\n";
?>