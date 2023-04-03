<?php

class Conectar
{
    protected $db;

    protected function conexion()
    {
        $local    = "localhost";
        $dbname   = "db_products_filter";
        $user     = "root";
        $password = "rody1999";

        try {
            $conectar = $this->db = new PDO("mysql:host=" . $local . ";dbname=" . $dbname, $user, $password);
            return $conectar;
        } catch (Exception $e) {
            print "Error en la Base de Datos!" . $e->getMessage() . "<br/>";
            die();
        }
    }

    protected function set_names()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }
}
