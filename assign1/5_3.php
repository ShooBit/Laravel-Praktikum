<?php 
    include "5_1.php";

    class ATM extends Customer{
        private $password = "";
        public $lastTransactionDate;

        public function __construct($accountNumber, $name){
            parent::__construct($accountNumber, $name);
        }

        public function changePassword(){
            $password = readline('Enter password: ');
            $this->password = $password;
        }

        function addBalance(){
            $password = readline('Enter password: ');
            while($password != $this->password){
                $password = readline('Enter password: ');
            }
            parent::addBalance();
            
        }

        function deductBalance(){
            $password = readline('Enter password: ');
            while($password != $this->password){
                $password = readline('Enter password: ');
            }
            parent::deductBalance();
            $this->lastTransactionDate = date("m.d.y");
        }
    }

    $customer = new ATM(1,"Max Mustermann");
    $customer->changePassword("1234");
    $customer->addBalance();
    $customer->deductBalance();
    $customer->print();
?>