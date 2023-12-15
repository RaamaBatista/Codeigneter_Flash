<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/cadastro.css'); ?>">
    <title>Cadastro</title>
</head>

<body>

    <form action="<?php echo url_to('cadastro_store'); ?>" method="post">
        </div id="items">

        <h2>CADASTRO</h2>
        <label for="nome">Nome do entregador:</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: Fulano de tal">
        <?php echo session()->getFlashdata('errors')['nome'] ?? ''; ?>
        <label for="cpf">CPF do entregador:</label>
        <input type="number" id="cpf" name="cpf" placeholder="Ex: 11111111111">
        <?php echo session()->getFlashdata('errors')['cpf'] ?? ''; ?>
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

        <label for="CEP">CEP:</label>
        <input type="number" id="CEP" name="cep" onchange="store()" placeholder="Digite o CEP aqui">
        <?php echo session()->getFlashdata('errors')['cep'] ?? ''; ?>

        <div class="input-group">
            <label for="logradouro">Logradouro:</label>
            <input type="text" id="logradouro"
                value="<?php echo isset($data['logradouro']) ? $data['logradouro'] : ''; ?>" disabled>

            <label for="localidade">Localidade:</label>
            <input type="text" id="localidade"
                value="<?php echo isset($data['localidade']) ? $data['localidade'] : ''; ?>" disabled>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" value="<?php echo isset($data['bairro']) ? $data['bairro'] : ''; ?>"
                disabled>

            <label for="UF">UF:</label>
            <input type="text" id="uf" value="<?php echo isset($data['uf']) ? $data['uf'] : ''; ?>" disabled>
        </div>

        <button type="submit">CADASTRAR</button>
        </div>
    </form>
    <script type="text/javascript" src="<?php echo base_url('js/cadastro.js'); ?>"></script>

</html>