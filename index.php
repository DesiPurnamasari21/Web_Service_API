<?php

    include "conn.php";

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //     $namanya = $_REQUEST['namanya'];
    //     echo $nama;
    // } else
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $qu = "select * from mahasiswa";
        $ko = mysqli_query($conn, $qu);
        while ($data = mysqli_fetch_array($ko)) {
            // var_dump($data);
            $datanya[] = array(
                'NPM' => $data['NPM'],
                'Nama' => $data['Nama'],
                'Jurusan' => $data['Jurusan']
            );
        }

        $respon[] = array(
            'status' => 'OK',
            'kode' => '999',
            'data' => $datanya
        );
        header("Content-type: application/json");
        echo json_encode($respon);
    }

?>