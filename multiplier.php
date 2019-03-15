<?php

class Multiplier implements Operatorinterface {

    public function run ($number , $result) {
        return $result * $number;
    }
}