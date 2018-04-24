<?php

//Integer variable 
$var = 1;


$var_float = 1.0;

//string 



$var_string = "dskfksdfds ";



$cars = array("Volvo", "BMW", "Toyota",22);
// var_dump($cars);

//=========================

// $number_1 = "My age is";
// $number_2 = 10;

// $sum = $number_1.' equal to '.$number_2;

// echo $sum;


?>

<?php
class Car
{
    function Car()
    {
        $this->model = "VW";
    }


    
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>