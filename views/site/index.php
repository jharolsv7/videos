<?php

/** @var yii\web\View $this */

$this->title = 'Mis Películas';
?>
<div class="site-index">

    <div class="body-content mt-5">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-5">Bienvenido a:</h1>
                <h1 class="display-4">¡ PELiSWEB !</h1>
                    <p class="text-justify">¡Sumérgete en el fascinante mundo del cine con nuestra plataforma de gestión cinematográfica! Aquí, no solo tienes el control total sobre la base de datos de películas, sino que también puedes explorar a fondo detalles esenciales sobre actores, géneros y precios. Esta avanzada herramienta de administración te proporciona todas las funciones que necesitas para mantener tu colección cinematográfica actualizada y organizada.</p>
                    <p class="text-justify">Explora las maravillas del séptimo arte a través de nuestra innovadora plataforma de gestión cinematográfica! En este espacio, no solo obtienes el poder absoluto sobre la base de datos de películas, sino que también puedes sumergirte en los detalles cruciales sobre actores, géneros y tarifas. Esta herramienta avanzada de administración te brinda todas las funciones necesarias para mantener tu colección cinematográfica al día y perfectamente organizada. ¡Descubre el fascinante mundo del cine con nosotros.</p>
                </div>
                <div class="col-lg-4">
                <!-- Imagen grande arriba -->
                <div class="text-center mb-2">
                    <img src="<?= Yii::$app->urlManager->baseUrl ?>/img/IMG1.jpg" width="450" height="250" alt="Imagen Grande">
                </div>

                <!-- Segunda fila con dos columnas -->
                <div class="row">
                    <div class="col-md-6 text-center mb-2">
                        <!-- Primera imagen pequeña -->
                        <img src="<?= Yii::$app->urlManager->baseUrl ?>/img/IMG2.jpg" width="235" height="200" alt="Imagen Grande">
                    </div>
                    <div class="col-md-6 text-center mb-2">
                        <!-- Segunda imagen pequeña -->
                        <img src="<?= Yii::$app->urlManager->baseUrl ?>/img/IMG3.jpg" width="235" height="200" alt="Imagen Grande">
                    </div>
                </div>
            </div>
            </div>

        <h2>Próximos Estrenos: </h2>
        <br>
        <style>
            .container-transparent {
                background-color: rgba(4, 4, 4, 0.1); /*transparencia*/
                padding: 20px; /* Ajusta el espaciado según tus necesidades */
            }
        </style>

        <div class="container text-center container-transparent">
            <div class="row align-items-start">
                <div class="col">
                    <?php
                    echo "<h6> Nombre de Pelicula </h6>";
                    foreach ($listaPelicula as $item) {
                        echo "<p>" . $item->PEL_NOMBRE . "</p>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    echo "<h6> Costo de Pelicula </h6>";
                    foreach ($listaPelicula as $item) {
                        echo "<p>" . $item->PEL_COSTO . "</p>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    echo "<h6> Fecha de Estreno </h6>";
                    foreach ($listaPelicula as $item) {
                        echo "<p>" . $item->PEL_FECHA_ESTRENO . "</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
