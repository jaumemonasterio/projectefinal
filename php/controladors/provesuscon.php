<?php

class provesuscon extends provesus{

    private $prova;
    private $user;


    public function __construct($prova="", $user=""){

        $this->prova=$prova;
        $this->user=$user;
    }

    public function aput(){

       

        $this->apu($this-> user, $this->prova);
    }

    public function getmail($comp){
        return $this->mailsned($comp);
    }

    public function getinscr($comp){

        return $this->inscripcions($comp);
    }

    public function getinscrus($comp, $ned){

        return $this->inscripcionsned($comp,$ned);
    }
}


?>