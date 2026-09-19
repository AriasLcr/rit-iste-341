<?php
    include("lab3_1.php");

    $person = new Person();
    $person->setHeight(70);
    $person->setWeight(155);

    $bmi = $person->calculateBMI();

    echo "<p>Name: " . $person->getFirstName() , " " , $person->getLastName() , " Your BMI: " , $bmi , "</p>";
?>