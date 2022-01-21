<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="search">
    <!-- <div class="filter">
        <!-Filter -->
    <div class="container py-4">
        <div class="d-flex flex-column">
            <form action="/pages/cari" method="post">
                <div class="form-row align-items-center">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text fa fa-search"></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search Keyword..." name="nama_lowongan">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <select id="inputState" class="form-control" name="lokasi">
                            <option selected value="all">Semua Lokasi</option>
                            <option value="bantul">Bantul</option>
                            <option value="yogyakarta">Yogyakarta</option>
                            <option value="sleman">Sleman</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <select id="inputState" class="form-control" name="lulusan">
                            <option selected value="all">Semua Lulusan</option>
                            <option value="sma">SMA</option>
                            <option value="smk">SMK</option>
                            <option value="d3">D3</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="umum">Umum</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <button type="submit" class="btn btn-success" name="submit" style="color:white; width:100%;">Cari Lowongan</button>
                    </div>
                    <div class="mt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="time[]" value="Full Time">
                            <label class="form-check-label" for="inlineCheckbox1">Full Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="time[]" value="Part Time">
                            <label class="form-check-label" for="inlineCheckbox2">Part Time</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="time[]" value="Freelance">
                            <label class="form-check-label" for="inlineCheckbox2">Freelance</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End filter -->
</div>

<div class="isi py-5">
    <!-- Isi/Content -->
    <div class="container">
        <?php if ($lowker == "") : ?>
            <div>
                <h5>
                    <center>Tidak ada daftar yang cocok dengan pencarian Anda.</center>
                </h5>
            </div>
        <?php endif; ?>

        <?php if ($lowker !== "") : ?>
            <div class="container">
                <ul class="list-group list-group-flush listing-job">
                    <?php foreach ($lowker as $lk) { ?>
                        <li class="list-group-item">
                            <div class="row gx-3">
                                <div class="col-12 col-md-2"><img src="<?= $lk["logo_perusahaan"] ?>" class="rounded mb-3 mb-sm-0 w-100"></div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <div class="me-auto">
                                            <?php if ($lk['waktu_kerja'] == "Part Time") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-primary">Part Time</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Full Time") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-warning">Full Time</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Freelance") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-danger"><?= $lk["waktu_kerja"] ?></span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Full Time, Part Time") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-warning">Full Time</span>
                                                    <span class="badge rounded-pill bg-primary">Part Time</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Full Time, Freelance") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-warning">Full Time</span>
                                                    <span class="badge rounded-pill bg-danger">Freelance</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Part Time, Freelance") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-primary">Part Time</span>
                                                    <span class="badge rounded-pill bg-danger">Freelance</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($lk['waktu_kerja'] == "Full Time, Part Time, Freelance") :  ?>
                                                <div>
                                                    <span class="badge rounded-pill bg-warning">Full Time</span>
                                                    <span class="badge rounded-pill bg-primary">Part Time</span>
                                                    <span class="badge rounded-pill bg-danger">Freelance</span>
                                                </div>
                                            <?php endif; ?>

                                            <h3 class="h5"><?= $lk["nama_lowongan"] ?></h3>
                                            <i class="fa fa-building my-2 mx-2 " aria-hidden="true" style="color: navy;"></i><?= $lk["nama_perusahaan"] ?>
                                            <i class="fa fa-graduation-cap my-2 mx-2" aria-hidden="true"></i> <?= $lk["pendidikan"] ?>
                                            <i class="fa fa-calendar my-2 mx-2" aria-hidden="true"></i> <?= date('d-m-Y', $lk["date_created"]) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mr-2 styleLowongan">
                                    <p class="h5"><?= $lk["penempatan"] ?></p>
                                    <p class=""> <?= $lk["gaji"] ?> </p>
                                </div>
                                <div class="col-md-2 col-md-2 tombolDetail">
                                    <a href="/pages/detail/<?= $lk['id_lowker']; ?>" class="mt-3 btn btn-success btn-sm">Detail Lowongan</a>
                                </div>
                            </div>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <!-- End isi/content -->
</div>

<?= $this->endSection(); ?>