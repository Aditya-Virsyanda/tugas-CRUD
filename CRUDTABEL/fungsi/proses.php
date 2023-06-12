<?php
    require_once ('koneksi.php');

    if(isset($_POST['aksi'])){
        if ($_POST['aksi']== "add")

            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $gambar = $_FILES['gambar']['name'];
            $x = move_uploaded_file($_FILES['gambar']['tmp_name'], '../img/'.$gambar);
           

        $query = "INSERT INTO data VALUES (null, '$nisn','$nama', '$kelas', '$gambar')";
        $sql = mysqli_query($koneksi, $query);

        if($sql){
            header("location: http://localhost/CRUDTABEL/dashboard.php");
        } else {
            echo $query;
        }
    } else if ($_POST['aksi']=="edit"){
            echo "edit Data";
        
        
    }
    if (isset($_GET['hapus'])){ 
        $id=$_GET['hapus'];
        $query = "DELETE FROM data WHERE id = '$id'";
        $sql = mysqli_query($koneksi, $query);

        if($sql){
            header("location: http://localhost/CRUDTABEL/dashboard.php");
        } else {
            echo $query;
        }
    }


?>