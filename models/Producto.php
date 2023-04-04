<?php

class Product extends Conectar
{
    public function get_product($categoria, $nombre, $precio)
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tb_products WHERE estado = 1 ";

        if (isset($categoria)) {
            $categoria = implode("','", $categoria);
            $sql .= "AND categoria in('" . $categoria . "')";
        }

        if (isset($nombre)) {
            $sql .= "AND titulo LIKE('%" . $nombre . "%')";
        }

        if (isset($precio)) {
            $sql .= "AND precio BETWEEN 0 AND '" . $precio . "'";
        }

        $sql = $conectar->prepare($sql);
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function get_categoria()
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT DISTINCT categoria FROM tb_products";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
}
