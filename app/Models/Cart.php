<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'keranjang';
    protected $primaryKey       = 'id_keranjang';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = Cart::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk', 'id_user', 'jumlah'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
