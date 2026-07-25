<?php

class vehiculo{
    private $marca;
    private $tipo;
    private $estado;

    public function __construct($marca_, $tipo_, $estado_){
        
        $this-> marca = $marca_;
        $this-> tipo = $tipo_;
        $this-> estado = $estado_;
    }

    public function getMarca(){
        return $this-> marca;
    }

    public function setMarca($marca_){
        $this->marca=$marca_;

    }

    public function getTipo(){
        return $this -> tipo;  
    }
    
    public function setTipo($tipo_){
        return $this -> tipo = $tipo_;
    }

    public function getestado(){
        return $this -> estado;
    }

    public function setestado($estado_){
        return $this -> estado = $estado_;
    }

    public function Informacion(){

        echo "Marca:".$this-> marca."<br>";
        echo "Tipo:".$this -> tipo."<br>";
        echo "Estado:".$this -> estado."<br>";
    }
    
    public function encender(){

        echo"el vehiculo esta encendido";
    }
    
    
}

class Moto extends vehiculo{

    public function encender(){
        echo"la moto prendio con el boton de start.";
    }
}

class Carro extends vehiculo{

    public function encender(){

        echo"el carro encendio con la llave.";
    }
}
