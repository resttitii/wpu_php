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
    
    
    // upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nama', '$nim', '$email', '$prodi', '$gambar')";
    mysqli_query($conn, $query);   
    
    return mysqli_affected_rows($conn);
}

function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmpname'];


//cek apakah tidak ada gambar yg diupload
    if ($error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
        return false;

    }

//cek yang boleh diupload cuma gambar
    $ekstensigambarvalid = ['jpg', 'jpeg','png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if(!in_array($ekstensigambar, $ekstensigambarvalid)){
        echo "<script>
                alert('yang anda upload bukan gambar');
                </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if($ukuranfile > 100000){
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
return false;    }

//lolos pengecekan siap diupload => gada folder e punyaku ok
//generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpname, 'image/'.$namafilebaru);

    return $namafilebaru;
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]); //pake htmlspecialchars biar ga gampang dihack
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru atau tidak =>> 4 => tidak ada gambar
    if($_FILES ['gambar']['error'] === 4){
        $gambar = $gambarlama;
    } else{
        $gambar = upload();
    }
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                prodi = '$prodi',
                gambar = '$gambar'
                
                WHERE id = $id
                ";
    
    mysqli_query($conn, $query); 
    return mysqli_affected_rows($conn);
}

//ndapake global conn
function cari($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                prodi LIKE '%$keyword%'
                ";
    return query($query);
}





?>