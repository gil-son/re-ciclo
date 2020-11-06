<?php

session_start();

if (!isset($_SESSION['nome'])) {
    header('Location:integracao/rompe_session.php');
    exit;
}


include_once('./integracao/conexao_bd.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta aos Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css" />
</head>

<body>
    <?php
    include_once('integracao/menu.html');
    ?>

    <main>
        <div class="container-fluid mt-2 main-login">
            <div class="row">
                <div class="container-fluid main-login">
                    <div class="row">
                        <div class="col-sm-3 pt-3 sidebar">
                            <nav class="sidebar collapse d-md-block" id="sidebar">
                                <ul class="nav pt-3">
                                    <li class="font-weight-bold mt-2">
                                        <span class="nav-link sidebar-link" href="#resultado-individual">
                                            <img src="./css/person.svg" alt="uma pessoa">
                                            Administrar banco de dados
                                        </span>
                                    </li>
                                    <li><a class="nav-link sidebar-link ml-4 my-1" href="tela_usuario.php">Tela do Usuário </a></li>
                                    <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#reciclados-do-mês">Exportar dados &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a></li>
                                    <li><a class="nav-link sidebar-link ml-4 my-1" href="integracao/rompe_session.php">Sair</a></li>
                                    

                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-9 bg-light mt-1">
                        
                        <h4>Reciclados da Semana</h4>
                        
                            <?php


                            $reciclados = array(); // aqui criamos um array vazio
                            $resultado = mysqli_query($conn, "SELECT * FROM tabela_reciclado"); // selecionamos todos os cursos do nosso banco


                            while ($reciclado = mysqli_fetch_assoc($resultado)) // aqui dizemos que enquanto houver cursos no nosso resultado realizaremos a logica a seguir
                            {
                                array_push($reciclados, $reciclado); // colocamos nosso curso dentro do array de cursos
                            }


                            $soma_total_kg = mysqli_query($conn, "select sum(total_kg) from tabela_reciclado");
                            $soma_valor_final = mysqli_query($conn, "select sum(valor_final) from tabela_reciclado");



                            $resultado_soma_total_kg =  mysqli_fetch_all($soma_total_kg);
                            $resultado_soma_valor_final =  mysqli_fetch_all($soma_valor_final);




                            ?>


                            <table class="table table-striped  table-bordered table-hover table-responsive text-center alinhar-tabela">
                                <thead class="table-consulta ">
                                    <tr>
                                        <th scope="col">ID </th>
                                        <th scope="col">Nome Material</th>
                                        <th scope="col">Preço kg</th>
                                        <th scope="col">Total kg</th>
                                        <th scope="col">Valor Final</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($reciclados as $reciclado) :
                                    ?>

                                        <tr>
                                            <th scope="row"><?php echo $reciclado["id_reciclado"]; ?></th>
                                            <td><?php echo $reciclado["nome_material"]; ?></td>
                                            <td><?php echo $reciclado["preco_kg"]; ?></td>
                                            <td><?php echo $reciclado["total_kg"]; ?></td>
                                            <td><?php echo $reciclado["valor_final"]; ?></td>
                                            <td><?php echo $reciclado["data"]; ?></td>
                                        </tr>

                                    <?php

                                    endforeach;

                                    ?>


                                    <tr>
                                        <th scope="col" colspan="3"> Total: </th>
                                        <th scope="col"><?php echo  $resultado_soma_total_kg[0][0]; ?></th>
                                        <th scope="col"><?php echo "R$ " . $resultado_soma_valor_final[0][0]; ?></th>
                                        <th scope="col"></th>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </main>

    <?php
        include_once('./integracao/footer.html');
    ?>
</body>

</html>