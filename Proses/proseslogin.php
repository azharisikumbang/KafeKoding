<?php
if (isset($_POST['submit'])) {

    include '../koneksi.php';
    
    $id = $_POST['id'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM login WHERE id = '$id' AND password = '$password'") or die (mysqli_error());
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $data = mysqli_fetch_assoc($query);

        if($data['status']=='Mentor'){
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            $_SESSION['nama'] = $data['nama'];
            header('location:../mentor/main.php');
        }
        elseif($data['status']=='Peserta'){
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            $_SESSION['nama'] = $data['nama'];
            header('location:../peserta/main.php');
        }
        else{
            header('location:../loginRegister.php');
        }
    }
    else{
        header('location:../loginRegister.php');
    }
}
?>