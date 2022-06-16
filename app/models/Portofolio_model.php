<?php

class Portofolio_model
{
    private $myprojek = [
        [
            "nama" => "Web Portofolioku",
            "tanggal" => "2022-Juni-16",
        ],
        [
            "nama" => "Web Company Profile",
            "tanggal" => "2022-April-16",
        ],
        [
            "nama" => "Web Pramuka",
            "tanggal" => "2022-Maret-16",
        ],
    ];

    private $dbh; //database handler
    private $stmt; //statement

    // untuk koneksi database
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=db_mvcku';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getPortofolio()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tb_portofolio');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
