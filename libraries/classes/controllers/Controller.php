<?php

namespace Controllers;

abstract class Controller
{

    protected $modelName;
    protected $model;
    protected $pdo;

    public function __construct()
    {
        $realModelName = "\\Models\\" . $this->modelName;
        $this->model = new $realModelName();
        $this->pdo = \Database::getPdo();
    }







}
