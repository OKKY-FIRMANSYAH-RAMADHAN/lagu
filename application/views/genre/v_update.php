<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $judul ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="container mt-5 ">
        <a href="<?= base_url() ?>genre" class="btn btn-sm btn-outline-danger">Kembali</a>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php foreach ($genre as $data) : ?>
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Genre</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="colFormLabel" name="namaGenre" placeholder="Nama Genre" required value="<?= $data->namaGenre ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <input type="submit" class="form-control btn btn-primary" id="colFormLabel" value="Simpan Data" required>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</main>