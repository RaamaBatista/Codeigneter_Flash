<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/cadastro_status.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title> Cadastro Status</title>
</head>

<body>
    <header>
        <a href="<?php echo url_to('/') ?>"><img
                src="https://appweb.flashentregas.com.br/assets/images/logo-flash-preto.png" alt="Flash Logo"></a>
        <div id="login-message"></div>
    </header>

    <form action="<?php echo url_to('cadastro_status_store'); ?>" method="post">
        <label for="id">Digite o ID do Pedido:</label>
        <input type="text" id="id" name="id" required>

        <label for="Status">Status:</label>

        <label class="radio-container">Entregando Pedido
            <input type="radio" name="radio-group" value="entregando pedido">
            <?php echo session()->getFlashdata('errors')['radio-group'] ?? ''; ?>
            <span class="radio-checkmark"></span>
        </label>

        <label class="radio-container"> Esperando a finalização do Pedido
            <input type="radio" name="radio-group" value="finalizando pedido">
            <?php echo session()->getFlashdata('errors')['radio-group'] ?? ''; ?>

            <span class="radio-checkmark"></span>
        </label>

        <label class="radio-container"> Pedido Cancelado
            <input type="radio" name="radio-group" value="pedido cancelado">
            <?php echo session()->getFlashdata('errors')['radio-group'] ?? ''; ?>
            <span class="radio-checkmark"></span>
        </label>

        <button type="submit">CADASTRAR STATUS</button>


    </form>


</body>
<script type="text/javascript" src="<?php echo base_url('js/cadastro_status.js'); ?>"></script>


</html>