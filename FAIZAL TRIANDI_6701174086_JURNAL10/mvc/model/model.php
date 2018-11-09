<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect("localhost", "root","","6701174086");
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			$query = "SELECT * from mahasiswa";//query select*from 
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "SELECT * from mahasiswa where nim='$nim'";//query select mahasiswa berdasarkan nim
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', prodi='$prodi' where nim='$nim'";//query update nim, nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "DELETE from mahasiswa where nim='$nim'";//query delete berdasarkan nim
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "INSERT into mahasiswa values ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi')";//query insert nim,nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>