<?php 
$host = "LAPTOP-R5TH9AF7"; 
//nama 3. server\nama instance 
$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => "");
$conn = sqlsrv_connect ($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil.<br />";
 } else {
    echo "Koneksi Gagal";
        die (print_r(sqlsrv_errors(), true)); 
}