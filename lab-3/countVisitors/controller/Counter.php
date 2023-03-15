<?php

class Counter{

    private $count;

    public function __construct(){

        $this->count = $this->getCount();
    }

    public function getCount(){

        if(file_exists(VISITS)){

            return intval(file_get_contents(VISITS));

        }else{

            return 0 ;
        }
    }

    private function increment(){

        
        if(!isset($_SESSION[PRIVATE_KEY])){

            $this->count++;
            $_SESSION[PRIVATE_KEY] = true;
            return $this->count;

        }else{
            return false;
        }

    }
    private function update(){

        $fs = fopen(VISITS , "w+");
        fwrite($fs , $this->count);
        fclose($fs);
    }

    public function increment_and_update(){

        if($this->increment()){

            $this->update();
        }
    }

}


