<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?></title>
    <link href="<?= base_url('bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>
    <h1 class="text-center mt-5"><?= $judul ?></h1>
    <div class="container mt-5 ">
        <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-danger">Kembali</a>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="" method="post">
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Judul Lagu</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="colFormLabel" name="judul" placeholder="Judul Lagu" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Penyanyi</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="colFormLabel" name="penyanyi" placeholder="Penyanyi" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tahun Rilis</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="tahun" name="tahun" placeholder="Tahun Rilis" required>
                                <option value="" selected disabled>Tahun Rilis</option>
                                <?php
                                $tahun_sekarang = date("Y");
                                for ($tahun = $tahun_sekarang; $tahun >= 1900; $tahun--) : ?>
                                    <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Genre</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="colFormLabel" name="genre" placeholder="Genre" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Album</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="colFormLabel" name="album" placeholder="Album" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Durasi (Detik)</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="colFormLabel" name="durasi" placeholder="Durasi" required>
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
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="<?= base_url('bootstrap/bootstrap.bundle.min.js') ?>">
    </script>
</body>

</html>