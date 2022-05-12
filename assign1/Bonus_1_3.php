<?php
    abstract class AbstractClass{
        public function hello(){
            print("hello\n");
        }
        public abstract function bounjour();
    }

    class Implementation extends AbstractClass{
        public function bounjour(){
            print("bounjour\n");
        }
    }
    $implementation = new Implementation();
    $implementation->hello();
    $implementation->bounjour();
?>