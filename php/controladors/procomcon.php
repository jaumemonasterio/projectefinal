<?php 



class procomcon extends provcom{

    use validacions;
    private $prova;
    private $competi;
    private $sexe;
    private $ordre;

    public function __construct($prova="", $competi="", $sexe="", $ordre=""){

        $this->prova=$prova;
        $this->competi=$competi;
        $this->sexe=$sexe;
        $this->ordre=$this->validate_input($ordre);



    }

    public function setcomp(){
        $this->setprovacomp($this->sexe, $this->prova, $this->competi, $this->ordre);

    }

    public function setcompeti($competi){
        $this->competi=$competi;
    }


    public function getorder(){

       return $this-> getallorder($this->competi);
    }
}


?>