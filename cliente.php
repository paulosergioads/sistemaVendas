<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once 'crudCliente.php';

 class cliente extends crudCliente{
    
    protected $tabela = 'sistemavendas1.clientes';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($codigocliente) {
        $sql = "SELECT * FROM $this->tabela WHERE codigocliente = :codigocliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigocliente', $codigocliente, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert(){
        $sql = "INSERT INTO $this->tabela (nome, endereco) VALUES (:nome, :endereco)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
    //update de itens
    public function update($codigocliente) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE codigocliente = :codigocliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigocliente', $codigocliente, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($codigocliente) {
        $sql = "DELETE FROM $this->tabela WHERE codigocliente = :codigocliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigocliente', $codigocliente, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>