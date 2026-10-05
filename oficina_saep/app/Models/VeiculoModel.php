<?php
namespace App\Models;
use CodeIgniter\Model;

// Model = representa a tabela no banco
class VeiculoModel extends Model
{
    protected $table = 'VEICULO'; // nome da tabela
    protected $primaryKey = 'VEI_ID'; // chave primária

    // Campos permitidos para INSERT/UPDATE
    protected $allowedFields = [
        // colunas na tabela VEICULO do banco
        'VEI_MODELO',
        'VEI_ANO',
        'VEI_MARCA',
        'FK_CLI_ID'
    ];
}