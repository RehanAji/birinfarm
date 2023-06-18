<?php

namespace App\Models;

use CodeIgniter\Model;

class CoreRedirectModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'core_redirect';
    protected $tableDetail      = '';
    protected $tableUtama       = '';
    protected $tableUtamaID     = '';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function __construct(){
        parent::__construct();
    }


    public function allData(){
        $query = $this->db->query("SELECT * FROM " . $this->table);

        return $query->getResult();
    }

    public function detailData($id){
        $query = $this->db->query("SELECT * FROM " . $this->table ."
                WHERE nama='".$id."' 
                ORDER BY id DESC
        ");

        $data = $query->getResult(); 

        if (empty($data)) {
            $data[0] = array();
        }
        
        return $data[0];
    }

}