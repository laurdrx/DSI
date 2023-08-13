<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php
      require_once './controller/autenticationController.php';
?>

      <?php
      @session_start();
      echo ('bem vindo '. $_SESSION['login']);
?>

<?php
$perfis = array(
    array(
        "nome" => "Usuário 1",

        "imagem" => "https://mir-s3-cdn-cf.behance.net/project_modules/disp/84c20033850498.56ba69ac290ea.png"
    ),
    array(
        "nome" => "Usuário 2",
        "imagem" => "https://wallpapers.com/images/featured/imagenes-de-perfil-de-netflix-62wgyitks6f4l79m.jpg"
    ),
    array(
        "nome" => "Perfil Infantil",
        "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRhxyxDzvokN1Jey7XPCLqRkG5Q2rgieZE9nJC8z_h1DeOB_DhOFksC5D3wERWs1A6-WY&usqp=CAU"
    )
);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="CSS/styleEscolha.css">
<title></title>

  <style>
    .profile img {
      width: 200px;
      height: 200px;
      margin-top: 200px;
    }

    h1{
      position: relative;
      top: 150px;
    }

  </style>

</head>
  <body>
    <div class="container text-center">
      <h1>Quem está assistindo?</h1>

            <?php foreach ($perfis as $perfilId => $perfil) : ?>

              <div class="container-profile d-flex justify-content-between">
              <div class="profile">
                  <a href="movies.php?id=<?php echo $perfilId; ?>">
                      <img src="<?php echo $perfil['imagem']; ?> " />
                  </a>
              <p><?php echo $perfil['nome']?></p>
              </div>

            <?php endforeach; ?>

      </div>
  </body>
</html>