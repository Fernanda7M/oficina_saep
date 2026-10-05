<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Novo veículo</title>
    </head>
    <body>
        <h1>Novo veículo</h1>
        <form action="<?= base_url('veiculo/inserir') ?>" method="POST">
            <label>Nome:</label><br>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo..." required>

            <br><br>
            
            <label>Ano:</label><br>
            <input type="date" id="ano" name="ano" minlength="4" maxlength="4" value="<?= $veiculo['VEI_ANO'] ?>" required>

            <br><br>

            <label>Cliente:</label><br>
            <select id="cliente" name="cliente" required>
                <?php foreach($cliente as $cli): ?>
                    <option value="<?= $cli['CLI_ID'] ?>"
                        <?= $cli['CLI_ID'] == $veiculo['FK_CLI_ID'] ? 'selected' : '' ?>>
                        <?= $cli['CLI_NOME'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br><br>

            <input type="submit" id="cadastrar_veiculo" name="cadastrar_veiculo" value="Cadastrar">
        </form>
        <br>
        <a href="<?= base_url('veiculo') ?>"><button>Voltar</button></a>
    </body>
</html>