<?php

class Database
{

    private static $instance;

    /**
     * Retourne une instance de PDO
     *
     * @param integer $errorMode Une constante de PDO pour le mode d'erreur (par défaut ERRMODE_EXCEPTION)
     * @param integer $fetchMode Une constante de PDO pour le mode d'exploitation (par défaut FETCH_ASSOC)
     *
     * @return PDO
     */
    public static function getPdo(int $errorMode =  PDO::ERRMODE_EXCEPTION, int $fetchMode = PDO::FETCH_ASSOC): PDO
    {
        if(self::$instance == null) {
            self::$instance = new PDO('mysql:host=localhost;dbname=projet_e-commerce;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => $errorMode,
                PDO::ATTR_DEFAULT_FETCH_MODE => $fetchMode
            ]);
        }
        return self::$instance;
    }
}
