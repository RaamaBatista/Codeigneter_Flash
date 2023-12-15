<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/buscar.css'); ?>">
    <title>Buscar</title>
</head>

<body>
    <header>
        <a href="<?php echo url_to('/') ?>"><img
                src="https://appweb.flashentregas.com.br/assets/images/logo-flash-preto.png" alt="Flash Logo"></a>
        <div id="login-message"></div>
    </header>
    <form action="" method="get">
        <h2>Buscar</h2>
        <label for="campoDeBusca">Digite o CPF do entregador, o Status, nome do entregador ou o ID do
            pedido:</label>
        <input type="text" id="campoDeBusca" name="campoDeBusca" placeholder="Busque seu pedido aqui" required>
        <button type="submit">Buscar</button>


        <div id="container">
            <?php if (count($results) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Status</th>
                            <th>Localidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $row): ?>
                            <tr>
                                <td>
                                    <?php echo $row->id; ?>
                                </td>
                                <td>
                                    <?php echo $row->nome; ?>
                                </td>
                                <td>
                                    <?php echo $row->cpf; ?>
                                </td>
                                <td>
                                    <?php echo $row->status; ?>
                                </td>
                                <td>
                                    <?php echo $row->localidade; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Nenhum resultado encontrado.</p>
            <?php endif; ?>
        </div>
    </form>
    <script type="text/javascript" src="<?php echo base_url('js/buscar.js'); ?>"></script>
</body>

</html>