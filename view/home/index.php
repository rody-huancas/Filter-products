<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Products</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE ?>assets/css/style.css">
</head>

<body>
    <main class="main">
        <!-- Filtrar -->
        <div class="filter">
            <span class="filter__title">Filtrar</span>

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
    <script src="<?php echo BASE ?>view/home/main.js"></script>
</body>

</html>