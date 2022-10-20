
<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "minia_php";

// KONEKSI DATABASE
$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$domain     = "";
$ip         = "";
$nama       = "";
$status     = "";
$tanggal    = "";
$foto       = "";
$keperluan  = "";
$instansi   = "";
$sukses     = "";
$error      = "";


if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
// DELETE
if ($op == 'delete') {
    $kode_link  = $_GET['kode_link'];
    $sql1       = "delete from link where kode_link = '$kode_link'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error  = "Gagal melakukan delete data";
    }
}
// EDIT
if ($op == 'edit') {
    $kode_link  = $_GET['kode_link'];
    $sql1       = "SELECT * FROM link WHERE kode_link = '$kode_link'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $domain     = $r1['domain'];
    $ip         = $r1['ip'];
    $nama       = $r1['nama'];
    $status     = $r1['status'];
    $tanggal    = $r1['tanggal'];
    $instansi   = $r1['instansi'];
    $foto       = $r1['foto'];
    $keperluan  = $r1['keperluan'];

    if ($domain == '') {
        $error = "Data tidak ditemukan";
    }
}
//SIMPAN
if (isset($_POST['simpan'])) { //untuk create
    $domain         = $_POST['domain'];
    $ip             = $_POST['ip'];
    $nama           = $_POST['nama'];
    $status         = $_POST['status'];
    $tanggal        = $_POST['tanggal'];
    $instansi       = $_POST['instansi'];
    $foto           = $_POST['foto'];
    $keperluan      = $_POST['keperluan'];


    if ($domain && $ip && $nama && $status && $tanggal) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update link set domain = '$domain',ip='$ip',nama = '$nama',status='$status',tanggal='$tanggal' where kode_link = '$kode_link'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into link(domain,ip,nama,status,tanggal) values ('$domain','$ip','$nama','$status','$tanggal')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }

    // daftarpengunjung
    if ($nama && $instansi && $keperluan && $foto && $tanggal) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update link set nama = '$nama',instansi='$instansi',keperluan = '$keperluan',foto='$foto',tanggal='$tanggal' where kode_link = '$kode_link'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into link(nama,instansi,keperluan,foto,tanggal) values ('$nama','$instansi','$keperluan','$foto','$tanggal')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
