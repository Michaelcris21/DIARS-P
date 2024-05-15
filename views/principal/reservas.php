<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $data['title']; ?></span>
            <h2><?php echo $data['subtitle']; ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <input type="text" id="f_llegada" value="<?php echo $data['disponible']['f_llegada']; ?>">
                <input type="text" id="f_salida" value="<?php echo $data['disponible']['f_salida']; ?>">
                <input type="text" id="habitacion" value="<?php echo $data['disponible']['habitacion']; ?>">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'views/template/footer-principal.php'; ?>

<script src="<?php echo RUTA_PRINCIPAL . '/assets/principal/js/pages/reservas.js'; ?>"></script>

</body>

</html>