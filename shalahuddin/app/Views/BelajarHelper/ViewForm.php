<?php

$data = [
    'nama' => 'username',
    'id' => 'username',
    'placeholder' => 'Masukan username anda',
    'style' => 'witdh:50%',
];

$opsi = [
    'sd' => 'Sekolah Dasar',
    'smp' => 'Sekolah Menengah Pertama',
    'sma' => 'Sekolah Menengah Atas',
    's1' => 'Strata I'
];

echo "Username : ";
echo form_input($data);
echo "<br>";
echo "Pendidikan : ";
echo
    form_dropdown('pendidikan', $opsi, 'sma');
