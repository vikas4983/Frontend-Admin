<?php 
namespace App\Imports;
use App\Models\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountriesImport implements ToModel
{
    public function model(array $row){
        return new Country([
            'name' => $row[1],
        ]);
    }
}

