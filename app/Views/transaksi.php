<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
         <h1>Data Transaksi Customer</h1>
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Tipe Produk</th>
                    <th scope="col">Tanggal Keberangkatan</th>
                    <th scope="col">Tanggal Kedatangan</th>
                    <th scope="col">Daftar Penumpang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_transaksi as $transaksi) : ?>
                    <tr>
                        <td><?= $transaksi->tgl_transaksi ?></td>
                        <td><?= $transaksi->tipe_produk ?></td>
                        <td><?= $transaksi->tanggal_keberangkatan ?></td>
                        <td><?= $transaksi->tanggal_kedatangan ?></td>
                        <td><?= $transaksi->daftar_penumpang ?></td>
                        <td><a href="<?= base_url('edit_data_transaksi').'/'.$transaksi->id ?>" class="btn btn-info btn-sm">Edit</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_transaksi')?>" class="btn btn-primary">+ Tambah Data Transaksi</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>