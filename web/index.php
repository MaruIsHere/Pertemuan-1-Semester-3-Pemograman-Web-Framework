<?php

class Kendaraan {
   public $nama;
   public $warna;
   public $jenisKendaraan;
}

$motor = new Kendaraan();
$motor->nama = 'Revo';
$motor->warna = 'Merah';
$motor->jenisKendaraan = 'Roda Dua';
echo '<b>Ini adalah : <b>' . $motor->nama . '<br> <b>Berwarna<b>: ' . $motor->warna . '<br><b>Jenis Kendaraan<b> : ' . $motor->jenisKendaraan;

echo'<br>';

$mobil = new Kendaraan();
$mobil->nama = 'Toyota';
$mobil->warna = 'Hitam';
$mobil->jenisKendaraan = 'Roda Empat';
echo '<b>Ini adalah : <b>' . $mobil->nama . '<br> <b>Berwarna<b>: ' . $mobil->warna . '<br><b>Jenis Kendaraan<b> : ' . $mobil->jenisKendaraan;

?>