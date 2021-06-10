<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Cliente.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de cliente </title>

</head>

<body>
   <?php
    
      $cliente = new Cliente;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $cliente->setNome($nome);
            $cliente->setEndereco($endereco);

            if($cliente->insert()){
                echo "Cliente ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
    <label for='Nome'> Nome:</label>
    	<input type="text" name="nome"/>
    <label for='endereço'> Endereço: </label>    
    	<input type="text" name="endereco"/>
    	 <input type="submit" name="cadastrar"/>
        
    </form>

</body>
</html>
