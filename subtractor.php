<?php

class Subtractor implements Operatorinterface {

    public function run ($number , $result) {
        return $result - $number;
    }
}