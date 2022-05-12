<?php
    class Customer{
        public $accountNumber;
        public $depositor;
        public $lastBalance;

        public function __construct($accountNumber, $depositor){
            $this->accountNumber = $accountNumber;
            $this->depositor = $depositor;
            $this->lastBalance = 0;
        }

        function addBalance(){
            $amount = readline('Enter amount: ');
            $this->lastBalance += $amount;
        }

        function deductBalance(){
            $amount = readline('Enter amount: ');
            $this->lastBalance -= $amount;
        }

        function print(){
            print("Name: ". $this->depositor . " Balance: " . $this->lastBalance) . "\n";
        }
    }

?>