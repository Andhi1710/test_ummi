<?php

$listPesanError = [
    'required' => function ($field) {
        return "Data {$field} harus diisi.";
    },
    'numeric' => function ($field) {
        return "Data {$field} harus berupa angka numerik.";
    },
];