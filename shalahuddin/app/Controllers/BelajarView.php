<?php

namespace App\Controllers;

class BelajarView extends BaseController
{
    public function index()
    {
        echo view('BelajarView/cobaaView');
        echo view('BelajarView/cobaaView2');
    }
    public function index2($nama, $hari)
    {
        $data = [
            'nama' => $nama,
            'hari' => $hari
        ];
        echo view('BelajarView/cobaLagi', $data);
    }
    private function kali($a, $b)
    {
        return $a * $b;
    }
    public function indexKali()
    {
        $a = 7;
        $b = 10000;
        $data = [
            'a' => $a,
            'b' => $b,
            'kali' => $this->kali($a, $b),
        ];
        echo view('BelajarView/viewKali', $data);
    }
    //--------------------------------------------------------------------
    //cara lain : $data['nama']=$nama;
}
