<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/home.css'); ?>">
  <title>Página Inicial</title>

</head>
<body>

  <header>
    <img src="https://appweb.flashentregas.com.br/assets/images/logo-flash-preto.png" alt="Flash Logo">
    <div id="login-message"></div>
  </header>

  <div id="container">
    <h2>Bem vindo à Flash Entregas</h2>

    <button> <a href="<?php echo url_to('buscar') ?>">Buscar Pedido</button>
    <button> <a href="<?php echo url_to('login') ?>">Login</button>
  </div>

</body>
<script type="text/javascript" src="<?php echo base_url('js/home.js'); ?>"></script>

</html>