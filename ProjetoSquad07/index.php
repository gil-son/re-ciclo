<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re-ciclo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css" />
    </head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<body>

    <?php
        include_once('integracao/menu.html');
    ?>

    <main>
        <div class="container-fluid main-login mt-2">
            <div class="row">
                <div class="col-sm-6 bg-light p-4">

                    <div id="carouselExampleIndicators" class="carousel slide" data-interval="4500" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/imgfinal01.jpg" alt="Primeiro Slide">                         
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/imgfinal02.jpg" alt="Segundo Slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/imgfinal03.jpg" alt="Terceiro Slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/imgfinal04.jpg" alt="Quarto Slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Próximo</span>
                        </a>
                      </div>

                </div>
                <div class="col-sm-6 bg-light">
                        <div class="mt-4 p-5 form-bg text-center">
                            <form action="integracao/login_usuario.php" method="post">
                                <div class="form-row mb-1  mt-md-3 mb-md-4">
                                    <label class="col-4 col-md-3 label-align" for="email">E-mail:</label>
                                    <input class="col-8 col-md-7 py-1 form-radius" type="email" id="email" name="email" class="form-control" placeholder="Digite o e-mail">
                                </div>

                                <div class="form-row  mt-md-3 mb-md-4">
                                    <label class="col-4 col-md-3 label-align" for="senha">Senha:</label>
                                    <input class="col-8 col-md-7 py-1 form-radius " type="password" id="senha" name="senha" class="form-control" placeholder="Digite a senha">
                                </div>

                                <div class="text-right">
                                    <a class=" pr-md-5 mr-md-5 form-link" href="#">Esqueci a senha</a>                                    
                                </div>

                                <div class=" form-check ml-4 pl-5 mt-2 text-left">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Lembrar</label>
                                </div>

                                <div class="form-row justify-content-around mt-5">
                                    <button class="col-10 col-md-6 py-1 ml-md-5 form-radius btn btn-info btn-lg btn-entrar" pe="submit"ty class="form-control">Entrar</button>
                                </div>
                            </form>

                              <div class="justify-content-around mt-3 mb-md-5">
                                      <button class="col-10 col-md-6 py-1 ml-md-5 form-radius  btn btn-info btn-lg font-weight-bold btn-cadastrar"><a href="cadastro.php">Quero me
                                          Cadastrar</a></button>
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