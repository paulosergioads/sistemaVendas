<?php

require_once 'DB.php'; 

 abstract class crudProduto extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
   
    public $nome;
    public $quantidade;
    public $preco;
    

   

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setQuantidade($quantidade) 
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() 
    {
        return $this->quantidade;
    }

    public function setPreco($preco) 
    {
        $this->preco = $preco;
    }

    public function getPreco() 
    {
        return $this->preco;
    }
}

