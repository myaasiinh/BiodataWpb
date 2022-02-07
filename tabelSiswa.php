<?php

//inialisasi biodata siswa
$nisn = "";
$nama = "";
$kelas = "";
$jurusan = "";
$urutan = "";
$tempat_lahir = "";
$tanggal_lahir = "";
$hobi = "";

//function update biodata 
function updateBiodata($nisn, $nama, $kelas, $jurusan, $urutan, $tempat_lahir, $tanggal_lahir, $hobi){
    $conn = connect();
    $sql = "UPDATE biodata SET nama='$nama', kelas='$kelas', jurusan='$jurusan', urutan='$urutan' tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', hobi='$hobi' WHERE nisn='$nisn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

///function untuk menampilkan data siswa
function tampilBiodata(){
    $conn = connect();
    $sql = "SELECT * FROM biodata";
    $result = mysqli_query($conn, $sql);
    $data = [];
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    return $data;
}


////function delete biodata
function deleteBiodata($nisn){
    $conn = connect();
    $sql = "DELETE FROM biodata WHERE nisn='$nisn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

