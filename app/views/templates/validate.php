<?php 
if(empty($_SESSION['role'])){
    header('Location: ' . BASEURL . '/auth/login');
}elseif ($_SESSION['role']!=='admin') {
    echo "<div>Tidak ada hak mengakses halaman ini! <a href='".BASEURL."/'>Kembali</a></div>";
    die;
}
?>