<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCart extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cart';
    protected $primaryKey       = 'id_cart';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk', 'qty', 'id_user', 'id_order', 'status_cart'];

    // Dates
    protected $useTimestamps = false;
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

    public function edit($id_order)
    {
        $id_user = session()->get('id_user');
        $this->db->query("UPDATE cart SET id_order = '$id_order', status_cart = 'Checkout' WHERE id_user = $id_user AND status_cart = 'Belum Checkout'");
    }
}
