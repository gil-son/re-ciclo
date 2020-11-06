<?php

session_start();

if (!isset($_SESSION['nome'])) {
    header('Location:integracao/rompe_session.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css" />
</head>

<body>
    <?php
    include_once('integracao/menu.html');
    ?>
    <main class="mt-2">
        <div class="container-fluid main-login">
            <div class="row">
                <div class="col-sm-3 pt-3 sidebar">
                    <nav class="sidebar collapse d-md-block" id="sidebar">
                        <ul class="nav pt-3">
                            <li class="font-weight-bold mt-2">
                                <span class="nav-link sidebar-link" href="#resultado-individual">
                                    <img src="./css/person.svg" alt="uma pessoa">
                                    RESULTADO INDIVIDUAL
                                </span>
                            </li>
                            <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#reciclados-da-semana">Reciclados da Semana</a></li>
                            <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#reciclados-do-mês">Reciclados do mês</a></li>
                            <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#pontos-acumulados">Pontos acumulados</a></li>

                            <li class="font-weight-bold mt-4" id="#resultado-comunitario">
                                <span class="nav-link sidebar-link" href="#">
                                    <img src="./css/people.svg" alt="muitas pessoas">
                                    RESULTADO COMUNITARIO
                                </span>
                            </li>
                            <li><a class="nav-link sidebar-link ml-4 my-1" href="consulta_dados.php">Reciclados da Semana</a></li>
                            <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#reciclados-do-mês">Reciclados do mês</a></li>
                            <li><a class="nav-link sidebar-link ml-4 my-1 disabled" href="#pontos-acumulados">Pontos acumulados &nbsp; &nbsp;</a></li>
                            <li><a class="nav-link sidebar-link ml-4 my-1" href="integracao/rompe_session.php">Sair</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-9 ">
                            <div class="mt-4 mx-5 py-3 text-center font-weight-bold">
                                <div class="jumbotron text-dark col">
                                    <h4 class="font-weight-bold"> Seja bem vindo(a), <?php echo $_SESSION['nome'] ?> !</h4>
                                    <p class="lead">Aqui nessa página, você tem acesso às suas informações pessoais e aos resultados que sua comunidade obteve através do <span class="font-weight-bold">Re-ciclo</span>.</p>
                                    <hr class="my-4 my-md-4">
                                    <p>A equipe Squad 07 em apoio a Recode Pro, agradece .</p>
                                    <p class="lead">

                                    </p>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-3 right-usuario">

                            <div class="col mt-5">
                                <h3>Meus Dados</h3>
                                <?php echo  "<b>Nome:</b>" . "<br/>" . $_SESSION['nome'] . "<br/><hr/>";
                                echo "<b>E-mail:</b>" . "<br/>" . $_SESSION['email'] . "<br/><hr/>";
                                echo "<b>Telefone:</b>" . "<br/>" . $_SESSION['telefone'] . "<br/><hr/>";
                                ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include_once('./integracao/footer.html');
    ?>

</body>

</html>