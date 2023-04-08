<?php 
//koneksi ke database => hostname, username, pass, nama database

$conn = mysqli_connect("localhost", "root", "", "phpdasar1");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>