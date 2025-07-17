<?php

namespace App\Controllers;

use App\Models\KmrPenghuniModel;
use App\Models\KamarModel;
use App\Models\PenghuniModel;

class KmrPenghuni extends BaseController
{
    public function index()
    {
        $model = new KmrPenghuniModel();
        $data['relasi'] = $model
            ->select('tb_kmr_penghuni.*, tb_kamar.nomor as kamar_nomor, tb_penghuni.nama as penghuni_nama')
            ->join('tb_kamar', 'tb_kamar.id = tb_kmr_penghuni.id_kamar')
            ->join('tb_penghuni', 'tb_penghuni.id = tb_kmr_penghuni.id_penghuni')
            ->findAll();
        return view('relasi/index', $data);
    }

    public function create()
    {
        $data['kamar'] = (new KamarModel())->findAll();
        $data['penghuni'] = (new PenghuniModel())->findAll();
        return view('relasi/create', $data);
    }

    public function store()
    {
        $model = new KmrPenghuniModel();
        $model->save([
            'id_kamar'    => $this->request->getPost('id_kamar'),
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'tgl_masuk'   => $this->request->getPost('tgl_masuk'),
            'tgl_keluar'  => $this->request->getPost('tgl_keluar'),
        ]);
        return redirect()->to('/relasi');
    }

    public function edit($id)
    {
        $model = new KmrPenghuniModel();
        $data['relasi'] = $model->find($id);
        $data['kamar'] = (new KamarModel())->findAll();
        $data['penghuni'] = (new PenghuniModel())->findAll();
        return view('relasi/edit', $data);
    }

    public function update($id)
    {
        $model = new KmrPenghuniModel();
        $model->update($id, [
            'id_kamar'    => $this->request->getPost('id_kamar'),
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'tgl_masuk'   => $this->request->getPost('tgl_masuk'),
            'tgl_keluar'  => $this->request->getPost('tgl_keluar'),
        ]);
        return redirect()->to('/relasi');
    }

    public function delete($id)
    {
        $model = new KmrPenghuniModel();
        $model->delete($id);
        return redirect()->to('/relasi');
    }
}
