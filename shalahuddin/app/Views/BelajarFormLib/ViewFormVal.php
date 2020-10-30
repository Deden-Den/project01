<?php

$data = [
    'name' => 'username',
    'id' => 'username',
    'placeholder' => 'Masukan username anda',
    'style' => 'witdh:50%',
];

if ($validasi != "") {
    foreach ($validasi as $pesan) {
        echo $pesan;
        echo "<br><br>";
        # code...
    }
}



echo form_open(base_url() . '/public/BelajarLibrary/kirimForm');
echo "Username : ";
echo form_input($data);
echo "<br>";
echo "Pendidikan Terakhir: ";
echo
    form_dropdown('pendidikan', $opsi);
echo "<br>";
echo form_submit('kirim', 'Kirim Data');
echo form_close();
