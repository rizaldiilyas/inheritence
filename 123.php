<?php  
class siswa {
 public $nama = "rizaldi ilyas muhamad permana";
 public $kelas = "XI";
 protected $jurusan = "PPLG";
 private $nis = "2122.5.36";
 function tampilkanDataSiswa(){
    echo "Nama : $this->nama <br>";
    echo "kelas : $this->kelas <br>";
    echo "jurusan : $this->jurusan <br>";
    echo "Nis : $this->nis <br>";
 }
}

class pplg extends siswa {

}

$siswa = new siswa();
$siswa->tampilkanDataSiswa();
?>