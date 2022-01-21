<?php

namespace App\Models;

use GuzzleHttp\Client;
use CodeIgniter\Model;

class Lowker_model extends Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            // 'base_uri' => 'http://api.lowkerjogja.com/api/'
            //'base_uri' => 'http://localhost/magang/apilowker/api/'
            'base_uri' => 'http://apilowker.zainportfolio.com/api/'
        ]);
    }

    public function getAllLowker()
    {
        $response = $this->_client->request('GET', 'lowker/pengurutanlowker', [
            'query' => []
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getById($id_lowker)
    {
        $response = $this->_client->request('GET', 'lowker/getlowker', [
            'query' => [
                'id_lowker' => $id_lowker
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function search($data)
    {
        $data1 = [
            'nama_lowongan' => $data['nama_lowongan'],
            'penempatan' => $data['penempatan'],
            'pendidikan' => $data['pendidikan'],
            'waktu_kerja' => $data['waktu_kerja'],
        ];
        $response = $this->_client->request('POST', 'lowker/searchlowongan', [
            'form_params' => $data1,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
