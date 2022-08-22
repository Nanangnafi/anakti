<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendaftaran Kerja Praktek</title>
  </head>
  <body>
   
        <div class="container">
        <form method="POST" action="crud.php">
            <!---<input type="hidden" name="id" value="--->
            <br><h2 class="alert alert-primary text-center mt-3">Pendaftaran Kerja Praktek</h2><br>

            <form>
            <div class="form-group">
                <label>id</label>
                <input type="text" name="tid" class="form-control" placeholder="Masukkan Nim Anda">
            </div>
    
            <div class="form-group">
                <label>tempat_KP</label>
                <input type="text" name="ttempat" class="form-control" placeholder="Masukkan Tempat KP Anda">
            </div>
            
            <div class="form-group">
                <label>alamat_KP</label>
                <input type="text" name="talamat" class="form-control" placeholder="Masukkan Alamat KP">
            </div>
    
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal_mulai</label>
                            <input type="date" name="ttanggalmulai" class="form-control" placeholder="Masukkan Tanggal Mulai Anda">
                        </div>
                    </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal_selesai</label>
                            <input type="date" name="ttanggalselesai" class="form-control" placeholder="Masukkan Tanggal Selesai Anda">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Proposal</label>
                    <input type="file" name="tproposal" class="form-control" placeholder="Masukkan File Proposal Anda">
                </div>

                <div class="form-group">
                    <label>Anggota_Kelompok</label>
                    <input type="text" name="tanggotakelompok" class="form-control" placeholder="Masukkan Anggota Kelompok Anda">
                </div>

                <div class="form-group">
                    <label>Dosen</label>
                    <input type="text" name="tdosen" class="form-control" placeholder="Masukkan Nama Dosne Anda">
                </div>

                <div class="form-group">
                    <label>Perusahaan</label>
                    <input type="text" name="tperusahaan" class="form-control" placeholder="Masukkan Perusahaan Tempat KP">
                </div>

                <br>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                </div>
                    
        </form>
    </div>
    
    <?php
            include "koneksi.php";

            if(isset($_POST['proses'])){
                mysqli_query($koneksi,"insert into pdftrn set
                id = '$_POST[nama]',
                tempat_KP = '$_POST[tempat]',
                Alamat_KP = '$_POST[alamat]',
                Tanggal_Mulai = '$_POST[tanggalmulai]',
                Tanggal_Selesai = '$_POST[tanggalselesai]',
                Proposal = '$_POST[proposal]',
                Anggota_Kelompok = '$_POST[anggotakelompok]',
                Dosen = '$_POST[dosen]',
                Perusahaan = '$_POST[perusahaan]' ");

                echo "Data baru tersimpan";
            }
    ?>
    
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