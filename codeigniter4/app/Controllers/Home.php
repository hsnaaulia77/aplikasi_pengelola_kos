<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\KmrPenghuniModel;
use App\Models\TagihanModel;
use App\Models\BayarModel;
use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        // Kamar kosong: kamar yang tidak ada di tb_kmr_penghuni dengan tgl_keluar NULL
        $kamarModel = new KamarModel();
        $kmrPenghuniModel = new KmrPenghuniModel();
        $tagihanModel = new TagihanModel();
        $bayarModel = new BayarModel();

        // 1. Kamar kosong
        $occupied = $kmrPenghuniModel
            ->select('id_kamar')
            ->where('tgl_keluar', null)
            ->findAll();
        $occupiedIds = array_column($occupied, 'id_kamar');
        $data['kamar_kosong'] = empty($occupiedIds)
            ? $kamarModel->findAll()
            : $kamarModel->whereNotIn('id', $occupiedIds)->findAll();

        // 2. Kamar yang harus bayar bulan ini
        $bulan = date('Y-m');
        $tagihanBulanIni = $tagihanModel
            ->where('bulan', $bulan)
            ->findAll();
        $data['tagihan_bulan_ini'] = $tagihanBulanIni;

        // 3. Kamar yang telat bayar (tagihan bulan lalu yang belum lunas)
        $bulanLalu = date('Y-m', strtotime('-1 month'));
        $tagihanBulanLalu = $tagihanModel
            ->where('bulan', $bulanLalu)
            ->findAll();

        $telat = [];
        foreach ($tagihanBulanLalu as $t) {
            $bayar = $bayarModel->where('id_tagihan', $t['id'])->where('status', 'lunas')->first();
            if (!$bayar) {
                $telat[] = $t;
            }
        }
        $data['tagihan_telat'] = $telat;

        return view('home/index', $data);
    }
}
