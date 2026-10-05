<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Novo Agendamento</title>
    </head>
    <body>
        <h1>Novo Agendamento</h1>

        <form action="<?= base_url('agendamento/inserir') ?>" method="POST">
            <label>Data e Hora:</label><br>
            <input type="datetime-local" id="data_hora" name="data_hora" required>
            <br><br>

            <label>Motivo:</label><br>
            <input type="text" id="motivo" name="motivo" placeholder="Motivo..." required>
            <br><br>

            <label>Status:</label><br>
            <input type="text" id="status" name="status" placeholder="Status..." required>
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

            <label>Veículo:</label><br>
            <select id="veiculo" name="veiculo" required>
                <option value="">Selecione um veículo</option>
                <?php foreach($veiculo as $vei): ?>
                    <option value="<?= $vei['VEI_ID'] ?>">
                        <?= $vei['VEI_MARCA'] ?>&nbsp;
                        <?= $vei['VEI_MODELO'] ?>&nbsp;
                        <?= $vei['VEI_ANO'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br><br>

            <input type="submit" id="cadastrar_agendamento" name="cadastrar_agendamento" value="Cadastrar">
        </form>
        <br>
        <a href="<?= base_url('agendamento') ?>"><button>Voltar</button></a>
    </body>
</html>