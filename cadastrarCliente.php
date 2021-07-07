<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    
require_once 'cliente.php';
?>
   
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Cadastro de clientes - WEB I</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
            margin-left: 120px;  
            margin-top: 100px;        

            }
            .buton2 {
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
            margin-left: 120px;  
            margin-top: 100px;
              font-family:Verdana;
        

            }

            .titulo {    

                font-size: 20pt;
                font-family:Verdana;
                color: #545454;
                text-align:left;
                padding: 120px;

            }

            .inp{
                margin-left: 120px;
                padding: 10px 130px;
                

            }

            .inp2{
                
                padding: 10px 130px;
                margin-left: 50px;
                

            }

            div{
                font-size: 12pt;
                font-family:Verdana;
                color: #545454;
                width: 30px;
                height: 30px;
                display: inline-block;
                margin-left: -180px;
                padding: 0px 300px;
                top: 100px;
            }

</style>
</head>

<body>
   <?php
     
      $cliente = new Cliente;
      if(isset($_POST['Cadastrar'])):
    
            $endereco = $_POST['endereco'];
            $nome = $_POST['nome'];
            
            $cliente->setEndereco($endereco);
            $cliente->setNome($nome);
           

            

            if($cliente->insert()){
                echo "O Cliente: ". $nome. " foi cadastrado!";
            }
             endif;
    
    ?>
        <h1 class='titulo'>Cadastrar Cliente</h1>
    <div id="div1" >Nome</div>
    <div id="div2">Endereço</div>
    

        <form method='post' action="">     
            <label for='nome'></label>    
            <input type="text" name="nome" class="inp" placeholder="Nome"/> 

            <label for='endereco'></label>
            <input type="text" name="endereco" class="inp2" placeholder="Endereço"/>

             <br><br><td><button class='buton' name="Cadastrar" type="submit">Cadastrar</button></td>
             <a href=listarCliente.php class='buton2'>Listar clientes</a>
            

        </form>
         
</body>
</html>
