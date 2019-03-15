<?php

class Divider implements Operatorinterface {

    public function run ($number , $result) {
        return $result / $number;
    }
}