<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tb_transaksi';
    protected $primarykey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_transaksi', 'tipe_produk', 'tgl_keberangkatan', 'tgl_kedatangan', 'daftar_penumpang'];
}
