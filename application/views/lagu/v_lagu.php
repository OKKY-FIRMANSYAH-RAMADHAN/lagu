<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $judul ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-end align-items-center">
            <a href="<?= base_url('tambahdata') ?>" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class=" table table-light table-hover text-center mt-3">
                <thead class="table-primary">
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
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lagu as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $data->judul ?></td>
                            <td><?= $data->penyanyi ?></td>
                            <td><?= $data->tahun ?></td>
                            <td><?= $data->namaGenre ?></td>
                            <td><?= $data->album ?></td>
                            <td><?= gmdate("i", $data->durasi) . ":" . gmdate("s", $data->durasi) ?></td>
                            <td><a href="<?= base_url('update/' . $data->idLagu); ?>" class="btn btn-sm btn-warning">UPDATE</a>
                            </td>
                            <td><a href="<?= base_url('delete/' . $data->idLagu); ?>" class="btn btn-sm btn-danger">DELETE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>