<?php

class Adder implements Operatorinterface{

    public function run ($number , $result) {
        return $result + $number;
    }
}