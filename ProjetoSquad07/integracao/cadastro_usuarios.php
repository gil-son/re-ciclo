<?php



// Validações
if( strlen($_POST['nome']) > 3 &&  strlen($_POST['email']) > 3 && strlen($_POST['telefone']) > 3 && strlen($_POST['senha']) > 3 ){




    if( $_POST['senha'] == $_POST['repita-senha']){

        

    }else{
        
        echo "<script>
                alert('As senhas devem ser iguais')
                window.location.href = '../cadastro.php'
             </script>";

    }



    


    if(isset($_POST['verificacao'])){

        //Se der certo as validações, preencher as variáveis

        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $telefone = ($_POST['telefone']);
        $senha = md5($_POST['senha']);
       
        // Conexão com o Banco
        include_once('conexao_bd.php');


        
       
                if($sqlemail = $conn->query("SELECT email from usuarios where email = '$email'")){

                        $sqlemail = $conn->query("SELECT email from usuarios where email = '$email'");

                        $resultado =  mysqli_fetch_all($sqlemail);

                        // Verificação se há e-mail igual

                        if ($resultado != null){

                                if($email == $resultado[0][0]){

                                        echo "<script>
                                                alert('Email já cadastrado')
                                                window.location.href = '../cadastro.php'
                                        </script>";
                                }
                                       
                        }

                }
                     
        



        // Inserção dos valores

        $sql = "insert into usuarios(nome, email, telefone, senha) values('$nome','$email','$telefone','$senha')";
        
       
        mysqli_query($conn, $sql);

        echo "<script>
                alert('Cadastro Efetuado')
                window.location.href = '../index.php'
             </script>";

        


   }else{


        echo "<script>
                alert('Não é possível prosseguir sem aceitar os termos de serviços')
                window.location.href = '../cadastro.php'
             </script>";

    }




}else{
        echo "<script>
                alert('Digite acima de 3 caracteres')
                window.location.href = '../cadastro.php'
             </script>";
}






