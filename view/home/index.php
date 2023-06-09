<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Products</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE ?>assets/css/style.css?v=<?php echo rand(); ?>">

    <!-- Bootstrap - libreria slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-slider@10.6.2/dist/css/bootstrap-slider.min.css" />
</head>

<body>
    <main class="main">

        <button id="show-filter-btn" class="filter-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path d="M16 18V20H5V18H16ZM21 11V13H3V11H21ZM19 4V6H8V4H19Z" fill="#000"></path>
            </svg>
        </button>

        <!-- Filtrar -->
        <div class="filter">
            <span class="filter__title">Filtrar</span>
            <!-- Filtro por búsqueda -->
            <div class="filter__group">
                <span class="filter__subtitle">Nombre</span>
                <input type="text" id="txtnombre" placeholder="Ingrese el nombre" class="filter__input">
            </div>
            <!-- Filtro por categoria -->
            <div class="filter__group">
                <span class="filter__subtitle">Categorías</sp>
                    <div class="" id="listcategoria">
                        <!-- Listar el filtro -->
                    </div>
            </div>
            <!-- Filtro por rango de precio -->
            <div class="filter__group">
                <span class="filter__subtitle">Precio</span>
                <div class="list-group-item">
                    <input type="text" id="txtprecio" data-slider-min="7" data-slider-max="302" data-slider-step="1" data-slider-value="302" value="155" style="width: 100%;" />
                    <div id="sliderValue"></div>
                </div>
            </div>
        </div>
        <!-- Fin Filtrar -->

        <div class="products">
            <h1 class="products__title">Productos</h1>
            <div class="products__grid" id="listproductos">
                <!-- Aquí se insertará los datos de los productos -->
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- Bootstrap - libreria slider -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-slider@10.6.2/dist/bootstrap-slider.min.js"></script>
    <script src="<?php echo BASE ?>view/home/main.js?v=<?php echo rand(); ?>"></script>
    <script src="<?php echo BASE ?>assets/js/app.js?v=<?php echo rand(); ?>"></script>
</body>

</html>