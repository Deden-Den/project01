<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBelajar;

class belajarModelController extends BaseController
{
    public function kalkulator()
    {
        $a = 5;
        $b = 9;
        $model = new ModelBelajar();
        $hasilkali = $model->hasilKali($a, $b);

        $data = [
            'a' => $a,
            'b' => $b,
            'hasilkali' => $hasilkali
        ];

        return view('BelajarModel/cobaModel', $data);
    }

    //--------------------------------------------------------------------

}
