<?php

namespace App\Imports;

use App\Models\Produit;
use Maatwebsite\Excel\Concerns\ToModel;

class ProduitsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produit([
            'id' => $row[0],
            'Libelle' => $row[1],
            'Marque' => $row[2],
            'Prix' => $row[3],
            'Stock' => $row[4],
            'Image' => $row[5],
            'updated_at'=>$row[6],
            'created_at'=>$row[7],
        ]);
    }
}
