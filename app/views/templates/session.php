<?php 
    if (empty($_SESSION['username'])) {
        header('Location: ' . BASEURL . '/auth/login');
    }
?>