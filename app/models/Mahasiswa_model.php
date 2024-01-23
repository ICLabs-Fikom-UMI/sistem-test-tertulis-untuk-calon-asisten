<?php

class Mahasiswa_model {
    // private $dbh; //database handler
    // private  $stmt;

//     public function __construct()
//     {
// //data siurce name
//         $dsn = 'mysql: host=localhost;dbname=phpmvc';

//         try {
//             $thia-> dbh = new PDO($dsn, 'root', 'root');
//         }catch(PD0Exception $e) {
//             die($e->getMessage());
//         }

//     }
    // private $mhs= [
    //     [
    //         "nama" => "Sandhika Galih",
    //         "nrp" => "08124899484",
    //         "email" => "ichaicha.iic63@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Nisa prtm",
    //         "nrp" => "13020210023",
    //         "email" => "ichaicha.iic63@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Nisa prtm",
    //         "nrp" => "13020210023",
    //         "email" => "ichaicha.iic63@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    //     ];

pubclic function getAllMahasiswa()
{
    // return $this-> mhs;
    $this->db->query('SELECT * FROM  ' / $this->table);
    return $this->db->resultSet();
}