<?php

namespace App\Controllers;

use App\Models\BrTernakModel;

class Be_Produk extends BaseController
{

    protected $config;

    public function __construct()
    {
        // $this->config     = config('App'); // bo settings
        $this->brTernakModel = new BrTernakModel();
    }
    public function insertData()
    {
        // Mengambil data yang akan diinsert
        $data = [
            'id_babon' => $this->request->getPost('id_babon'),
            'id_jantan' => $this->request->getPost('id_jantan'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'is_penjantan' => $this->request->getPost('is_penjantan'),
            'tipe' => $this->request->getPost('tipe'),
            'kelamin' => $this->request->getPost('kelamin'),
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto'),
            'foto_identitas' => $this->request->getPost('foto_identitas'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            // Tambahkan kolom dan nilai lain sesuai kebutuhan Anda
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->request->getPost('created_by'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->request->getPost('updated_by')
            // Isi dengan data yang sesuai
        ];

        // Memanggil model untuk melakukan insert
        $encryptedId = $this->brTernakModel->insertData($data);

        // Lakukan operasi lain setelah insert jika diperlukan

        return redirect()->to(base_url('be_produk/create' . $encryptedId));
    }

    public function updateData($encryptedId)
    {
        $id = decrypt_url($encryptedId);

        // Mengambil data yang akan diupdate
        $data = [
            'id_babon' => $this->request->getPost('id_babon'),
            'id_jantan' => $this->request->getPost('id_jantan'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'is_penjantan' => $this->request->getPost('is_penjantan'),
            'tipe' => $this->request->getPost('tipe'),
            'kelamin' => $this->request->getPost('kelamin'),
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto'),
            'foto_identitas' => $this->request->getPost('foto_identitas'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            // Tambahkan kolom dan nilai lain sesuai kebutuhan Anda
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->request->getPost('created_by'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->request->getPost('updated_by')
            // Isi dengan data yang sesuai
        ];

        // Memanggil model untuk melakukan update
        $affectedRows = $this->brTernakModel->updateData($id, $data);

        // Lakukan operasi lain setelah update jika diperlukan

        return redirect()->to(base_url('be_produk/create' . $encryptedId));
    }

    public function deleteData($encryptedId)
    {
        $id = decrypt_url($encryptedId);

        // Memanggil model untuk melakukan delete
        $affectedRows = $this->brTernakModel->deleteData($id);

        // Lakukan operasi lain setelah delete jika diperlukan

        return redirect()->to(base_url('br-ternak'));
    }

    public function allData()
    {
        // Memanggil model untuk mendapatkan semua data
        $data['brTernak'] = $this->brTernakModel->allData();

        // Menampilkan data dalam view
        return view('be_produk/create', $data);
    }

    public function allDataKenari()
    {
        // Memanggil model untuk mendapatkan semua data kenari
        $data['brTernakKenari'] = $this->brTernakModel->allDataKenari();

        // Menampilkan data dalam view
        return view('be_produk/create', $data);
    }

    public function detailData($encryptedId)
    {
        $id = decrypt_url($encryptedId);

        // Memanggil model untuk mendapatkan detail data
        $data['brTernak'] = $this->brTernakModel->detailData($id);

        // Menampilkan data dalam view
        return view('be_produk/create', $data);
    }
    public function index()
    {
        $model = new BrTernakModel();
        $data['data'] = $model->allData(); // Mengambil data dari model

        return view('be_produk/index', $data);
    }
    public function create()
    {
        $data['config'] = $this->config;

        return view('be_produk/create', $data);
    }
}
