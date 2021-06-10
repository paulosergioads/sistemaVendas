<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Produto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de produtos </title>

</head>

<body>
   <?php
    
      $produto = new Produto;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nomeProduto'];
            $endereco = $_POST['marca'];

            $cliente->setNome($nomeProduto);
            $cliente->setEndereco($marca);

            if($cliente->insert()){
                echo "Produto ". $nome. " Cadastrado com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
    <label for='Produto'> Nome:</label>
    	<input type="text" name="produto"/>
    <label for='produto'> Endereço: </label>    
    	<input type="text" name="produto"/>
    	 <input type="submit" name="cadastrar"/>
        
    </form>

</body>
</html>
