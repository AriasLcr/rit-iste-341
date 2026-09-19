<?php 
    require("lab3_3.php");
    $britishPerson = new BritishPerson("Adam", "Smith");

    $britishPerson->setHeight("177");
    $britishPerson->setWeight("68");

    $bmi = $britishPerson->calculateBMI();

    echo "<p>Name: " . $britishPerson->getFirstName() , " " , $britishPerson->getLastName() , " Your BMI: " , $bmi , "</p>";
?>