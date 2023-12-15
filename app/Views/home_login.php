<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/home.css'); ?>">
  <title>Página Inicial - LOGIN</title>

</head>

<body>

  <header>
    <a href="<?php echo url_to('/') ?>"><img
        src="https://appweb.flashentregas.com.br/assets/images/logo-flash-preto.png" alt="Flash Logo"></a>
    <div id="login-message"></div>
  </header>

  <div id="container">
    <h2>Realize aqui um novo cadastro! </h2>

    <button> <a href="<?php echo url_to('cadastro') ?>">Cadastrar Entregador</button>
    <button> <a href="<?php echo url_to('cadastro_status') ?>">Cadastrar Status</button>
  </div>

</body>
<script type="text/javascript" src="<?php echo base_url('js/home_login.js'); ?>"></script>


</html>