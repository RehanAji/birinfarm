<?php

namespace App\Models;

use CodeIgniter\Model;

class BrTernakModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'br_ternak';
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

    public function allDataKenari(){
        $query  = $this->db->query("SELECT a.* FROM " . $this->table . " a
                -- LEFT JOIN br_ring b ON b.id=a.id_ring
                WHERE a.id_jenis='1' 
                ");
        $result = $query->getResult();

        
        foreach ($result as $key => $value) {
            $query_ring  = $this->db->query("SELECT br.kode FROM br_ternak_ring btr
                LEFT JOIN br_ring br ON br.id=btr.id_ring
                WHERE btr.id_ternak='$value->id' 
                ");
            $result_ring = $query_ring->getResult();

            $result[$key]->ring = "[tidak ada ring]";
            if (!empty($result_ring)) {
                $ring = "";
                foreach ($result_ring as $key_ring => $value_ring) {
                    $ring .=$value_ring->kode." ";
                }
                $result[$key]->ring = $ring;
            }

            $result[$key]->id = encrypt_url($value->id);
            
            $result[$key]->foto_raw     = $value->foto; 
            $result[$key]->foto         = img_data('ternak_foto/'.$value->foto); 
        }

        return $result;
    }

    public function allDataKenariKerabat($id){
        $id = decrypt_url($id);

        $query  = $this->db->query("SELECT a.* FROM " . $this->table . " a
                WHERE a.id='$id' 
                ");
        $data   = $query->getResult()[0];

        $data_kerabat_betina = array();
        $data_kerabat_jantan = array();

        if (!empty($data->id_babon)) {
            $query_babon  = $this->db->query("SELECT a.* FROM " . $this->table . " a
                WHERE a.id_babon='$data->id_babon' AND a.id!='$id'
                ");
                
            $data_babon   = $query_babon->getResult();

            if (!empty($data_babon)) {
                foreach ($data_babon as $key => $value) {

                    $query_ring  = $this->db->query("SELECT br.kode FROM br_ternak_ring btr
                        LEFT JOIN br_ring br ON br.id=btr.id_ring
                        WHERE btr.id_ternak='$value->id' 
                        ");
                    $result_ring = $query_ring->getResult();

                    $ring = "[tidak ada ring]";
                    if (!empty($result_ring)) {
                        $rings = "";
                        foreach ($result_ring as $key_ring => $value_ring) {
                            $ring .=$value_ring->kode." ";
                        }
                        $ring = $rings;
                    }
                    
                    $data_kerabat_betina[] = array(
                        "id"        => encrypt_url($value->id),
                        "dari"      => "Betina",
                        "ring"      => $ring,
                        "tipe"      => $value->tipe,
                        "kelamin"   => $value->kelamin,
                        "nama"      => $value->nama,
                        "deskripsi" => $value->deskripsi,
                        "foto"      => img_data('ternak_foto/'.$value->foto),
                        "foto_raw"  => $value->foto,
                    );
                }
            }

        }

        if (!empty($data->id_jantan)) {
            $query_babon  = $this->db->query("SELECT a.* FROM " . $this->table . " a
                WHERE a.id_jantan='$data->id_jantan' AND a.id!='$id'
                ");
                
            $data_jantan   = $query_babon->getResult();

            if (!empty($data_jantan)) {
                foreach ($data_jantan as $key => $value) {

                    $query_ring  = $this->db->query("SELECT br.kode FROM br_ternak_ring btr
                        LEFT JOIN br_ring br ON br.id=btr.id_ring
                        WHERE btr.id_ternak='$value->id' 
                        ");
                    $result_ring = $query_ring->getResult();

                    $ring = "[tidak ada ring]";
                    if (!empty($result_ring)) {
                        $rings = "";
                        foreach ($result_ring as $key_ring => $value_ring) {
                            $ring .=$value_ring->kode." ";
                        }
                        $ring = $rings;
                    }
                    
                    $data_kerabat_jantan[] = array(
                        "id"        => encrypt_url($value->id),
                        "dari"      => "Jantan",
                        "ring"      => $ring,
                        "tipe"      => $value->tipe,
                        "kelamin"   => $value->kelamin,
                        "nama"      => $value->nama,
                        "deskripsi" => $value->deskripsi,
                        "foto"      => img_data('ternak_foto/'.$value->foto),
                        "foto_raw"  => $value->foto,
                    );
                }
            }

        }

        $data_kerabat = array_merge($data_kerabat_betina, $data_kerabat_jantan);


        return $data_kerabat;
    }

    public function detailData($id){
        $id = decrypt_url($id);
        $query = $this->db->query("SELECT a.*,
                    babon.tipe AS 'babon_tipe',
                    babon.nama AS 'babon_nama',
                    jantan.tipe AS 'jantan_tipe',
                    jantan.nama AS 'jantan_nama',
                    ring.kode AS 'ring'
                FROM " . $this->table . " a
                LEFT JOIN " . $this->table . " babon ON babon.id=a.id_babon
                LEFT JOIN " . $this->table . " jantan ON jantan.id=a.id_jantan
                LEFT JOIN br_ternak_ring btr ON btr.id_ternak=a.id
                LEFT JOIN br_ring ring ON ring.id=btr.id_ring
                WHERE a.id='".$id."' 
                ORDER BY a.id DESC
        ");

        $data = $query->getResult()[0]; 
        $data->id           = encrypt_url($data->id);
        $data->id_babon     = encrypt_url($data->id_babon);
        $data->id_jantan    = encrypt_url($data->id_jantan);
        if (!empty($data->foto)) {
            $data->foto_raw     = $data->foto; 
            $data->foto         = img_data('ternak_foto/'.$data->foto); 
        }

        return $data;
    }

    public function allDataKeturunan($id){
        $id = decrypt_url($id);
        $query = $this->db->query("SELECT a.*
                FROM " . $this->table . " a
                WHERE a.id_babon='".$id."' OR a.id_jantan='".$id."' 
                ORDER BY a.id DESC
        ");

        $data = $query->getResult();
        
        foreach ($data as $key => $value) {
            $query_ring  = $this->db->query("SELECT br.kode FROM br_ternak_ring btr
                        LEFT JOIN br_ring br ON br.id=btr.id_ring
                        WHERE btr.id_ternak='$value->id' 
                        ");
            $result_ring = $query_ring->getResult();

            $ring = "[tidak ada ring]";
            if (!empty($result_ring)) {
                $rings = "";
                foreach ($result_ring as $key_ring => $value_ring) {
                    $ring .=$value_ring->kode." ";
                }
                $ring = $rings;
            }

            $data[$key]->id           = encrypt_url($value->id);
            $data[$key]->id_babon     = encrypt_url($value->id_babon);
            $data[$key]->id_jantan    = encrypt_url($value->id_jantan);
            $data[$key]->ring         = $ring;
            if (!empty($value->foto)) {
                $data[$key]->foto_raw     = $value->foto; 
                $data[$key]->foto         = img_data('ternak_foto/'.$value->foto); 
            }
        }

        return $data;
    }

    public function allDataKenariInfo($id){
        $id = decrypt_url($id);
        $query = $this->db->query("SELECT bri.nama AS info,a.nama
                FROM br_ternak_info a
                LEFT JOIN br_ref_info bri ON bri.id=a.id_ref_info
                WHERE a.id_ternak='".$id."' 
                ORDER BY a.id DESC
        ");

        $data = $query->getResult(); 
        return  (!empty($data)) ? $data : array() ;
    }


}