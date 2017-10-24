<?php
class sekolah{

public $nama, $alamat, $jurusan;

public function __construct($nama, $alamat, $jurusan)
{
	$this->nama = $nama;
	$this->alamat = $alamat;
	$this->jurusan = $jurusan;
}

public function get_nama()
{
	return $this->nama;
}
public function get_alamat()
{
	return $this->alamat;
}
public function get_jurusan()
{
	return $this->jurusan;
}

}
?>