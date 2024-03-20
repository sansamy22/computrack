<?= $this->extend('plantilla') ?>

<?= $this->section('contenido') ?>

<h1>Dashboard de las ordenes</h1>

<a class="bnt bnt-success" href="">Generar nueva orden</a>

<div class="container">
    <div class="row">
        <div class="col-lg-4 border">
            <h4>Por hacer</h4>
        </div>
        <div class="col-lg-4 border">
            <h4>En Progreso</h4>
        </div>
        <div class="col-lg-4 border">
            <h4>Finalizado</h4>
        </div>
    </div>
</div>

<?= $this->endSection() ?>