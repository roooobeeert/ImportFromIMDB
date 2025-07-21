<?php


require __DIR__ . '/../vendor/autoload.php';


use Rober\ImportFromIMDB\Service\IMDBImporter;

$importer = new IMDBImporter();

$csvFile = __DIR__ . '/data/imdb_export.csv';

try {
    $movies = $importer->import_imdb($csvFile);
    print_r($movies);
} catch (Exception $e) {
    echo 'Fehler: ' . $e->getMessage();
}



//  [468] => Array
//         (
//             [const] => tt0947798
//             [your_rating] => 10
//             [date_rated] => 2019-02-08
//             [title] => Black Swan
//             [original_title] => Black Swan
//             [url] => https://www.imdb.com/title/tt0947798
//             [title_type] => Film
//             [imdb_rating] => 8.0
//             [runtime_(mins)] => 108
//             [year] => 2010
//             [genres] => Drama, Thriller
//             [num_votes] => 864407
//             [release_date] => 2011-01-20
//             [directors] => Darren Aronofsky
//         )

//     [469] => Array
//         (
//             [const] => tt0217869
//             [your_rating] => 10
//             [date_rated] => 2019-02-08
//             [title] => Unbreakable - Unzerbrechlich
//             [original_title] => Unbreakable
//             [url] => https://www.imdb.com/title/tt0217869
//             [title_type] => Film
//             [imdb_rating] => 7.3
//             [runtime_(mins)] => 106
//             [year] => 2000
//             [genres] => Mystery, Drama, Science-Fiction, Thriller
//             [num_votes] => 458539
//             [release_date] => 2000-12-28
//             [directors] => M. Night Shyamalan
//         )
