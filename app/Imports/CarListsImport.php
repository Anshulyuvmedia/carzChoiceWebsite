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
        $carData = [];

        foreach ($rows as $row) {
            // Ensure there are enough columns in the row
            if (count($row) < 4) {
                continue; // Skip invalid rows
            }

            $brandName = $row[0];
            $carName = $row[1];
            $colorName = $row[2];
            $colorCode = $row[3];

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

            // Add the color to the car entry if it's not already present
            $existingColors = array_column($carData[$key]['colors'], 'value');
            if (!in_array($colorCode, $existingColors)) {
                $carData[$key]['colors'][] = [
                    'label' => $colorName,
                    'value' => $colorCode
                ];
            }
        }



        // Convert colors array to JSON and save to the database
        foreach ($carData as $data) {
            CarList::updateOrCreate(
                ['brandname' => $data['brandname'], 'carname' => $data['carname']],
                ['colors' => json_encode($data['colors'])]
            );
        }
    }


}
