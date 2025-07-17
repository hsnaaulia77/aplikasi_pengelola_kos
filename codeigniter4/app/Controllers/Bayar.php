<?php

namespace App\Controllers;

use App\Models\BayarModel;
use App\Models\TagihanModel;

class Bayar extends BaseController
{
    public function index()
    {
        $model = new BayarModel();
        $data['bayar'] = $model
            ->select('tb_bayar.*, tb_tagihan.bulan as tagihan_bulan')
            ->join('tb_tagihan', 'tb_tagihan.id = tb_bayar.id_tagihan')
            ->findAll();
        return view('bayar/index', $data);
    }

    public function create()
    {
        $data['tagihan'] = (new TagihanModel())->findAll();
        return view('bayar/create', $data);
    }

    public function store()
    {
        $model = new BayarModel();
        $model->save([
            'id_tagihan' => $this->request->getPost('id_tagihan'),
            'jml_bayar'  => $this->request->getPost('jml_bayar'),
            'status'     => $this->request->getPost('status'),
        ]);
        return redirect()->to('/bayar');
    }

    public function edit($id)
    {
        $model = new BayarModel();
        $data['bayar'] = $model->find($id);
        $data['tagihan'] = (new TagihanModel())->findAll();
        return view('bayar/edit', $data);
    }

    public function update($id)
    {
        $model = new BayarModel();
        $model->update($id, [
            'id_tagihan' => $this->request->getPost('id_tagihan'),
            'jml_bayar'  => $this->request->getPost('jml_bayar'),
            'status'     => $this->request->getPost('status'),
        ]);
        return redirect()->to('/bayar');
    }

    public function delete($id)
    {
        $model = new BayarModel();
        $model->delete($id);
        return redirect()->to('/bayar');
    }
}
