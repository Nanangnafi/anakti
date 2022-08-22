<?php
if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "zidan") {
        if ($password == "zidan123") {
            //login valid
            header('location:dashboard1.php');
        } else {
            //passwotd salah
            header('location:index.php?pesan=password salah');
        }
    } else {
        //username salah
        header('location:index.php?pesan=username salah');
    }
}
