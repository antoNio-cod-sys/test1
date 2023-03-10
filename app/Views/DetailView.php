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
        <h1>Detail Data Pembeli</h1>    
            
                <input type="hidden" class="form-control" id="idEdit" name="idEdit" value="<?= $DataDetail->id?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="<?= $DataDetail->nama?>" name="nama" readonly>
                </div>
                <div class="mb-3">
                    <label for="nomer" class="form-label">Nomer</label>
                    <input type="number" class="form-control" id="nomer" value="<?= $DataDetail->nomer?>" name="nomer" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?= $DataDetail->email?>" name="email" readonly>
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="text" class="form-control" id="barang" value="<?= $DataDetail->barang?>" name="barang" readonly>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="<?= $DataDetail->alamat?>" name="alamat" readonly>
                </div>
                <div class="mb-3">
                    <a href="<?= base_url('pembeli')?>" class="btn btn-primary">Kembali</a>
                </div>
            
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  

    </body>
</html>