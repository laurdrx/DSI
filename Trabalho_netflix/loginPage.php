<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
        <title></title>
    </head>

    <style>
    </style>

    <body>
        <header class="showcase">


            <div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>

            <div class="container">
                <div class="showcase-content">
                    <div class="formm">

                        <form method="post" action="controller/loginController.php">
                            <h1>Entrar</h1>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="info">

                                        <div class="mb-1 mt-3">
                                            <input class="email" name="email" type="email" placeholder="Email ou numero de telefone">
                                            <?php
                                            @$cod = $_REQUEST['cod'];
                                            if (isset($cod)) {
                                                if ($cod == '171') {
                                                    echo ('<span class="ErroEmail">Verifique usuário.</span>');
                                                }
                                            }
                                            ?>
                                            <input class="email" name="password" type="password" placeholder="Senha">
                                            <?php
                                            @$cod = $_REQUEST['cod'];
                                            if (isset($cod)) {
                                                if ($cod == '171') {
                                                    echo ('<span class="ErroSenha">Verifique sua senha.</span>');
                                                }
                                            }
                                            ?>
                                        </div>

                                    </div>

                                </div>

                                <div class="btn">
                                    <button class="btn-primary" type="submit">Entrar</button>
                                </div>
                            </div>


                            <div class="help">
                                <div>
                                    <input value="true" type="checkbox"><label>Lembre-se de mim</label>
                                </div>

                                <a href="">Precisa de ajuda?</a>

                            </div>

                        </form>

                    </div>

                    <div class="signup">
                        <p>Novo por aqui?<a>Assine agora.</a></p>

                    </div>
                    <div class="more">
                        <p>
                            Esta página é protegida pelo Google reCAPTCHA para garantir que você não seja um bot. <a href="#">Saber mais.</a> 
                        </p>
                    </div>


                </div>
            </div>

        </header>


    </body>
</html>



