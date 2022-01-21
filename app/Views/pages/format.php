<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="format">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>FORMAT IKLAN</h1>
            <p class="lead">Format Pemasangan Iklan <b>LOWKERJOGJA</b></p>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row">
        <div class="col">
            <p class="lead" style="font-weight: bold;">FORMAT PEMASANGAN IKLAN</p>
            <ul>
                <li>Logo Usaha/Lembaga <i>(Optional)</i></li>
                <li>Nama Usaha/Lembaga</li>
                <li>Alamat Lengkap</li>
                <li>No Kontak/Email</li>
                <li>Jenis Pekerjaan <i>(Full time, Part time, Freelance)</i></li>
                <li>Posisi yang dicari</li>
                <li>Kriteria/Syarat</li>
                <li>Gaji/Benefit</li>
                <li>Kirim lamaran ke</li>
                <p class="lead" style="font-weight: bold;"><b><i>----------------------</i></b></p>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="lead" style="font-weight: bold;">CONTOH FORMAT PEMASANGAN IKLAN</p>
            <ul>
                <li><b>Nama Usaha/Lembaga: </b>Perusahaan A</li>
                <li><b>Alamat Lengkap: </b>Jl. Jenderal Sudirman No.22 Yogyakarta</li>
                <li><b>No Kontak/Email: </b>0274-xxxxxx / perusahaana@gmail.com</li>
                <li><b>Jenis Pekerjaa: </b>Full Time</li>
                <li><b>Posisi yang dicari: </b>
                    <ol type="1">
                        <li>Admin</li>
                        <li>Programmer</li>
                        <li>Digital Marketing</li>
                    </ol>
                </li>
                <li><b>Kriteria/Syarat: </b>
                    <ol type="1">
                        <li>Pria/Wanita <b><i>(2,3)</i></b></li>
                        <li>Wanita <b><i>(1)</i></b></li>
                        <li>Usia max 30th <b><i>(1,3)</i></b> dan max 35th <b><i>(2)</i></b></li>
                        <li>Pendidikan minimal SMA/SMK sederajat <b><i>(1,2,3)</i></b></li>
                        <li>Dapat bekerja secata individual/tim <b><i>(1,2,3)</i></b></li>
                        <li>Mampu bekerja dengan baik, jujur dan bertanggungjawab <b><i>(1,2,3)</i></b></li>
                    </ol>
                </li>
                <li><b>Gaji/Benefit: </b>Rp. 1.500.000,- - 2.200.000,-</li>
                <li><b>Kirim lamaran ke: </b>Perusahaan A | Jl. Jenderal Sudirman No.22 Yogyakarta | 0274-xxxxxx / perusahaan@mail.com</li>
            </ul>
        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col">
            <p class="lead" style="font-weight: bold;">Hormat Kami,<br>Founder</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>