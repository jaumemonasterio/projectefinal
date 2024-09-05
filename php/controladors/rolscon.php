<?php


class RolsCon extends Rols{

    public function getrols(){

        return $this->getrolsid();
    }

    public function getrolnom($id){

        return $this->getrolsnomid($id);
    }
}