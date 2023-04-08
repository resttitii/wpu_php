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


function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]); //pake htmlspecialchars biar ga gampang dihack
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama', '$nim', '$email', '$prodi', '$gambar')";
    mysqli_query($conn, $query);   
    
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


?>