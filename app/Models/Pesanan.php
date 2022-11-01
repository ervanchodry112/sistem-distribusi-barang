<?php

namespace App\Models;

use CodeIgniter\Model;

class Pesanan extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'pesanan';
	protected $primaryKey       = 'id_pesanan';
	protected $useAutoIncrement = true;
	protected $insertID         = 0;
	protected $returnType       = 'object';
	protected $useSoftDeletes   = false;
	protected $protectFields    = true;
	protected $allowedFields    = ['id_toko', 'id_supir', 'id_status', 'tanggal'];

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

	public function get_pesanan()
	{
		return $this->db->table('pesanan')
			->join('toko', 'pesanan.id_toko=toko.id_toko')
			->where('pesanan.id_status', 1)
			->get()->getResultObject();
	}


	public function get_dalam_proses()
	{
		return $this->db->table('pesanan')
			->where('pesanan.id_status', 2)
			->join('toko', 'pesanan.id_toko=toko.id_toko')
			->join('status', 'pesanan.id_status=status.id_status')
			->get()->getResultObject();
	}

	public function get_dalam_pengiriman()
	{
		return $this->db->table('pesanan')
			->where('pesanan.id_status', 3)
			->join('toko', 'pesanan.id_toko=toko.id_toko')
			->join('supir', 'pesanan.id_supir=supir.id_supir')
			->join('status', 'pesanan.id_status=status.id_status')
			->get()->getResultObject();
	}

	public function get_pesanan_selesai()
	{
		return $this->db->table('pesanan')
			->join('toko', 'pesanan.id_toko=toko.id_toko')
			->join('supir', 'pesanan.id_supir=supir.id_supir')
			->join('status', 'pesanan.id_status=status.id_status')
			->where('pesanan.id_status', 4)->get()->getResultObject();
	}

    public function get_pesanan_toko()
    {
        return $this->db->table('pesanan')
			->join('status', 'pesanan.id_status=status.id_status')
            ->get()->getResultObject();
    }
}
