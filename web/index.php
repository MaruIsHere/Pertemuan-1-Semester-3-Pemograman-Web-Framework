<?php

class Hewan{

   public $nama;
   public $spesies;
   public $habitat;
   public $berjalan;
   public $pakan;


}

class Kelelawar extends Hewan {

   public $aktif;
   public $penglihatan;

}

class Beruang extends Hewan {

   public $hibernasi;
   public $bertahanHidup;
   
}

$Ayam = new Hewan();
$Ayam->nama = 'Ayam Boiler';
$Ayam->spesies = '';
$Ayam->habitat = '';
$Ayam->berjalan = '';
$Ayam->pakan = '';

echo 'Nama Hewan : ' . $Ayam->nama . '<br>Spesies : ' . $Ayam->spesies . '<br>Habitat : ' . $Ayam->habitat . '<br>Berjalan Dengan : ' . $Ayam->berjalan . '<br>Memakan : ' . $Ayam->pakan;

echo 'Nama Hewan : ' . $Ayam->nama . '<br>Spesies : ' . $Ayam->spesies . '<br>Habitat : ' . $Ayam->habitat . '<br>Berjalan Dengan : ' . $Ayam->berjalan . '<br>Memakan : ' . $Ayam->pakan;

$Goa = new Kelelawar();
$Goa->nama = '';
$Goa->spesies = '';
$Goa->habitat = '';
$Goa->berjalan = '';
$Goa->pakan = '';
$Goa->aktif = '';
$Goa->penglihatan = '';

echo 'Nama Hewan : ' . $Goa->nama . '<br>Spesies : ' . $Goa->spesies . '<br>Habitat : ' . $Goa->habitat . '<br>Berjalan Dengan : ' . $Goa->berjalan . '<br>Memakan : ' . $Goa->pakan . '<br>Aktif Pada Waktu : ' . $Goa->aktif . 'Penglihatan Dengan : ' . $Goa->penglihatan;


$Kutub = new Beruang();
$Kutub->nama = '';
$Kutub->spesies = '';
$Kutub->habitat = '';
$Kutub->berjalan = '';
$Kutub->pakan = '';
$Kutub->hibernasi = '';
$Kutub->$bertahanHidup = '';

echo 'Nama Hewan : ' . $Kutub->nama . '<br>Spesies : ' . $Kutub->spesies . '<br>Habitat : ' . $Kutub->habitat . '<br>Berjalan Dengan : ' . $Kutub->berjalan . '<br>Memakan : ' . $Kutub->pakan . ''



?>