<?php
$nama = 'Rafi Damara';
print_r ($nama);

$hewan = array ('Dinosaurus', 'Brontosaurus', 'Mosasaurs');
echo '<pre>';  print_r($hewan); echo '</pre>';

// Menyimpan hasil print_r ke variabel
$hewan = array(
			'nama' 		=> array ('lucy', 'tom', 'spike'),
			'type' 	=> 'Hewan Purba',
			'ukuran'	=> array (1, 3)
		);
		 
$result = print_r($hewan, true); 
echo '<pre>'; print_r($result); echo '</pre>';