<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//Prepare query
$isbn = $_POST['isbn'];

//perintah delete
$query = "DELETE from buku WHERE isbn = {$isbn}";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

//jalankan query
$results = $statement->fetchAll();

//menampilkan status
if ($query) {
    echo "Berhasil Mendaftarkan";
}
else {
    echo "Gagal Mendaftarkan";
}

//output JSON
header('Content-Type: application/json');
echo json_encode($results);