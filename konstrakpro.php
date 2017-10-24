<?php

require_once 'konstrak1.php';

$sekolah = new sekolah('SMK ASSALAAM', 'Situ Tarate', 'RPL, TKR, TSM');
echo "Nama sekolah = ".$sekolah->get_nama().'<br>';
echo "Alamat sekolah = ".$sekolah->get_alamat().'<br>';
echo "Jurusan sekolah = ".$sekolah->get_jurusan().'<br>';
?>