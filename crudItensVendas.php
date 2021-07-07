<?php

require_once 'DB.php'; 

 abstract class crudItensVendas extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
   
    public $codigovendas;
    public $codigoproduto;
    public $quantidade;
    public $valorunitario;
    public $valortotal;


    public function setCodigovendas($codigovendas) 
    {
        $this->codigovendas = $codigovendas;
    }

    public function getCodigovendas() 
    {
        return $this->codigovendas;
    }

    public function setCodigoproduto($codigoproduto) 
    {
        $this->codigoproduto = $codigoproduto;
    }

    public function getCodigoproduto() 
    {
        return $this->codigoproduto;
    }

    public function setQuantidade($quantidade) 
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() 
    {
        return $this->quantidade;
    }

    public function setValorunitario($valorunitario) 
    {
        $this->valorunitario = $valorunitario;
    }

    public function getValorunitario() 
    {
        return $this->valorunitario;
    }

    public function setValortotal($valortotal) 
    {
        $this->valortotal = $valortotal;
    }

    public function getValortotal() 
    {
        return $this->valortotal;
    }
}

