<?php 

namespace App\Models;

use CodeIgniter\Model;

class PembeliModel extends Model{
    protected $table = "tabelpembeli";
    protected $primaryKey= 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nama','nomer','email','barang','alamat'];
}

?>