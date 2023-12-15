<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/login.css'); ?>">
    <title>Login</title>
</head>

<body>
    <header>
        <a href="<?php echo url_to('/') ?>"><img
                src="https://appweb.flashentregas.com.br/assets/images/logo-flash-preto.png" alt="Flash Logo"></a>
        <div id="login-message"></div>
    </header>

    <form action="<?php echo url_to('login_store'); ?>" method="post">
        <h2>Login</h2>
        </div id="items">


        <label for="id">ID:</label>
        <input type="password" id="id" name="id" placeholder="Digite o id (Apenas 4 dígitos)" required>
        <?php echo session()->getFlashdata('errors')['id'] ?? ''; ?>


        <br>
        <button type="submit">LOGAR</button>
        </div>
    </form>

    <script type="text/javascript" src="<?php echo base_url('js/login.js'); ?>"></script>

</body>

</html>