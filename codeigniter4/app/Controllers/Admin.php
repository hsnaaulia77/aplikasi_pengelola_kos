<?php

namespace App\Controllers;

use App\Models\PenghuniModel;
use App\Models\KamarModel;
use App\Models\KmrPenghuniModel;
use App\Models\TagihanModel;
use App\Models\BayarModel;

class Admin extends BaseController
{
    public function index()
    {
        $penghuniModel = new PenghuniModel();
        $kamarModel = new KamarModel();
        $kmrPenghuniModel = new KmrPenghuniModel();
        $tagihanModel = new TagihanModel();
        $bayarModel = new BayarModel();

        // Jumlah penghuni aktif (tgl_keluar NULL)
        $data['jml_penghuni_aktif'] = $penghuniModel->where('tgl_keluar', null)->countAllResults();

        // Jumlah kamar
        $data['jml_kamar'] = $kamarModel->countAllResults();

        // Jumlah kamar kosong
        $occupied = $kmrPenghuniModel->select('id_kamar')->where('tgl_keluar', null)->findAll();
        $occupiedIds = array_column($occupied, 'id_kamar');
        $data['jml_kamar_kosong'] = empty($occupiedIds)
            ? $data['jml_kamar']
            : $kamarModel->whereNotIn('id', $occupiedIds)->countAllResults();

        // Jumlah tagihan bulan ini
        $bulan = date('Y-m');
        $data['jml_tagihan_bulan_ini'] = $tagihanModel->where('bulan', $bulan)->countAllResults();

        // Jumlah tagihan belum lunas bulan ini
        $tagihanBulanIni = $tagihanModel->where('bulan', $bulan)->findAll();
        $belumLunas = 0;
        foreach ($tagihanBulanIni as $t) {
            $bayar = $bayarModel->where('id_tagihan', $t['id'])->where('status', 'lunas')->first();
            if (!$bayar) {
                $belumLunas++;
            }
        }
        $data['jml_tagihan_belum_lunas'] = $belumLunas;

        return view('admin/index', $data);
    }
}
