<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'produk';
	protected $primaryKey       = 'id_produk';
	protected $useAutoIncrement = true;
	protected $insertID         = 0;
	protected $returnType       = 'object';
	protected $useSoftDeletes   = false;
	protected $protectFields    = true;
	protected $allowedFields    = ['nama_produk', 'harga', 'stok', 'slug'];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert   = [];
	protected $afterInsert    = [];
	protected $beforeUpdate   = [];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];
}