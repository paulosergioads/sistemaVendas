<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


    
require_once 'vendas.php';
?>
   
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Alteração da Venda - WEB I</title>
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
        

        $codigovendas = $_POST['codigovendas'];
        $codigocliente = $_POST['codigocliente'];     
        $datavendas = $_POST['datavendas'];
        $precovenda = $_POST['precovenda'];
        $vendas = new Vendas;
        if (isset($_POST['alterarDados']));
        {
         
            $vendas->setCodigocliente($codigocliente);
            $vendas->setDatavendas($datavendas);
            $vendas->setPrecovenda($precovenda);
            $vendas->update($codigovendas);

         }

        //endif;
    ?>
        <h1 class='titulo'>Alterar Vendas</h1>
    <div id="div1" >codigocliente</div>
    <div id="div2">Endereço</div>
     <div id="div2">Preço</div>
    
        <form method='post' action="">     
            <label for='codigocliente'></label>    
            <input type="text" name="codigocliente" class="inp" value="<?php echo $codigocliente;?>"/> 
            <label for='datavendas'></label>
            <input type="text" name="datavendas" class="inp2" value="<?php echo $datavendas;?>"/>
            <input type="text" name="precovenda" class="inp2" value="<?php echo $precovenda;?>"/>
            <br><br><input type="hidden" name="codigovendas" value="<?php echo $codigovendas;?>"/>
            <br><br><td><input type="submit" value="alterarDados" class='buton'/></td>
             <a href=listarVendas.php class='buton2'>Listar Vendas</a>
            

        </form>
         
</body>
</html>
