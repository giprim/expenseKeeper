<?php

class DBConnection{
    public $CON;
    private $HOST = 'localhost';
    private $USER = 'root';
    private $PASS = '';
    private $DB = 'expensedb';

    function __construct(){
        $this->CON = mysqli_connect($this->HOST, $this->USER,$this->PASS, $this->DB);
    }

    function test(){
        if($this->CON){
            return "connected";
        }
        return "failed" . " " . $this->CON;
    }

    function excuteQuery($query){
        try {
            $run = mysqli_query($this->CON, $query);
            if ($run) return $run;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>