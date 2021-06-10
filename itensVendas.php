
<?php
require_once 'itensVendas.php';
 
 class ItensVendas extends ItensVendas {
    
    protected $tabela = 'itensVendas';  
      
   
    public function findAll() {
         $sql = "SELECT * FROM $this->tabela";
               $stm = DB::prepare($sql);
                    $stm->execute();
        return $stm->fetchAll();
    }


    public function findUnit($idvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensvendas = :iditensvenda";
      $stm = DB::prepare($sql);
         $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
            $stm->execute();
        return $stm->fetch();
    }
   
  
     
    public function insert() {
        $sql = "INSERT INTO $this->tabela(iditensvendas,idvenda,idproduto,quantidade,valorvenda,desconto) VALUES (:iditensvendas,:idvenda,:idproduto,:quantidade,:valorvenda,:desconto)";
            $stm = DB::prepare($sql);
                $stm->bindParam(':iditensvendas', $this->iditensvendas);
         $stm->bindParam(':idvenda', $this->idvenda);
             $stm->bindParam(':idproduto', $this->idproduto);
         $stm->bindParam(':quantidade', $this->quantidade);
                    $stm->bindParam(':valorvenda', $this->valorvenda);
             $stm->bindParam(':desconto', $this->desconto);
        return $stm->execute();
    }

    public function update($id) {
             $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
            $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
                $stm->bindParam(':idcliente', $this->idcliente);
         $stm->bindParam(':datavenda', $this->datavenda);
        return $stm->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE idvenda = :idvenda";
            $stm = DB::prepare($sql);
                $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}

?>