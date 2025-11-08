<?php
    switch ($_GET['mod']) {
        case 'beranda': include "page/beranda.php"; break;
        case 'katalog': include "page/katalog_menu.html"; break;
        case 'galeri': include "page/galeri.php"; break;
        case 'login': include "login.php"; break;
    }
?>
