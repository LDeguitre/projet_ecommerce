<?php

namespace Models;


class Product extends Model
{



    /**
     * Retourne les produis triés par l'id de category dans l'url
     *
     * @param $id_category
     * @return array
     */

    public function sort($id_category) : array
    {

        $query = $this->pdo->prepare("SELECT * FROM `product` WHERE `id_category` = :id");
        $query->execute(['id' => $id_category]);
        $item = $query->fetchAll();

        return $item;

    }

    /**
     * Retourne le ou les produits contenant une partie de la string recherche
     *
     * @return array
     */

    public function search() : array {

        $name = $_POST['search'];

        $query = $this->pdo->prepare("SELECT * FROM `product` WHERE `name` LIKE '%$name%'");
        $query->execute();
        $item = $query->fetchAll();

        return $item;
    }
}
