<?php
$name = 'Rafidamara';
print 'Nama: ' . $name;

// Ternary
print $name == 'Rafidamara' ? 'Ini Benar' : 'Ini Salah'; // Hasil Benar

$nomor = print $name; 
print $nomor;

$list_name	= array('Anggur', 'Jeruk', 'Strawberry');
$sum = 0;
foreach ($list_name as $name) {
	$sum = $sum + print $name . '<br/>';
}
print $sum;