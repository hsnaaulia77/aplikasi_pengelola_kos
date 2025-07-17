<?php

namespace App\Controllers;

use App\Models\TagihanModel;
use App\Models\KmrPenghuniModel;

class Tagihan extends BaseController
{
    public function index()
    {
        $model = new TagihanModel();
        $data['tagihan'] = $model
            ->select('tb_tagihan.*, tb_kmr_penghuni.id as relasi_id')
            ->join('tb_kmr_penghuni', 'tb_kmr_penghuni.id = tb_tagihan.id_kmr_penghuni')
            ->findAll();
        return view('tagihan/index', $data);
    }

    public function create()
    {
        $data['relasi'] = (new KmrPenghuniModel())->findAll();
        return view('tagihan/create', $data);
    }

    public function store()
    {
        $model = new TagihanModel();
        $model->save([
            'bulan'           => $this->request->getPost('bulan'),
            'id_kmr_penghuni' => $this->request->getPost('id_kmr_penghuni'),
            'jml_tagihan'     => $this->request->getPost('jml_tagihan'),
        ]);
        return redirect()->to('/tagihan');
    }

    public function edit($id)
    {
        $model = new TagihanModel();
        $data['tagihan'] = $model->find($id);
        $data['relasi'] = (new KmrPenghuniModel())->findAll();
        return view('tagihan/edit', $data);
    }

    public function update($id)
    {
        $model = new TagihanModel();
        $model->update($id, [
            'bulan'           => $this->request->getPost('bulan'),
            'id_kmr_penghuni' => $this->request->getPost('id_kmr_penghuni'),
            'jml_tagihan'     => $this->request->getPost('jml_tagihan'),
        ]);
        return redirect()->to('/tagihan');
    }

    public function delete($id)
    {
        $model = new TagihanModel();
        $model->delete($id);
        return redirect()->to('/tagihan');
    }
}
