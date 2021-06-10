<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'vendas.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastro de vendas</title>
</head>
<body>
	<h2>cadastro de vendas</h2>


		<?php
    
      $vendas = new Vendas;
      if(isset($_POST['cadastrar'])):
            
            $idcliente = $_POST['idcliente'];
            $datavenda = $_POST['datavenda'];
            $idvenda = $_POST['idvenda'];

            $vendas->setIdCliente($idcliente);
            $vendas->setDataVenda($datavenda);
            $vendas->setIdVenda($idvenda);
            

            if($vendas->insert()){
                echo "vendas ". $idcliente. " inserido com sucesso";
            }
      endif;
    ?>
    
    <form method='post' action="">

    <label for='idvenda'>idvenda:</label>
        <input type="text" name="idvenda"/>

    <label for='datavenda'> datavenda: </label>    
        <input type="text" name="datavenda"/>
        <input type="submit" value="cadastrar" name="cadastrar"/>
    
</form>

</body>
</html>

