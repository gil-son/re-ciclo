<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
                        <div class="col-sm-6 ">

                            <div class="mt-4 p-md-5 form-bg text-center">
                                <form action="integracao/cadastro_usuarios.php" method="post">
                                    <div class="form-row ml-4 ml-md-2 mt-3 mb-4">
                                        <label class="col-4  label-align" for="nome">Nome:</label>
                                        <input class="col-8  py-1 form-radius" type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
                                    </div>
    
                                    <div class="form-row ml-4 ml-md-2 mt-3 mb-1">
                                        <label class="col-4  label-align" for="email">E-mail:</label>
                                        <input class="col-8  py-1 form-radius" type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail">
                                    </div>

                                    <div class="form-row ml-4 ml-md-2 mt-3 mb-1">
                                        <label class="col-4  label-align" for="telefone">Telefone:</label>
                                        <input class="col-8  py-1 form-radius" type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone">
                                    </div>
    
                                    <div class="form-row ml-4 ml-md-2 mt-3 mb-1">
                                        <label class="col-4  label-align" for="senha">Senha:</label>
                                        <input class="col-8  py-1 form-radius" type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
                                    </div>

                                    <div class="form-row ml-0 ml-md-2 ml-md-2 mt-3 mb-1">
                                        <label class="col-4  label-align" for="repita-senha">Repetir Senha:</label>
                                        <input class="col-8  py-1 form-radius" type="password" id="repita-senha" name="repita-senha" class="form-control" placeholder="Repita sua senha">
                                    </div>
                                    
                                    <div class="form-row form-check ml-md-5 mt-4 text-left">
                                        <input class="col-1  col-md-0  col-lg-1" type="checkbox" name="verificacao" class="form-check-input" id="check">
                                        <label class="col-11 col-md-12 col-lg-10 form-check-label" for="check">Criando sua conta você concorda com nossos <a href="#">Termos de Serviço</a> e nossa <a href="#">Política de Privacidade</a></label>
                                        
                                        
                                    </div>

                                    <div class="form-row justify-content-center mt-5">
                                        <button class="col-8  py-1 py-md-0 ml-md-5 form-radius btn btn-info btn-lg btn-entrar" type="submit" class="form-control">Cadastrar</button>
                                    </div>  
                                    

                                </form>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 mt-3">
                            <img src="./img/cadastro.jpg" alt="">
                        </div>
                </div>
            </main>
           
            <?php
        include_once('./integracao/footer.html');
    ?>
    </body>
</html>