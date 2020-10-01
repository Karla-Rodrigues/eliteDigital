<?php

namespace App\Imports;

use App\Files;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {

        Files::create([
            'parsedFile' => json_encode($rows),
        ]);
    }
}
