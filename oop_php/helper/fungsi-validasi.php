<?php

require_once 'fungsi-pesan-error.php';

function validasi(array $listInput)
{
    # variabel berisi inputan baik dari metode POST mau pun GET
    $request = $_REQUEST;
    # variabel yang akan berisi kumpulan pesan error
    $errors = [];
    # mengakses variabel $listPesanError yang ada di file `fungsi-pesan-error.php`
    global $listPesanError;

    # perulangan untuk array terluar (berisi nama input)
    foreach ($listInput as $input => $listPeraturan) {
        # perulangan untuk sub array (berisi nama peraturan)
        foreach ($listPeraturan as $peraturan) {
            $namaFungsi = 'lolos' . ucfirst($peraturan);
            $lolos = $namaFungsi(@$request[$input]);

            # jika tidak lolos
            if (!$lolos) {
                if (!is_array(@$errors[$input])) {
                    $errors += [$input => []];
                }
                
                array_push($errors[$input], $listPesanError[$peraturan]($input));
            }
        }
    }

    return $errors;
}

function lolosRequired($nilai)
{
    return (bool) @$nilai;
}

function lolosNumeric($nilai)
{
    return is_numeric($nilai);
}
