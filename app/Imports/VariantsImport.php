<?php

namespace App\Imports;

use App\Models\AddVariant;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class VariantsImport implements ToCollection, WithStartRow
{
    public function startRow(): int
    {
        return 2; // Skip the first row and start from the second row
    }
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row) {
            // Ensure there are enough columns in the row
            if (count($row) < 15) {
                continue; // Skip invalid rows
            }
            $carName = $row[0] ? trim($row[0]) : null;
            $brandName = $row[1] ? trim($row[1]) : null;
            $carModelName = $row[2] ? trim($row[2]) : null;
            $availableStatus = $row[3] ? trim($row[3]) : null;
            $price = $row[4] ? trim($row[4]) : null;
            $priceType = $row[5] ? trim($row[5]) : null;
            $bodyType = $row[6] ? trim($row[6]) : null;
            $mileageARAI = $row[7] ? trim($row[7]) : null;
            $engine = $row[8] ? trim($row[8]) : null;
            $fuelType = $row[9] ? trim($row[9]) : null; // e.g., "Petrol, CNG"
            $transmission = $row[10] ? trim($row[10]) : null; // e.g., "Automatic, Manual"
            $seatingCapacity = $row[11] ? trim($row[11]) : null;
            $userReportedMileage = $row[12] ? trim($row[12]) : null;
            $keyFeatures = $row[13] ? trim($row[13]) : null;
            $summary = $row[14] ? trim($row[14]) : null;

            // Convert  fuelType and transmission to arrays
            $fuelTypeArray = $fuelType ? array_map('trim', explode(',', $fuelType)) : [];
            $milages = $mileageARAI ? array_map('trim', explode(',', $mileageARAI)) : [];
            $mlgs = [];
            foreach ($fuelTypeArray as $index => $type) {
                $mlgs[$type] = $milages[$index] ?? null;
            }
            $transmissionArray = $transmission ? array_map('trim', explode(',', $transmission)) : [];

            // Save data to the database
            $data = AddVariant::updateOrCreate(
                ['carmodalname' => $carModelName], // The criteria to search for duplicates in carmodalname
                [
                    'brandname' => $brandName,
                    'carname' => $carName,
                    'availabelstatus' => $availableStatus,
                    'price' => $price,
                    'pricetype' => $priceType,
                    'bodytype' => $bodyType,
                    'mileage' => json_encode($mlgs),
                    'engine' => $engine,
                    'fueltype' => json_encode($fuelTypeArray),
                    'transmission' => json_encode($transmissionArray),
                    'seatingcapacity' => $seatingCapacity,
                    'userreportedmilage' => $userReportedMileage,
                    'keyfeatures' => $keyFeatures,
                    'summary' => $summary,
                ]
            );

            // dd($data);
        }
    }

}
