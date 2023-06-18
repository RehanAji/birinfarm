<?php

namespace App\Models;

use CodeIgniter\Model;

class BrTernakPrestasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'br_ternak_prestasi';
    protected $tableDetail      = '';
    protected $tableUtama       = 'br_ternak';
    protected $tableUtamaID     = 'id_ternak';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    private $db;

    public function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    public function insertData($data = array()){
        $this->db->table($this->table)->insert($data);
        
        return $this->db->insertID();
    }

    public function updateData($id, $data = array()){
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));

        return $this->db->affectedRows();
    }

    public function deleteData($id){
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }

    public function allData(){
        $query = $this->db->query("SELECT * FROM " . $this->table);

        return $query->getResult();
    }

    public function detailData($id){
        $query = $this->db->query("SELECT * FROM " . $this->table ."
                WHERE id='".$id."' 
                ORDER BY id DESC
        ");

        $data = $query->getResult(); 
        return $data[0];
    }

    public function utamaData($id){
        $query = $this->db->query("SELECT b.* FROM " . $this->table ." a
                LEFT JOIN " . $this->tableUtama ." b ON b.".$this->tableUtamaID."=a.id 
                WHERE a.id='".$id."' 
                ORDER BY b.id DESC
                GROUP BY b.id
        ");

        $data = $query->getResult(); 
        return $data[0];
    }

    public function detailAll($id){
        $query = $this->db->query("SELECT * FROM " . $this->tableDetail ."
                WHERE id_".$this->table."='".$id."' 
                ORDER BY id DESC
        ");
        
        return $query->getResult();
    }

    public function detailOne($id){
        $query = $this->db->query("SELECT * FROM " . $this->tableDetail ."
                WHERE id_".$this->table."='".$id."' 
                ORDER BY id DESC
                LIMIT 1
        ");

        $data = $query->getResult(); 
        return $data[0];
    }

}