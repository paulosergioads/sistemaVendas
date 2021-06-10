<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'listarProduto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista Produtos</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $produto=New Produto;

                    //exclusao de produto
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $produto->delete($id);
                    }
                                                         
                    
                    

                    foreach ($aluno->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->produto;?> </td>

                        <td> <?php echo $value->marca;?> </td>

                        <td>

                        <form method="post" action="AlterarCliente.php">
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                <input name="nomeProduto" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="marca" type="hidden" value="<?php echo $value->marca;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
<td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>
