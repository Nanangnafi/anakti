<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendaftaran KP</title>
  </head>
  <body>

        <div class="container">
            <form method="POST" action="aksi.php">
            <br><h2 class="alert alert-primary text-center mt-3">Perusahaan</h2><br>

            <form>
            <div class="form-group">
                <label>Id_perusahaan</label>
                <input type="text" name="" class="form-control" placeholder="Masukkan Id Perusahaan">
            </div>

            <div class="form-group">
                <label>Nama_Perusahaan</label>
                <input type="text" name="" class="form-control" placeholder="Masukkan Nama Perusahaan">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="" class="form-control" placeholder="Masukkan Alamat Perusahaan">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="" class="form-control" placeholder="Masukkan Email Perusahaan">
            </div>

            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="" class="form-control" placeholder="Masukkan Nomor Telepon Perusahaan">
            </div>

            <br>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                </div>
                
        </form>
    </div>
    

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>