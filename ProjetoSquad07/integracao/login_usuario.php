<?php
    session_start();
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(strlen($email) > 3 && strlen($senha) > 3){

        include('conexao_bd.php');

        // Execução da instrução SQL
        $senha_script = md5($senha);

        $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' and senha = '$senha_script'");
        
        $usuarios = mysqli_fetch_assoc($resultado_consulta);

        echo '<pre>';
            print_r($usuarios);
        echo '</pre>';


        //         Array
        // (
        //     [id_usuarios] => 1
        //     [nome] => Fulano A
        //     [email] => fulanoa@gmail
        //     [telefone] => 3333-3333
        //     [senha] => b59c67bf196a4758191e42f76670ceba
        //     [data] => 2020-11-02 00:00:00
        // )

    //  echo   $_SESSION['nome'] = $usuarios['nome'] . '<br/>';
    //  echo   $_SESSION['email'] = $usuarios['email'] . '<br/>';
    //  echo   $_SESSION['senha'] = $usuarios['senha'] . '<br/>';
        
        $_SESSION['nome'] = $usuarios['nome'];
        $_SESSION['telefone'] = $usuarios['telefone'];
        $_SESSION['email'] = $usuarios['email'];
        $_SESSION['senha'] = $usuarios['senha'];


    
        header('Location: ../tela_usuario.php');

    }else{

        echo "
        <script>
            alert('E-mail ou senha inválidos')
            location.href = '../index.php'
        </script>";

    }