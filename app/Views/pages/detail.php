<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="detail">
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h3><?= $lowkerid["nama_lowongan"]; ?></h3>
            <i class="fa fa-building my-2 mx-2" aria-hidden="true">&nbsp;<?= $lowkerid["nama_perusahaan"]; ?></i>
            <i class=" fa fa-graduation-cap my-2 mx-2" aria-hidden="true">&nbsp;<?= $lowkerid["pendidikan"]; ?></i>
            <i class="fa fa-calendar my-2 mx-2" aria-hidden="true">&nbsp;<?= date('d-m-Y', $lowkerid["date_created"]); ?></i>
            <td><?php if ($lowkerid['waktu_kerja'] == "Full Time") : ?>
                    <div>
                        <span class="badge badge-pill badge-warning"><?= $lowkerid["waktu_kerja"] ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Part Time") :  ?>
                    <div>
                        <span class="badge badge-pill badge-primary"><?= $lowkerid["waktu_kerja"] ?></var></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-danger"><?= $lowkerid["waktu_kerja"] ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Part Time") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Part Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Part Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>

<!-- <?php if ($lowkerid == "Data lowongan sudah tidak tersedia") : ?>
    <div class="container my-4">
        <div class="container text-center">
            <p>
                <b>Data lowongan sudah tidak tersedia</b>
            </p>
        </div>
    </div>
<?php endif; ?> -->

<!-- <?php if ($lowkerid != "Data lowongan sudah tidak tersedia") : ?> -->
<div class="container my-4">
    <div class="row">
        <div class="col-lg-3 my-2 text-justify-center">
            <img src="<?= $lowkerid["logo_perusahaan"]; ?>" class="img-fluid mx-auto d-block" alt="Responsive image" width="300px">
            <td><?php if ($lowkerid['waktu_kerja'] == "Full Time") : ?>
                    <div>
                        <span class="badge badge-pill badge-warning"><?= $lowkerid["waktu_kerja"] ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Part Time") :  ?>
                    <div>
                        <span class="badge badge-pill badge-primary"><?= $lowkerid["waktu_kerja"] ?></var></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-danger"><?= $lowkerid["waktu_kerja"] ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Part Time") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Part Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
                <?php if ($lowkerid['waktu_kerja'] == "Full Time, Part Time, Freelance") :  ?>
                    <div>
                        <span class="badge badge-pill badge-warning">Full Time</span>
                        <span class="badge badge-pill badge-primary">Part Time</span>
                        <span class="badge badge-pill badge-danger">Freelance</span>
                    </div>
                <?php endif; ?>
                <h3><?= $lowkerid["nama_lowongan"]; ?></h3>
                <i class="fa fa-building my-2 mx-2" aria-hidden="true">&nbsp;&nbsp;&nbsp;<?= $lowkerid["nama_perusahaan"]; ?></i><br>
                <i class="fa fa-graduation-cap my-2 mx-2" aria-hidden="true">&nbsp;<?= $lowkerid["pendidikan"]; ?></i><br>
                <i class="fa fa-calendar my-2 mx-2" aria-hidden="true">&nbsp;&nbsp;<?= date('d-m-Y', $lowkerid["date_created"]); ?></i><br>
                <i class="fa fa-money my-2 mx-2" aria-hidden="true">&nbsp;<?= $lowkerid["gaji"]; ?></i><br>
                <i class="fa fa-map-marker my-2 mx-2" aria-hidden="true">&nbsp;&nbsp;&nbsp;<?= $lowkerid["penempatan"]; ?></i>
        </div>
        <div class="col-lg-7 my-4">
            <h3>Deskripsi Lowongan</h3>
            <hr width="200px;" style="border-top: 4px solid gold; float:left; margin-top: 2px;">
            <br>
            <p><?= $lowkerid["deskripsi"]; ?></p>
            <p><b>- <?= $lowkerid["nama_lowongan"]; ?></b></p>
            <h5>Kriteria :</h5>
            <?php foreach ($kriteria as $k) : ?>
                <?= $k; ?><br>
            <?php endforeach; ?>
            <?php if ($benefit !== "-") : ?>
                <h5><br>Benefit :</h5>
                <?php foreach ($benefit as $b) : ?>
                    <?= $b; ?><br>
                <?php endforeach; ?>
            <?php else : ?>
                <?php echo "" ?>
            <?php endif; ?>
            <h6><br>lamaran untuk mendaftar: </h6>
            <blockquote><?= $lowkerid["email"]; ?></blockquote>

            <h6>info lebih lanjut :</h6>
            <blockquote><?= $lowkerid["no_hp"]; ?></blockquote>
            <br>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $lowkerid["email"]; ?>" type="button" class="btn btn-success btn-lg btn-block" target="_blank" rel="nofollow" title="Email">Lamar Sekarang</a>
        </div>
        <div class="col-lg-2 my-4 text-center">
            <h5>LOWKERJOGJA</h5>
            <hr width="80px;" style="border-top: 4px solid gold; margin-top: -1px;">
            <div class="container">
                <div class="row">
                    <table class="table float-left">
                        <tbody>
                            <tr>
                                <td scope="row"><a href="https://api.whatsapp.com/send?phone=6281818181013&text=Saya%20tertarik%20untuk%20berlangganan" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Whatshapp lowker jogja">
                                        <img src="/img/icons/whatsapp.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Whatsapp
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="http://www.instagram.com/lowkerjogjadotcom" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Instagram lowker jogja">
                                        <img src="/img/icons/instagram.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Instagram
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="https://www.facebook.com/groups/702178150722767/?ref=share" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Facebook lowker jogja">
                                        <img src="/img/icons/fb.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Facebook
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="https://twitter.com/intent/tweet?screen_name=lowkerjogja_&ref_src=twsrc%5Etfw" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Twitter lowker jogja">
                                        <img src="/img/icons/twitter.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Twitter
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="https://telegram.me/lowkerjogja" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Telegram lowker jogja">
                                        <img src="/img/icons/telegram.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Telegram
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="http://pinterest.com/lowkerjogja" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Pinterest lowker jogja">
                                        <img src="/img/icons/pinterest.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;Pinterest
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="https://www.linkedin.com/in/lowker-jogja-0917ab200" style="text-decoration: none; color:black;" target="_blank" rel="nofollow" title="Linkedin lowker jogja">
                                        <img src="/img/icons/linkedin.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;&nbsp;LinkedIn
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="#" style="text-decoration: none; color:black;">
                                        <img src="/img/icons/gbisnis.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;&nbsp;G.Bisnis
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="#" style="text-decoration: none; color:black;">
                                        <img src="/img/icons/google play.png" alt="" style="width: 30px; float:left;">
                                        &nbsp;&nbsp;&nbsp;Aplikasi
                                    </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <?php endif; ?> -->
<?= $this->endSection(); ?>