<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="download">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>MOBILE APPLICATION</h1>
            <p class="lead">Unduh aplikasi <b>LOWKERJOGJA</b> Google Playstore</p>
        </div>
    </div>
</div>
<div class="download">
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col center" style="margin-top: 50px; margin-bottom: 50px;">
                <h5 class="text-center">Silakan klik gambar dibawah ini untuk mendownload aplikasi LOWKERJOGJA</h5>
                <a href="#">
                    <img src="/img/googleplay.png" alt="" style="width: 30px; width:300px;" class="rounded mx-auto d-block">
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>