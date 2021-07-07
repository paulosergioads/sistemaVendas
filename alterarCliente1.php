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
        //Alterar  prateleira
        

        $codigocliente = $_POST['codigocliente'];
        $nome = $_POST['nome'];     
        $endereco = $_POST['endereco'];
                
        $cliente = new Cliente;
        if (isset($_POST['alterarDados']));
        {
         
            $cliente->setNome($nome);
            $cliente->setEndereco($endereco);
            $cliente->update($codigocliente);

         }

        //endif;
    ?>
        <h1 class='titulo'>Alterar Cliente</h1>
    <div id="div1" >Nome</div>
    <div id="div2">Endereço</div>
    
        <form method='post' action="">     
            <label for='nome'></label>    
            <input type="text" name="nome" class="inp" value="<?php echo $nome;?>"/> 
            <label for='endereco'></label>
            <input type="text" name="endereco" class="inp2" value="<?php echo $endereco;?>"/>
            <br><br><input type="hidden" name="codigocliente" value="<?php echo $codigocliente;?>"/>
            <br><br><td><input type="submit" value="alterarDados" class='buton'/></td>
             <a href=listarCliente.php class='buton2'>Listar clientes</a>
            

        </form>
         
</body>
</html>
