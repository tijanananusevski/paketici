<?php

class Broker
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Mysqli('localhost', 'root', '','paketici',3307);
        $this->connection->set_charset("utf8");
    }

    public function getUstanove()
    {
        $upit = "SELECT * FROM ustanova";
        $podaci = [];

        $resultSet = $this->connection->query($upit);

        while ($rezultat = $resultSet->fetch_object()){
            $podaci[] = $rezultat;
        }

        return $podaci;
    }

    public function pronadji($ustanova, $sort)
    {
        $upit = "SELECT * FROM paketic p join ustanova u on p.ustanovaID = u.ustanovaID";
        if($ustanova != -1){
            $upit .= " WHERE p.ustanovaID = " . $ustanova;
        }

        $upit .= " ORDER BY cenaPaketica " . $sort;
        $podaci = [];

        $resultSet = $this->connection->query($upit);

        while ($rezultat = $resultSet->fetch_object()){
            $podaci[] = $rezultat;
        }

        return $podaci;
    }

    public function unesi( $ustanova, $cena, $decak, $sastojci)
    {
        $upit = "INSERT INTO paketic VALUES (null, '$sastojci', $cena, $ustanova, $decak)";

        return $this->connection->query($upit);
    }
}