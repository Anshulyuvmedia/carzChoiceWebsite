<?php

namespace App\Imports;

use App\Models\CarList;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CarListsImport implements ToCollection, WithStartRow
{
    public function startRow(): int
    {
        return 2; // Skip the first row and start from the second row
    }
    public function collection(Collection $rows)
    {
        // dd($rows);
        $carData = [];

        foreach ($rows as $row) {
            // Ensure there are enough columns in the row
            if (count($row) < 4 || collect($row)->every(fn($value) => trim($value) === '')) {
                continue;
            }

            $brandName = $row[0] ? trim($row[0]) : null;
            $carName = $row[1] ? trim($row[1]) : null;
            $colorNames = $row[2] ? trim($row[2]) : null;
            // dd($colorNames);
            $colorCodes = explode(',', $row[3] ? trim($row[3]) : null); // Split color codes by comma

            // Use a combination of brandName and carName as the key to aggregate data
            $key = "{$brandName}-{$carName}";

            // Initialize the car entry if not already set
            if (!isset($carData[$key])) {
                $carData[$key] = [
                    'brandname' => $brandName,
                    'carname' => $carName,
                    'colors' => []
                ];
            }

            // Combine color names and codes, making sure they are in pairs
            if ($colorNames!=null) {
                $combinedColors = [
                    'label' => $colorNames,
                    'value' => array_map('trim', $colorCodes) // Combine and trim codes
                ];

                $carData[$key]['colors'][] = $combinedColors;
            }
        }
        // dd($carData);
        // Convert colors array to JSON and save to the database
        foreach ($carData as $data) {
            CarList::updateOrCreate(
                ['brandname' => $data['brandname'], 'carname' => $data['carname']],
                ['colors' => json_encode($data['colors'])]
            );
        }
    }


}
