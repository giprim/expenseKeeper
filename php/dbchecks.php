<?php

class DBChecks{
    public $CON;
    private $HOST = 'localhost';
    private $USER = 'root';
    private $PASS = '';
    private $DB = '';

    function __construct(){
        $this->CON = mysqli_connect($this->HOST, $this->USER,$this->PASS);
    }

    function test(){
        if($this->CON){
            return "connected";
        }
        return "failed" . " " . $this->CON;
    }
}

?>