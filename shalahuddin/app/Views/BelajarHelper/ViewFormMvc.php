<?php

$data = [
    'nama' => 'username',
    'id' => 'username',
    'placeholder' => 'Masukan username anda',
    'style' => 'witdh:50%',
];



echo "Username : ";
echo form_input($data);
echo "<br>";
echo "Pendidikan : ";
echo
    form_dropdown('pendidikan', $opsi, 'sma');
echo "<br>";
echo "MVC";
