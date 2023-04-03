<?php

require_once "../config/conexion.php";
require_once "../models/Producto.php";

$product = new Product();

switch ($_GET["op"]) {
    case "listar":
        $datos = $product->get_product();
        foreach ($datos as $row) {
?>
            <div class="product__card">
                <img src="<?php echo $row["imagen"] ?>" alt="<?php echo $row["titulo"] ?>" class="product__img">
                <div class="product__group">
                    <p class="product__title"><?php echo $row["titulo"] ?></p>
                    <p class="product__price"><?php echo $row["precio"] ?></p>
                    <p class="product__category"><?php echo $row["categoria"] ?></p>
                </div>
            </div>

<?php
        }
}
