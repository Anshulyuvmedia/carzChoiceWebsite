<?php

namespace App\Imports;

use App\Models\AddVariant;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Support\Facades\Session;

class VariantsImport implements ToCollection, WithStartRow, WithChunkReading
{
    public function startRow(): int
    {
        return 2; // Skip the first row and start from the second row
    }

    public function collection(Collection $rows)
    {
        $insertedCount = 0;
        $updatedCount = 0;
        $updatedVariants = []; // Array to hold names of updated variants

        foreach ($rows as $row) {
            if (count($row) < 15) {
                continue; // Skip invalid rows
            }

            $carName = $row[0] ? trim($row[0]) : 'Car Name';
            $brandName = $row[1] ? trim($row[1]) : 'Brand Name';
            $carModelName = $row[2] ? trim($row[2]) : 'Model Name';
            $availableStatus = $row[3] ? trim($row[3]) : '0';
            $price = $row[4] ? trim($row[4]) : '0';
            $priceType = $row[5] ? trim($row[5]) : 'Lakhs';
            $bodyType = $row[6] ? trim($row[6]) : null;
            $mileageARAI = $row[7] ? trim($row[7]) : null;
            $engine = $row[8] ? trim($row[8]) : null;
            $fuelType = $row[9] ? trim($row[9]) : null;
            $transmission = $row[10] ? trim($row[10]) : null;
            $seatingCapacity = $row[11] ? trim($row[11]) : null;
            $userReportedMileage = $row[12] ? trim($row[12]) : null;
            $keyFeatures = $row[13] ? trim($row[13]) : null;
            $summary = $row[14] ? trim($row[14]) : null;

            $fuelTypeArray = $fuelType ? array_map('trim', explode(',', $fuelType)) : [];
            $milages = $mileageARAI ? array_map('trim', explode(',', $mileageARAI)) : [];
            $mlgs = [];
            foreach ($fuelTypeArray as $index => $type) {
                $mlgs[$type] = $milages[$index] ?? null;
            }
            $transmissionArray = $transmission ? array_map('trim', explode(',', $transmission)) : [];

            // Insert or update using unique_token as the unique key
            $data = AddVariant::updateOrCreate(
                [
                    'carname' => $carName,
                    'carmodalname' => $carModelName,
                ],
                [
                    'brandname' => $brandName,
                    'carname' => $carName,
                    'carmodalname' => $carModelName,
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

            if ($data->wasRecentlyCreated) {
                $insertedCount++;
            } else {
                $updatedCount++;
                $updatedVariants[] = $carModelName; // Add updated variant name to the array
            }
        }
        Session::flash('insertedCount', $insertedCount);
        Session::flash('updatedCount', $updatedCount);


        //dd("Inserted: $insertedCount, Updated: $updatedCount", "Updated Variants:", $updatedVariants);
    }

    public function chunkSize(): int
    {
        return 6000; // Process 6000 rows at a time
    }
}
