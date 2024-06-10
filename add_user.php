<?php
include_once "koneksi.php";
$password = password_hash('12345', PASSWORD_BCRYPT);
$query = "INSERT INTO tb_pengguna (
    username,
    password,
    nama_lengkap,
    email,
    jabatan,
    hak_akses
    )
    VALUES (
        'kita',
        '$password',
        'Administrator Web',
        'admin@gmail.com',
        'Administrator',
        'admin'
        )
        ";
        if($koneksi->query($query)){
            echo "Data user berhasil di tambah";
        }else{
            echo "Data user gagal di tambah";
        }
        mysqli_close($koneksi);
        ?>