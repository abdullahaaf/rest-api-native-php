<?php
    require_once('Connection.php');
    
    $status = $_REQUEST['status'];
    $jumlah = $_REQUEST['jumlah'];
    $keterangan = $_REQUEST['keterangan'];
    $tanggal = date('Y-m-d');

    $query_insert_data = "INSERT INTO transaksi (status,jumlah,keterangan,tanggal) VALUES(".$status.",".$jumlah.",".$keterangan.",".$tanggal.")";
    $execute_query_insert = mysqli_query($connection,$query_insert_data);

    if ($execute_query_insert) {
        echo json_encode(array('response' => 'success'));
    }else {
        echo json_encode(array('response' => 'failed'));
    }
?>