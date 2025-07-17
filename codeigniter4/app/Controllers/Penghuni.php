<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
    public function index()
    {
        $model = new PenghuniModel();
        $data['penghuni'] = $model->findAll();
        return view('penghuni/index', $data);
    }

    public function create()
    {
        return view('penghuni/create');
    }

    public function store()
    {
        $model = new PenghuniModel();
        $model->save([
            'nama'      => $this->request->getPost('nama'),
            'no_ktp'    => $this->request->getPost('no_ktp'),
            'no_hp'     => $this->request->getPost('no_hp'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
        ]);
        return redirect()->to('/penghuni');
    }

    public function edit($id)
    {
        $model = new PenghuniModel();
        $data['penghuni'] = $model->find($id);
        return view('penghuni/edit', $data);
    }

    public function update($id)
    {
        $model = new PenghuniModel();
        $model->update($id, [
            'nama'      => $this->request->getPost('nama'),
            'no_ktp'    => $this->request->getPost('no_ktp'),
            'no_hp'     => $this->request->getPost('no_hp'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
            'tgl_keluar'=> $this->request->getPost('tgl_keluar'),
        ]);
        return redirect()->to('/penghuni');
    }

    public function delete($id)
    {
        $model = new PenghuniModel();
        $model->delete($id);
        return redirect()->to('/penghuni');
    }
}
