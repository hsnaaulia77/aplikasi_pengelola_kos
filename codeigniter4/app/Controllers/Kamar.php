<?php

namespace App\Controllers;

use App\Models\KamarModel;

class Kamar extends BaseController
{
    public function index()
    {
        $model = new KamarModel();
        $data['kamar'] = $model->findAll();
        return view('kamar/index', $data);
    }

    public function create()
    {
        return view('kamar/create');
    }

    public function store()
    {
        $model = new KamarModel();
        $model->save([
            'nomor' => $this->request->getPost('nomor'),
            'harga' => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/kamar');
    }

    public function edit($id)
    {
        $model = new KamarModel();
        $data['kamar'] = $model->find($id);
        return view('kamar/edit', $data);
    }

    public function update($id)
    {
        $model = new KamarModel();
        $model->update($id, [
            'nomor' => $this->request->getPost('nomor'),
            'harga' => $this->request->getPost('harga'),
        ]);
        return redirect()->to('/kamar');
    }

    public function delete($id)
    {
        $model = new KamarModel();
        $model->delete($id);
        return redirect()->to('/kamar');
    }
}
