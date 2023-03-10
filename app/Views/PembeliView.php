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
        <h1>Buku Pembeli</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama pembeli</th>
                    <th scope="col">Nomer</th>
                    <th scope="col">Email</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($SeluruhDataPembeli as $dataPembeli):?>
                <tr>
                  <td><?= $dataPembeli->nama?></td>
                  <td><?= $dataPembeli->nomer?></td>
                  <td><?= $dataPembeli->email?></td>
                  <td><?= $dataPembeli->barang?></td>
                  <td><?= $dataPembeli->alamat?></td>
                  <td>
                    <a href="<?= base_url('DetailDataPembeli').'/'.$dataPembeli->id?>" class="btn btn-primary btn-sm">Detail</a>
                    <a href="<?= base_url('EditDataPembeli').'/'.$dataPembeli->id?>" class="btn btn-warning btn-sm">Edit Data</a>
                    <a onclick="return confirm('Apakah ingin menghapus');" href="<?= base_url('HapusDataPembeli').'/'.$dataPembeli->id?>" class="btn btn-danger btn-sm">Hapus Data</a>
                  </td>
                </tr>
              <?php endforeach;?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('TambahDataPembeli')?>" class="btn btn-primary">Tambah Data</a>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>