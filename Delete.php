<?php
    require_once('Connection.php');

    $id = $_REQUEST['id'];

    $query_delete = "DELETE FROM transaksi WHERE id = ".$id;
    $execute_query_delete = mysqli_query($connection,$query_delete);

    if ($execute_query_delete) {
        echo json_encode(array('response' => 'success'));
    }else {
        echo json_encode(array('response' => 'failed'));
    }
?>