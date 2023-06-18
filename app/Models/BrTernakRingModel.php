<?php

namespace App\Models;

use CodeIgniter\Model;

class BrTernakRingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'br_ternak_ring';
    protected $tableDetail      = '';
    protected $tableUtama       = 'br_ref_jenis';
    protected $tableUtamaID     = '1';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];


    public function insertData($data = array()){
        $this->db->table($this->table)->insert($data);
        
        return encrypt_url($this->db->insertID());
    }

    public function updateData($id, $data = array()){
        $id = decrypt_url($id);

        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));

        return $this->db->affectedRows();
    }

    public function deleteData($id){
        $id = decrypt_url($id);
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }

    public function allData(){
        $query = $this->db->query("SELECT * FROM " . $this->table);

        return $query->getResult();
    }

    public function allDataRing($ring){
        $query  = $this->db->query("SELECT c.*,a.id_ring,b.kode FROM " . $this->table . " a
                LEFT JOIN br_ring b ON b.id=a.id_ring
                LEFT JOIN br_ternak c on c.id=a.id_ternak
                WHERE b.kode='$ring' 
                ");
        $result = $query->getResult();
        
        foreach ($result as $key => $value) {
            $result[$key]->id = encrypt_url($value->id);
            
            $result[$key]->foto = img_data('ternak_foto/'.$value->foto); 
        }

        return $result;
    }


}