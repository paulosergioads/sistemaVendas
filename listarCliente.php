<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'cliente.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de clientes - WEB I</title>

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
                        <th>Endereço:</th> 
                        
                    </tr>

        </thead>

               <tbody>
                    
                    <?php 
                    
                    $cliente =  New Cliente;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $codigocliente = $_POST['codigocliente'];
                        $cliente->delete($codigocliente);
                    }
                                                    
                    
                    

                    foreach ($cliente->findAll() as $key => $value) { ?>
                    
                    <tr>
                        
                       
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->endereco;?> </td>

                 
                             
                     
                        <form method="post" action="alterarCliente.php">
                           
                                <input name="codigocliente" type="hidden" value="<?php echo $value->codigocliente;?>"/> 
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>                    
                                <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/> 
                                <td><button  class='buton1' name="alterar" type="submit">Alterar</button></td>
                                
                            
                            
                         </form>


                            <form method="post" >

                                <input name="codigocliente" type="hidden" value="<?php echo $value->codigocliente;?>"/>
                                 <td><button  class='buton1'name="excluir" type="submit" class="button">Excluir</button></td>
                            </form>
                        </tr>

                     
                 
                    <?php } ?>
                </tbody>
            </table>

    </div>
            <!-- Fim da tabela -->

<br><br><a href=cadastrarCliente.php><td><button  class='buton3' name="Cadastrar Novo CLiente" type="submit">Cadastrar nova cliente</button></td></a>


</form>

</body>
</html>
