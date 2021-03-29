<?php

$nama = 'Rafidamara';

// umum digunakan
echo 'Nama: ' . $nama;

// jarang digunakan (menggunakan koma) - performa sedikit lebih cepat
echo 'Nama: ' , $nama;

// ternary
echo $nama == 'Rafidamara' ? 'Benar' : 'Salah'; //hasil benar
