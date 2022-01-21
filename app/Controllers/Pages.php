<?php

namespace App\Controllers;

use App\Models\Lowker_model;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->lowker = new Lowker_model();
    }

    public function cari()
    {
        $nama_lowongan = $this->request->getPost('nama_lowongan');
        if ($nama_lowongan === "") {
            return redirect()->to('index');
        }
        $penempatan = $this->request->getPost('penempatan');
        if ($penempatan === "all") {
            $penempatan = "Bantul, Sleman, Yogyakarta";
        }
        $pendidikan = $this->request->getPost('pendidikan');
        if ($pendidikan === "all" || $pendidikan === "umum") {
            $pendidikan = "SMA, D3, S1, S2";
        }
        $time = $_POST['time'];
        $waktu_kerja = "";
        foreach ($time as $waktu) {
            $waktu_kerja .= $waktu . ", ";
        }
        $waktu_kerja = substr($waktu_kerja, 0, -2);

        $data = [
            'nama_lowongan' => $nama_lowongan,
            'penempatan' => $penempatan,
            'pendidikan' => $pendidikan,
            'waktu_kerja' => $waktu_kerja,
        ];

        $search = $this->lowker->search($data);

        if ($search['data'] === "null") {
            $datalowongan = "";
        } else {
            $datalowongan = $search['data'];
        }

        $data = [
            'title' => 'JOGJALOWKER | Search',
            'lowker' => $datalowongan
        ];

        return view('pages/search', $data);
    }

    public function index()
    {

        $data = [
            'title' => 'JOGJALOWKER | Home',
            'lowker' => $this->lowker->getAllLowker()
        ];

        return view('pages/home', $data);
    }

    public function format()
    {
        $data = [
            'title' => 'LOWKERJOGJA | Format Iklan'
        ];
        return view('pages/format', $data);
    }

    public function kebijakan()
    {
        $data = [
            'title' => 'LOWKERJOGJA | Kebijakan'
        ];
        return view('pages/kebijakan', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'LOWKERJOGJA | Tentang Kami'
        ];
        return view('pages/tentang', $data);
    }

    public function download()
    {
        $data = [
            'title' => 'LOWKERJOGJA | Download Aplikasi'
        ];
        return view('pages/download', $data);
    }

    public function detail($id_lowker)
    {
        $lowker = $this->lowker->getById($id_lowker);
        $kriteria = explode("\n", $lowker['kriteria']);
        if ($lowker['benefit'] === "-") {
            $benefit = "-";
        } else {
            $benefit = explode("\n", $lowker['benefit']);
        }

        $data = [
            'title' => 'LOWKERJOGJA | Detail Lowongan',
            'lowkerid' => $this->lowker->getById($id_lowker),
            'kriteria' => $kriteria,
            'benefit' => $benefit
        ];
        return view('pages/detail', $data);
    }

    public function pasang()
    {
        $data = [
            'title' => 'LowkerJogja - Pasang Lowongan Kerja'
        ];
        return view('pages/pasang', $data);
    }

    //--------------------------------------------------------------------

}
