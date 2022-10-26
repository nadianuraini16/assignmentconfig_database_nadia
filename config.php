<?php
class DbConfig       //Class berfungsi untuk menampung isi dari program yang akan di jalankan,
                    //di dalamnya berisi atribut / type data dan method untuk menjalankan suatu program.
{  //sebagai isi dari koneksi
    private $_host = 'localhost';
    private $_username = 'rpl';
    private $_password =' ';
    private $_database='data_siswa';
 //Private berarti bahwa pengaksesan suatu variabel instan atau method hanya dapat dilakukan didalam kelas itu saja, 
 //tidak bisa diakses diluar kelas.
    protected $connection;
//Private berfungsi untuk memberikan akses properti yang hanya dapat diakses dari dalam class tersebut
//Protected berfungsi untuk memberikan akses properti yang hanya dapat diakses dari dalam class atau turunan dari class (inheritanced class) tersebut.
   //fungsi ini digunakan sebagai koneksi ke database
public function _consrunct()
        {
            if (!isset($this->connection)) {
                $this->connection = new mysqli($this->_host,$this->_username,$this->_password, $this->_database);
                if (!$this->connection){
                    echo 'Cannot connect to database server';
                    exit;
                }
            }//mengembalikan nilai dari koneksi
            return $this->connection;
        }
        
    
}
//rows adalah variabel untuk menampung data
//result yaitu untuk menampilkan hasil
//retrun untuk kembali
//foreach untuk pengulangan untuk array
$koneksi = mysqli_connect("localhost","root","","data_siswa");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
?>