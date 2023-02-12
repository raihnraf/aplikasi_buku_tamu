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
         <h1>Buku Tamu</h1>
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Berkunjung</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Aksi</th>      
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_tamu as $tamu) : ?>
                    <tr>
                        <td><?= $tamu->tgl_berkunjung ?></td>
                        <td><?= $tamu->nama_tamu ?></td>
                        <td><?= $tamu->alamat ?></td>
                        <td><?= $tamu->no_telepon ?></td>
                        <td><?= $tamu->keperluan ?></td>
                        <td><a href="<?= base_url('edit_data_tamu').'/'.$tamu->id ?>" class="btn btn-info btn-sm">Edit</a> <a href="<?= base_url('delete_data_tamu').'/'.$tamu->id ?>" class="btn btn-info btn-sm">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_tamu')?>" class="btn btn-primary">+ Tambah Data Tamu</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

