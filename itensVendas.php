<?php


require_once 'crudItensVendas.php';

 class ItensVendas extends crudItensVendas{
    
    protected $tabela = 'sistemavendas1.itensvendas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($codigoitensvendas) {
        $sql = "SELECT * FROM $this->tabela WHERE codigoitensvendas = :codigoitensvendas";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigoitensvendas', $codigoitensvendas, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (quantidade, valorunitario, valortotal, codigovendas, codigoproduto) VALUES (:quantidade,:valorunitario, :valortotal, :codigovendas, :codigoproduto)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':valorunitario', $this->valorunitario);
         $stm->bindParam(':valortotal', $this->valortotal);
          $stm->bindParam(':codigovendas', $this->codigovendas);
        $stm->bindParam(':codigoproduto', $this->codigoproduto);
        return $stm->execute();
    }
    
    //update de itens
    public function update($codigoitensvendas) {
        $sql = "UPDATE $this->tabela SET quantidade = :quantidade, valorunitario = :valorunitario, valortotal = :valortotal, codigovendas = :codigovendas, codigoproduto = :codigoproduto WHERE codigoitensvendas = :codigoitensvendas";
        $stm = DB::prepare($sql);
         $stm->bindParam(':codigoitensvendas', $codigoitensvendas, PDO::PARAM_INT);
       $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':valorunitario', $this->valorunitario);
         $stm->bindParam(':valortotal', $this->valortotal);
          $stm->bindParam(':codigovendas', $this->codigovendas);
        $stm->bindParam(':codigoproduto', $this->codigoproduto);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($codigoitensvendas) {
        $sql = "DELETE FROM $this->tabela WHERE codigoitensvendas = :codigoitensvendas";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigoitensvendas', $codigoitensvendas, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>