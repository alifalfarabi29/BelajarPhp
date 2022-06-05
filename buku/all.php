<?php
include '../koneksi.php';
$query = "select * from buku";
/**
*@var $connection PDO
*/
$statement = $connection->query($query);
$statement -> setFetchMode(PDO::FETCH_ASSOC);

//jalankan query
$results = $statement->fetchAll();
//output
header('Content-Type: application/json');
echo json_encode($results);