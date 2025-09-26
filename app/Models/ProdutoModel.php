<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'categoria', 'preco'];
    protected $returnType = 'array';
}
