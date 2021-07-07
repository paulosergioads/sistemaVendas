<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    
require_once 'vendas.php';
?>
   
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Cadastro de vendass - WEB I</title>
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
     
      $vendas = new Vendas;
      if(isset($_POST['Cadastrar'])):
            $precovenda = $_POST['precovenda'];
            $datavendas = $_POST['datavendas'];
            $codigocliente = $_POST['codigocliente'];
            
            $vendas->setDatavendas($datavendas);
            $vendas->setCodigocliente($codigocliente);
            $vendas->setPrecovenda($precovenda);
           

            

            if($vendas->insert()){
                echo "A venda: ". $codigocliente. " foi cadastrado!";
            }
             endif;
    
    ?>
        <h1 class='titulo'>Cadastrar Vendas</h1>
    <div id="div1">Cliente</div>
    <div id="div2">Datavendas</div>
    <div id="div2">Preço</div>
        

        <form method='post' action="">     
            <label for='codigocliente'></label>    
             <select name="codigocliente" class="inp">
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

                                    $data = $conn->query('SELECT codigocliente, nome FROM "sistemavendas1".clientes');

                                    foreach($data as $row) {
                                         echo  '<option value="'.$row['codigocliente'].'">'.$row['codigocliente']. '-'.$row['nome'].'</option>';

                                    }

                                    } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>

                            </option>
            <label for='datavendass'></label>
            <input type="date" name="datavendas" class="inp2" />

            <label for='precovenda'></label>
            <input type="text" name="precovenda" class="inp2" placeholder="precovenda"/>

             <br><br><td><button class='buton' name="Cadastrar" type="submit">Cadastrar</button></td>
             <a href=listarVendas.php class='buton2'>Listar Vendas</a>
            

        </form>
         
</body>
</html>
