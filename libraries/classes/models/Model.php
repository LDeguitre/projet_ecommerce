<?php

namespace Models;

abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = \Database::getPdo();
    }

    /**
     * Retourne un item dans la base de données grâce à son id
     *
     * @param integer $id
     *
     * @return array|bool retourne un tableau si on trouve l'item, false si on ne trouve rien
     */
    public function find(int $id): array
    {

        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE {$this->id} = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();

        return $item;
    }

    /**
     * Retourne la liste des items
     *
     * @return array retourne un tableau contenant tout les produits
     */
    public function findAll($order = ""): array
    {
        // 1. Création de la chaine SQL
        $sql = "SELECT * FROM {$this->table}";

        if ($order) {
            $sql .= " ORDER BY $order";
        }

        // 2. Récupération des items
        $resultats = $this->pdo->query($sql);
        $items = $resultats->fetchAll();

        // 3. On retourne les items
        return $items;
    }

    /**
     * Insère une nouvelle ligne dans $table 
     *
     * @param array $data un tableau associatif des champs à insérer
     *
     * @return void
     */
    public function insert(array $data): void
    {

        $sql = "INSERT INTO {$this->table} (";

        // 2. Récupération du nom des champs
        $fields = array_keys($data);

        // 3. On ajoute les fields à la requête
        $sql .= implode(",", $fields) . ") VALUES (";

        // 4. On créé les paramètres PDO
        $params = array_map(function ($field) {
            return ":$field";
        }, $fields);
        $sql .= implode(", ", $params) . ")";

        // 5. On prépare et on exécute la requête
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
    }


}
