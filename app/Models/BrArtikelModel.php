<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Helpers\secure_helper;
class BrArtikelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'br_artikel';
    protected $tableDetail      = 'br_artikel_file';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'isi', 'tanggal'];

    
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

    public function latestData(){
        $query  = $this->db->query("SELECT * FROM " . $this->table ." ORDER BY id DESC LIMIT 10"); 
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $result[$key]->id = encrypt_url($value->id);
        }

        return $result; 
    }

    public function findAll(){
        $query  = $this->db->query("SELECT * FROM " . $this->table); 
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $result[$key]->id = encrypt_url($value->id);
            
            $result[$key]->foto = img_data('artikel/'.$value->foto); 
        }

        return $result; 
    }

    public function detailData($id){
        $id = decrypt_url($id);

        $query = $this->db->query("SELECT * FROM " . $this->table ."
                WHERE id='".$id."' 
                ORDER BY id DESC
        ");

        $data = $query->getResult(); 
        return $data[0];
    }

}