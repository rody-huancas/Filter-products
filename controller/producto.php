<?php

require_once "../config/conexion.php";
require_once "../models/Producto.php";

$product = new Product();

switch ($_GET["op"]) {
    case "listar":
        $datos = $product->get_product(@$_POST["categoria"], @$_POST["nombre"], @$_POST["precio"]);
        foreach ($datos as $row) {
?>
            <div class="product__card">
                <img src="<?php echo $row["imagen"] ?>" alt="<?php echo $row["titulo"] ?>" class="product__img">
                <div class="product__group">
                    <p class="product__title"><?php echo $row["titulo"] ?></p>
                    <div class="product-items">
                        <p class="product__category"><?php echo $row["categoria"] ?></p>
                        <p class="product__price"><?php echo "S/. " . $row["precio"] ?></p>
                    </div>
                </div>
            </div>

        <?php
        }
        break;

    case "categoria":
        $datos = $product->get_categoria();
        foreach ($datos as $row) {
        ?>
            <div class="filter__cat">
                <label class="filter__group-checkbox">
                    <input type="checkbox" value="<?php echo $row["categoria"] ?>" name="categorias" class="filter__input-check filtrodetalle" />
                    <?php echo $row["categoria"] ?>
                </label>
            </div>

<?php
        }
        break;
}
