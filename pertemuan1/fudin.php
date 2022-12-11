<?php
class pegawai
{

	var $nip;
	var $nama;
	var $alamat;
	var $notelp;
	var $tgllahir;

	function __construct()
	{
		$this->nip = "112010130";
		$this->nama = "Moh Saifuddin";
		$this->alamat = "Ds Payaman";
		$this->notelp = "089699356858";
		$this->tgllahir = "05-10-2001";
	}
	function ubahdata($ubahdata)
	{
		$this->alamat = ($ubahdata);
	}
	function tampilpegawai()
	{
		echo "NIP : " . $this->nip;
		echo "<br> Nama : " . $this->nama;
		echo "<br> Alamat : " . $this->alamat;
		echo "<br> NoTlp : " . $this->notelp;
		echo "<br> TglLahir : " . $this->tgllahir;
	}
}
$a = new pegawai();

echo "<br>Data Pegawai</b></br>";
$a->tampilpegawai();

echo "<br><br>Mengubah Alamat Pegawai</b></br>";
$a->ubahdata("Dsn Sawo Ds Payaman Kec Solokuro");
$a->tampilpegawai();
