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
            $colorNames = explode(',', $row[2]); // Split color names by comma
            $colorCodes = explode(',', $row[3]); // Split color codes by comma

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
            if (count($colorNames) === count($colorCodes)) {
                $combinedColors = [
                    'label' => implode(',', $colorNames), // Combine labels
                    'value' => array_map('trim', $colorCodes) // Combine and trim codes
                ];

                $carData[$key]['colors'][] = $combinedColors;
            }
        }

        // Convert colors array to JSON and save to the database
        foreach ($carData as $data) {
            CarList::updateOrCreate(
                ['brandname' => $data['brandname'], 'carname' => $data['carname']],
                ['colors' => json_encode($data['colors'])]
            );
        }
        // dd($carData);
    }


}
