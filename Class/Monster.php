<?php

class Monster {
    
    private $id;
    private $name;
    private $strength;
    private $life;
    private $type;


    function getId(){
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getStrength(){
        return $this->strength;
    }

    function getLife(){
        return $this->life;
    }

    function getType(){
        return $this->type;
    }



    function setId($id){
        $this->id = $id;
    }


    function setName($name){
        $this->name=$name;
    }

    function setStrength($strength){
        $this->strength=$strength;
    }

    function setLife($life){
        $this->life=$life;
    }

    function setType($type){
        $this->type=$type;
    }
}