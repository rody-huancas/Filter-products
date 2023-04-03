<?php

class Product extends Conectar
{
    public function get_product()
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tb_products";

        $sql = $conectar->prepare($sql);
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
}
