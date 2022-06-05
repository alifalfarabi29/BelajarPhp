<?php


include '../koneksi.php';
/**
 * @var $connection PDO
 */
//query
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];



$query = "UPDATE buku SET jumlah = '$jumlah', judul = '$judul'  WHERE isbn = ('$isbn')";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

//jalankan query
$results = $statement->fetchAll();


if ($query) {
    echo "Berhasil Mendaftarkan";
}
else {
    echo "Gagal Mendaftarkan";
}

//output JSON
header('Content-Type: application/json');
echo json_encode($results);