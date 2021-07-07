<?php


require_once 'crudVenda.php';

 class vendas extends crudVenda{
    
    protected $tabela = 'sistemavendas1.vendas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($codigovendas) {
        $sql = "SELECT * FROM $this->tabela WHERE codigovendas = :codigovendas";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigovendas', $codigovendas, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (datavendas, precovenda, codigocliente) VALUES (:datavendas, :precovenda, :codigocliente)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':datavendas', $this->datavendas);
        $stm->bindParam(':precovenda', $this->precovenda);
        $stm->bindParam(':codigocliente', $this->codigocliente);
        return $stm->execute();
    }
    
    //update de itens
    public function update($codigovendas) {
        $sql = "UPDATE $this->tabela SET datavendas = :datavendas, precovenda = :precovenda, codigocliente = :codigocliente WHERE codigovendas = :codigovendas";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigovendas', $codigovendas, PDO::PARAM_INT);
        $stm->bindParam(':datavendas', $this->datavendas);
        $stm->bindParam(':precovenda', $this->precovenda);
        $stm->bindParam(':codigocliente', $this->codigocliente);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($codigovendas) {
        $sql = "DELETE FROM $this->tabela WHERE codigovendas = :codigovendas";
        $stm = DB::prepare($sql);
        $stm->bindParam(':codigovendas', $codigovendas, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>