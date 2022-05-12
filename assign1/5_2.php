<?php
    include "5_1.php";
    $customers = array();
    $customers[0] = new Customer(0,"Customer 1");
    $customers[1] = new Customer(1,"Customer 2");
    $customers[2] = new Customer(2,"Customer 3");
    foreach ($customers as $customer){
        $customer->addBalance();
        $customer->deductBalance();
        $customer->print();
    }
?>