<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLib;

class BelajarLibrary extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $model = new ModelLib();

        $data["opsi"] = $model->opsiPendidikan();
        $data["validasi"] = "";
        echo view('BelajarFormLib/ViewFormVal', $data);
    }

    public function kirimForm()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $model = new ModelLib();

        $dataInput = [
            'username'   => $this->request->getPost('username'),
            'pendidikan' => $this->request->getPost('pendidikan')
        ];

        if (!$validation->run($dataInput, "formBelajarLib")) {
            $data["opsi"] = $model->opsiPendidikan();
            $data["validasi"] = $validation->getErrors();

            echo view('BelajarFormLib/ViewFormVal', $data);
        } else {
            if (!array_key_exists($dataInput['pendidikan'], $model->opsiPendidikan())) {
                echo "Data pendidikan terakhir yang anda masukan tidak ada dalam database kami";
            }
            //lebih direkomendasikan menggunakan view tersendiri
            $pilihan = $dataInput['pendidikan'];
            $opsi = $model->opsiPendidikan();
            echo "Halo, " . $dataInput['username'] . " pendidikan terakhir anda adalah " . $opsi[$pilihan];
        }
    }
}


//$pilihan = $dataInput['pendidikan'];
//$opsi = $model->opsiPendidikan();
//echo "Halo, ".$dataInput['username']." pendidikan terakhir anda adalah ".$opsi[$pilihan];
