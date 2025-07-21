<?php

namespace Rober\ImportFromIMDB\Service;

class IMDBImporter
{
    public function import_imdb(string $csvFile): array
    {
        if (!file_exists($csvFile)) {
            throw new \InvalidArgumentException("File not found: $csvFile");
        }

        $movies = [];

        if (($handle = fopen($csvFile, 'r')) !== false) {
            $header = fgetcsv($handle);

            while (($row = fgetcsv($handle)) !== false) {
                $movie = [];
                foreach ($header as $index => $columnName) {
                    // Clean column name to avoid spaces etc.
                    $key = strtolower(str_replace(' ', '_', $columnName));
                    $movie[$key] = $row[$index];
                }
                $movies[] = $movie;
            }

            fclose($handle);
        }

        return $movies;
    }
}
