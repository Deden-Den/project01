<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    public function ambildata()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from dosen");
        return $query;
    }

    public function cariData($keyword)
    {
        $db = \Config\Database::connect();
        $keyword = $db->escapeLikeString($keyword);
        $query = "select * from dosen where nip like '%$keyword%' or 
        nama like '%$keyword%'";
        return $db->query($query);
    }
}
