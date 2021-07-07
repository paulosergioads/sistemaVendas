<?php


require_once 'crudProduto.php';

 class produto extends crudProduto{
    
    protected $tabela = 'sistemavendas1.produto';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($codigoproduto) {
        $sql = "SELECT * FROM $this->tabela WHERE codigoproduto = :codigoproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (nome, quantidade, preco) VALUES (:nome, :quantidade, :preco)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':preco', $this->preco);
        return $stm->execute();
    }
    
    //update de itens
    public function update($codigoproduto) {
        $sql = "UPDATE $this->tabela SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE codigoproduto = :codigoproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':preco', $this->preco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($codigoproduto) {
        $sql = "DELETE FROM $this->tabela WHERE codigoproduto = :codigoproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>