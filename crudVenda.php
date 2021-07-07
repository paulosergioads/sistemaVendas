<?php

require_once 'DB.php'; 

 abstract class crudVenda extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
   
    public $codigocliente;
    public $datavendas;
    public $precovenda;
    

   

    public function setCodigocliente($codigocliente) 
    {
        $this->codigocliente = $codigocliente;
    }

    public function getCodigocliente() 
    {
        return $this->codigocliente;
    }

    public function setDatavendas($datavendas) 
    {
        $this->datavendas = $datavendas;
    }

    public function getDatavendas() 
    {
        return $this->datavendas;
    }

    public function setPrecovenda($precovenda) 
    {
        $this->precovenda = $precovenda;
    }

    public function getPrecovenda() 
    {
        return $this->precovenda;
    }
}

