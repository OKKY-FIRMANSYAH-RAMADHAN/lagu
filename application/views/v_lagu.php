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
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-end align-items-center">
                <a href="<?= base_url('tambahdata') ?>" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col-12">
                <table class=" table table-light table-hover text-center mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penyanyi</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Album</th>
                            <th scope="col">Durasi</th>
                            <th scope="col" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $i = 1; ?>
                        <?php foreach ($lagu as $data) : ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $data->judul ?></td>
                                <td><?= $data->penyanyi ?></td>
                                <td><?= $data->tahun ?></td>
                                <td><?= $data->genre ?></td>
                                <td><?= $data->album ?></td>
                                <td><?= gmdate("i", $data->durasi) . ":" . gmdate("s", $data->durasi) ?></td>
                                <td><a href="<?= base_url('update/' . $data->idLagu); ?>" class="btn btn-sm btn-warning">UPDATE</a></td>
                                <td><a href="<?= base_url('delete/' . $data->idLagu); ?>" class="btn btn-sm btn-danger">DELETE</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script src="<?= base_url('bootstrap/bootstrap.bundle.min.js') ?>">
    </script>
</body>

</html>