<?php

namespace dao;
use Mesure;


class MesureDao extends DaoBase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function insertMesure($mesure)
    {


        $query = $this->bdd->prepare("INSERT INTO releves (temperature, humidite) VALUES (:temperature, :humidite)");

        $query->bindParam(":temperature", $mesure->temperature);
        $query->bindParam(":humidite", $mesure->humidite);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $mesure->id = $id;

        return $id;
    }

    public function findAllMesures() {

        $result = [];

        $reponse = $this->bdd->query("SELECT id, datetime, temperature, humidite FROM user order by id");

        while ($donnees = $reponse->fetch()) {

            $id = $donnees["id"];
            $datetime = $donnees["datetime"];
            $temperature = $donnees["temperature"];
            $humidite = $donnees["humidite"];

            $mesure = new User($id, $datetime, $temperature, $humidite);

            $result[] = $mesure;
        }

        return $result;
    }
}

