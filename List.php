<?php
    require_once('Connection.php');

    $get_data_from_transaksi = "SELECT * FROM transaksi ORDER BY id DESC";
    $execute_query_get_data = mysqli_query($connection,$get_data_from_transaksi);
    $result_query_get_data = array();
    while($row = mysqli_fetch_array($execute_query_get_data)) {
        array_push($result_query_get_data, array(
            'id' => $row['id'],
            'status' => $row['status'],
            'jumlah' => $row['jumlah'],
            'keterangan' => $row['keterangan'],
            'tanggal' => date("d/m/y", strotime($row['tanggal'])),
            'tanggal' => $row['tanggal']
        ));
    }

    $get_sum_masuk_and_keluar = "SELECT (SELECT SUM(jumlah) FROM transaksi WHERE status = 'MASUK') AS masuk, (SELECT SUM(jumlah) FROM transaksi WHERE status = 'KELUAR') AS keluar";
    $execute_query_sum = mysqli_query($connection, $get_sum_masuk_and_keluar);
    while($row = mysqli_fetch_assoc($execute_query_sum)) {
        $masuk = $row['masuk'];
        $keluar = $row['keluar'];
    }

    echo json_encode(array(
        'masuk' => $masuk,
        'keluar' => $keluar,
        'saldo' => ( $masuk - $keluar ),
        'result' => $result
    ));

    mysqli_close($connection);
?>