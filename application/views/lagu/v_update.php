<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $judul ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="container mt-5 ">
        <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-danger">Kembali</a>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php foreach ($lagu as $data) : ?>
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Judul Lagu</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="colFormLabel" name="judul" placeholder="Judul Lagu" value="<?= $data->judul ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Penyanyi</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="colFormLabel" name="penyanyi" placeholder="Penyanyi" value="<?= $data->penyanyi ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Tahun Rilis</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="tahun" name="tahun" placeholder="Tahun Rilis" required>
                                    <option value="" disabled>Tahun Rilis</option>
                                    <?php
                                    $tahun_sekarang = date("Y");
                                    for ($tahun = $tahun_sekarang; $tahun >= 1900; $tahun--) : ?>
                                        <?php if ($tahun == $data->tahun) : ?>
                                            <option value="<?= $tahun ?>" selected><?= $tahun ?></option>
                                        <?php else : ?>
                                            <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                        <?php endif ?>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Genre</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="genre" name="genre" placeholder="Pilih Genre" required>
                                    <option value="" disabled>Pilih Genre</option>
                                    <?php foreach ($genre as $value) : ?>
                                        <?php if ($value->idGenre == $data->genre) : ?>
                                            <option value="<?= $value->idGenre ?>" selected><?= $value->namaGenre ?></option>
                                        <?php else : ?>
                                            <option value="<?= $value->idGenre ?>"><?= $value->namaGenre ?></option>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Album</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="colFormLabel" name="album" placeholder="Album" value="<?= $data->album ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Durasi (Detik)</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="colFormLabel" name="durasi" placeholder="Durasi" value="<?= $data->durasi ?>" required>
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