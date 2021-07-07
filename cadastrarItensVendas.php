<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    
require_once 'itensVendas.php';
?>
   
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Cadastro de itensVendass - WEB I</title>
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
     
      $itensVendas = new ItensVendas;
      if(isset($_POST['Cadastrar'])):

            $valorunitario = $_POST['valorunitario'];
            $valortotal = $_POST['valortotal'];
            $codigoproduto = $_POST['codigoproduto'];
            $codigovendas = $_POST['codigovendas'];
            $quantidade = $_POST['quantidade'];
            
            $itensVendas->setCodigoproduto($codigoproduto);
            $itensVendas->setCodigovendas($codigovendas);
            $itensVendas->setValorunitario($valorunitario);
            $itensVendas->setValortotal($valortotal);
            $itensVendas->setQuantidade($quantidade);
            
         

            if($itensVendas->insert()){
                echo "A venda: ". $codigovendas. " foi cadastrado!";
            }
             endif;
    
    ?>
        <h1 class='titulo'>Cadastrar itensVendas</h1>
    <div id="div1">CodigoVendas</div>
      <div id="div1">CodigoProdutos</div>
      <div id="div2">Quantidade</div>
    <div id="div2">ValorUnitario</div>
    <div id="div2">ValorTotal</div>
        

        <form method='post' action="">     
            <label for='codigovendas'></label>    
             <select name="codigovendas" class="inp">
              <option> Selecione </option>
                        <option>
                            <?php
                                /*
                                * Método de conexão sem padrões
                                */

                                $username = 'postgres';
                                $password = 'root';

                                try {
                                    $conn = new PDO('pgsql:host=localhost;dbname=sistemavendas1', $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $data = $conn->query('SELECT codigovendas FROM "sistemavendas1".vendas');

                                    foreach($data as $row) {
                                         echo  '<option value="'.$row['codigovendas'].'">'.$row['codigovendas']. '</option>';

                                    }

                                    } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>

                            </option>
                             </select>

            <label for='codigoproduto'></label>
            <select name="codigoproduto" class="inp">
              <option> Selecione </option>
                        <option>
                            <?php
                                
                                $username = 'postgres';
                                $password = 'root';

                                try {
                                    $conn = new PDO('pgsql:host=localhost;dbname=sistemavendas1', $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $data = $conn->query('SELECT codigoproduto,nome FROM "sistemavendas1".produto');
 
                                     foreach($data as $row) {
                                         echo  '<option value="'.$row['codigoproduto'].'">'.$row['codigoproduto']. '-'.$row['nome'].' </option>';

                                    }

                                    } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>

                            </option>
             </select>

            <label for='valorunitario'></label>
            <input type="text" name="valorunitario" class="inp2" placeholder="valorunitario"/>

            <label for='valortotal'></label>
            <input type="text" name="valortotal" class="inp2" placeholder="valortotal"/>

            <label for='quantidade'></label>
            <input type="text" name="quantidade" class="inp2" placeholder="quantidade"/>

             <br><br><td><button class='buton' name="Cadastrar" type="submit">Cadastrar</button></td>
             <a href=listaritensVendas.php class='buton2'>Listar itensVendas</a>
            

        </form>
         
</body>
</html>
