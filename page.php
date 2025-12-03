<?php
switch ($_GET['mod']) {
    case 'beranda':
        include "page/beranda.php";
        break;
    case 'shop':
        include "page/shop.php";
        break;
    case 'katalog':
        include "page/katalog_menu.html";
        break;
    case 'galeri':
        include "page/galeri.php";
        break;
    case 'produk':
        include "page/halaman_produk.php";
        break;
    case 'login':
        include "admin/template/sidebar.php";
        break;
    case 'faq':
        include "page/faq.php";
        break;
    case 'tentang_kami':
        include "page/tentang_kami.php";
        break;
    case 'visi_misi':
        include "page/visi_misi.php";
        break;
    case 'carousel':
        include "admin/page/carousel.php";
        break;

    case 'faq':
        include "admin/page/faq.php";
        break;

    case 'produk':
        include "admin/page/produk.php";
        break;

    case 'ulasan':
        include "admin/page/ulasan.php";
        break;
    case 'galeri':
        include "admin/page/galeri.php";
        break;
    case 'logbook':
        include "admin/page/logbook.php";
        break;
}
