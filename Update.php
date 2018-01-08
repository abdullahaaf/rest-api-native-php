<?php
    require_once('Connection.php');

    $id = $_REQUEST['id'];
    $status = $_REQUEST['status'];
    $jumlah = $_REQUEST['jumlah'];
    $keterangan = $REQUEST['keterangan'];
    $tanggal = $_REQUEST['tanggal'];

    $query_update = "UPDATE transaksi SET status = ".$status.", jumlah = ".$jumlah.", keterangan = ".$keterangan.", tanggal = ".$tanggal." WHERE id = ".$id;
    $execute_query_update = mysqli_query($connection,$query_update);
    
    if ($execute_query_update) {
        echo json_encode(array('response' => 'success'));
    }else {
        echo json_encode(array('response' => 'failed'));
    }
?>