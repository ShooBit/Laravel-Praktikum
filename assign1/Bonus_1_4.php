<?php 
    interface InterfaceInterface{
        public function hello();
    }

    class Implementation implements InterfaceInterface{
        public function hello(){
            print("Hello \n");
        }
    }
?>