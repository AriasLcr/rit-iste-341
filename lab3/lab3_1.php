<?php 
    class Person {
        private $fName, $lName, $height, $weight;

        function __construct($first="Sam", $last="Spade") {
            $this->fName = $first;
            $this->lName = $last;
        }

        function getFirstName() {
            return $this->fName;
        }

        function getLastName() {
            return $this->lName;
        }

        function getHeight() {
            return $this->height;
        }

        function getWeight() {
            return $this->weight;
        }

        function setFirstName($first) {
            $this->fName = $first;
        }

        function setLastName($last) {
            $this->lName = $last;
        }

        function setHeight($height) {
            $this->height = $height;
        }

        function setWeight($weight) {
            $this->weight = $weight;
        }

        function calculateBMI() {
            $weight = $this->getWeight();
            $height = $this->getHeight();
            return 705 * ($weight / ($height * $height));
        }
    }
?>
