<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'vendas.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de vendass - WEB I</title>

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
                        
                        <th>codigocliente:</th>
                        <th>Preço</th>  
                        <th>Data da venda</th>  
                        
                    </tr>

        </thead>

               <tbody>
                    
                    <?php 
                    
                    $vendas =  New vendas;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $codigovendas = $_POST['codigovendas'];
                        $vendas->delete($codigovendas);
                    }
                                                    
                    
                    

                    foreach ($vendas->findAll() as $key => $value) { ?>
                    
                    <tr>
                        
                        <td> <?php echo $value->codigocliente;?> </td>
                        <td> <?php echo $value->precovenda;?> </td>
                        <td> <?php echo $value->datavendas;?> </td>

                 
                             
                     
                        <form method="post" action="alterarVendas.php">
                           
                                <input name="codigovendas" type="hidden" value="<?php echo $value->codigovendas;?>"/> 
                                <input name="codigocliente" type="hidden" value="<?php echo $value->codigocliente;?>"/> 
                                <input name="precovenda" type="hidden" value="<?php echo $value->precovenda;?>"/>                    
                                <input name="datavendas" type="hidden" value="<?php echo $value->datavendas;?>"/> 
                                <td><button  class='buton1' name="alterar" type="submit">Alterar</button></td>
                                
                            
                            
                         </form>


                            <form method="post" >

                                <input name="codigovendas" type="hidden" value="<?php echo $value->codigovendas;?>"/>
                                 <td><button  class='buton1'name="excluir" type="submit" class="button">Excluir</button></td>
                            </form>
                        </tr>

                     
                 
                    <?php } ?>
                </tbody>
            </table>

    </div>
            <!-- Fim da tabela -->

<br><br><a href=cadastrarVendas.php><td><button  class='buton3' name="Cadastrar Novo vendas" type="submit">Cadastrar nova vendas</button></td></a>


</form>

</body>
</html>
