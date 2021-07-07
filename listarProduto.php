<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'produto.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de produtos - WEB I</title>

        <style> 
            .buton {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
              
            font-family:Verdana;}

            .buton1 {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 10px 20px;
           
            cursor: pointer;
            display: inline-block;
            font-size: 15px;
          
            font-family:Verdana;
            }

            .buton3 {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            display: inline-block;
            font-size: 15px;
            margin-left: 1080px;
            font-family:Verdana;
            }
    
            .fonte{
               
              font-family:Verdana;  
            }

            .nomes{
                font-size: 20px;
            }
        </style>
</head>

<body class="fonte">
                 

   <div class="container">

    <table class="bordered striped centered" >
              
        <thead class="nomes">
                    <tr>
                        
                        <th>Nome:</th>  
                        <th>Quantidade:</th>
                        <th>Preco:</th>  
                        
                    </tr>

        </thead>

               <tbody>
                    
                    <?php 
                    
                    $produto =  New Produto;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $codigoproduto = $_POST['codigoproduto'];
                        $produto->delete($codigoproduto);
                    }
                                                    
                    
                    

                    foreach ($produto->findAll() as $key => $value) { ?>
                    
                    <tr>
                        
                       
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->quantidade;?> </td>
                        <td> <?php echo $value->preco;?> </td>

                 
                             
                     
                        <form method="post" action="alterarproduto.php">
                           
                                <input name="codigoproduto" type="hidden" value="<?php echo $value->codigoproduto;?>"/> 
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>                    
                                <input name="quantidade" type="hidden" value="<?php echo $value->quantidade;?>"/> 
                                <input name="preco" type="hidden" value="<?php echo $value->preco;?>"/> 
                                <td><button  class='buton1' name="alterar" type="submit">Alterar</button></td>
                                
                            
                            
                         </form>


                            <form method="post" >

                                <input name="codigoproduto" type="hidden" value="<?php echo $value->codigoproduto;?>"/>
                                 <td><button  class='buton1'name="excluir" type="submit" class="button">Excluir</button></td>
                            </form>
                        </tr>

                     
                 
                    <?php } ?>
                </tbody>
            </table>

    </div>
            <!-- Fim da tabela -->

<br><br><a href=cadastrarproduto.php><td><button  class='buton3' name="Cadastrar Novo produto" type="submit">Cadastrar nova produto</button></td></a>


</form>

</body>
</html>
