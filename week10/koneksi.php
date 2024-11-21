<?php 
$host = "LAPTOP-R5TH9AF7\SQLDEVELOPERS"; 
//nama 3. server\nama instance 
$connInfo = array("Database" => "TSQL", "UID" => "", "PWD" => "");
$conn = sqlsrv connect ($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil.<br />";
 } else {
    echo "Koneksi Gagal";
        die (print_r(sqlsrv_errors(), true)); 
}