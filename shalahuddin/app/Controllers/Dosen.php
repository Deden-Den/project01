<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDosen;

class Dosen extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new ModelDosen();
    }
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from dosen");


        echo "<pre>";
        print_r($query->getResult());
        echo "</pre>";


        echo "Luaran berupa object : <br";
        foreach ($query->getResult('array') as $row) {
            echo $row->nip;
            echo $row->nama;
            echo $row->jumlah_anak;
            echo "<br>";
        }
        echo "<br>";

        echo "Luaran berupa object : <br";
        foreach ($query->getResult('array') as $row) {
            echo $row['nip'];
            echo $row['nama'];
            echo $row['jumlah_anak'];
            echo "<br>";
        }
    }

    public function indexDb()
    {
        helper(['form', 'url']);
        $query = $this->dosenModel->ambildata();
        $data = [
            'dosen' => $query
        ];

        return view('Dosen/Data', $data);
    }

    public function indexCari()
    {
        helper(['form', 'url']);

        $query = $this->dosenModel->ambildata();

        $dataCari["validasi"] = "";
        $data = [
            'dosen' => $query
        ];

        echo view("Dosen/Cari", $dataCari);
        echo view("Dosen/Data", $data);
    }

    public function cari()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $dataCari = [
            'keyword' => $this->request->getPost('keyword')
        ];

        $dataCari["validasi"] = "";

        if ($validation->run($dataCari, "formCariDosen")) {
            $query = $this->dosenModel->cariData($dataCari['keyword']);
        } else {
            $query = $this->dosenModel->ambilData();
            $dataCari['validasi'] = $validation->getErrors();
        }

        $data = [
            "dosen" => $query
        ];

        echo view("Dosen/Cari", $dataCari);
        echo view("Dosen/Data", $data);
    }

    //--------------------------------------------------------------------

}
