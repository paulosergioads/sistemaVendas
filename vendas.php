
<?php
require_once 'vendas.php';
 class vendas extends Vendas {
    
    protected $tabela = 'vendas'; 
      
    
    public function findUnit($idvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE idvenda = :idvenda";
            $stm = DB::prepare($sql);
                $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
            $stm->execute();
        return $stm->fetch();
    }
 
    public function findAll() {
         $sql = "SELECT * FROM $this->tabela";
                $stm = DB::prepare($sql);
                $stm->execute();
        return $stm->fetchAll();
    }
    
    public function insert() {
            $sql = "INSERT INTO $this->tabela(idvenda,idcliente,datavenda) VALUES (:idvenda, :idcliente,:datavenda)";
        $stm = DB::prepare($sql);
            $stm->bindParam(':idvenda', $this->idvenda);
            $stm->bindParam(':idcliente', $this->idcliente);
                $stm->bindParam(':datavenda', $this->datavenda);
        return $stm->execute();
    }
    

    public function update($id) {
            $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
                $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
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