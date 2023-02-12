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
         <h1>Tambah Data Transaksi</h1>
    <form action="<?= base_url('proses_add_transaksi') ?>" method="POST">
    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Transaksi</label>
            <input type="text" class="form-control" id="tgl_transaksi" name="tgl_transaksi" placeholder="tanggal transaksi">
   </div>
   <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tipe Produk</label>
            <select class="form-control" id="tipe_produk" name="tipe_produk">
                <option value="">Pilih Tipe Produk</option>
                <option value="tiket">Tiket</option>
                <option value="cruise">Cruise</option>
                <option value="hotel">Hotel</option>
                <option value="tour">Tour</option>
            </select>
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="nama pengguna">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Transaksi</label>
            <input type="text" class="form-control" id="jumlah_transaksi" name="jumlah_transaksi" placeholder="jumlah transaksi">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Keberangkatan</label>
            <input type="text" class="form-control" id="tgl_keberangkatan" name="tgl_keberangkatan" placeholder="tanggal keberangkatan">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tempat Tujuan</label>
<input type="text" class="form-control" id="tempat_tujuan" name="tempat_tujuan" placeholder="tempat tujuan">

  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Penumpang</label>
            <input type="number" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" placeholder="jumlah penumpang">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kelas Penerbangan</label>
            <select class="form-control" id="kelas_penerbangan" name="kelas_penerbangan">
                <option value="Ekonomi">Ekonomi</option>
                <option value="Bisnis">Bisnis</option>
                <option value="Eksklusif">Eksklusif</option>
            </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>