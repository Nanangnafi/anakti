<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO pdftrn (id,tempat_KP,alamat_KP,Tanggal_mulai,Tanggal_selesai,Proposal,Anggota_Kelompok,Dosen,Perusahaan)
                                    VALUES('$_POST[tid]',
                                            '$_POST[ttempat]',
                                            '$_POST[talamat]',
                                            '$_POST[ttanggalmulai]',
                                            '$_POST[ttanggalselesai]',
                                            '$_POST[tproposal]',
                                            '$_POST[tanggotakelompok]',
                                            '$_POST[tdosen]',
                                            '$_POST[tperusahaan]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($konek, "UPDATE pdftrn SET id = '$_POST[tid]',
                                                tempat_KP = '$_POST[ttempat]',
                                                alamat_KP = '$_POST[talamat]',
                                                Tanggal_mulai = '$_POST[ttanggalmulai]',
                                                Tanggal_selesai = '$_POST[ttanggalselesai]',
                                                Proposal = '$_POST[tproposal]',
                                                Anggota_Kelompok = '$_POST[tanggotakelompok]',
                                                Dosen = '$_POST[tdosen]',
                                                Perusahaan = '$_POST[tperusahaan]')");


    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM pendaftaran_ujian_kp WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='pendaftaran_KP.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='pendaftaran_KP.php';
                </script>";
    }
}