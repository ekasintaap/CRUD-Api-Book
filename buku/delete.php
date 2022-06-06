<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */
if ($_POST){
    $isbn = $_POST['isbn'];

    $stmt = $connection->prepare("DELETE FROM buku WHERE isbn = '1323'");
    $stmt->execute();

    $response['message'] = "Data Berhasil di Hapus";

    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;

} else {
    $response['message'] = "Delete Data Gagal";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}