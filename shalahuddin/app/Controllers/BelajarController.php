<?php

namespace App\Controllers;

class BelajarController extends BaseController
{
    public function index()
    {
        echo "Hallo dunia, Selamat malam minggu... ";
    }
    public function index2($nama, $hari)
    {
        echo "Hallo, $nama Selamat malam $hari... ";
    }
    private function kali($a, $b)
    {
        echo $a * $b;
    }
    public function indexKali()
    {
        $this->kali(5, 6);
    }
    //--------------------------------------------------------------------

}
