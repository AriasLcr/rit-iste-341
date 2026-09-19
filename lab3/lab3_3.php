<?php
    require("lab3_2.php");
    class BritishPerson extends Person {
        function calculateBMI() {
            $height = $this->getHeight() * 0.39;
            $weight = $this->getWeight() * 2.2;

            return 705 * ($weight / ($height * $height));
        }
    }
?>