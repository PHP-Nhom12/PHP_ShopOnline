<?

    session_start();

    include_once 'libs/xulydb.php';
    $db = new XuLyDB();

    $rows = $db->lay_du_lieu("LoaiSP");

    $products = $db->lay_du_lieu("SANPHAM");

    $danhmuc = [];

    $classNames = [];

    $danhmuc2 = [];

    foreach ($rows as $row) {

        if ($row['iddanhmuc']==0) {
            $idloai = $row['idloai'];

            foreach ($rows as $c_row) {
                if ($c_row['iddanhmuc'] == $idloai) {
                    $danhmuc[$row['tenloai']][$c_row['idloai']] = $c_row['tenloai'];
                    $classNames[] = "card_".$c_row['idloai'];
                }
            }
        }
    }

    // danh mục theo cid
    if (isset($_GET['cid'])) {
        $products = $db->lay_du_lieu("SANPHAM", "daxoa = 0 and loaisp=".$_GET['cid']);

        foreach ($rows as $row) {

            if ($row['iddanhmuc']==0) {
                $idloai = $row['idloai'];

                foreach ($rows as $c_row) {
                    if ($c_row['iddanhmuc'] == $idloai && $c_row['idloai'] == $_GET['cid']) {
                        $danhmuc2[$row['tenloai']][$c_row['idloai']] = $c_row['tenloai'];
                    }
                }
            }
        }
    }
    else {
        foreach ($rows as $row) {

            if ($row['iddanhmuc']==0) {
                $idloai = $row['idloai'];

                foreach ($rows as $c_row) {
                    if ($c_row['iddanhmuc'] == $idloai) {
                        $danhmuc2[$row['tenloai']][$c_row['idloai']] = $c_row['tenloai'];
                    }
                }
            }
        }
    }

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <?

    include_once("include/header/header-css.php");

    ?>
    <!-- END HEAD -->
    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.php">
                                        <img src="../assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                
                                <?

                                include_once("include/header/menu-right.php");

                                ?>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="search.php" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" name="q">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true">
                                            <a href="index.php"> Trang Chủ
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <?
                                        foreach ($danhmuc as $cat_level1 => $cat_level2) {
                                        ?>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> <?=$cat_level1?>
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                            <?
                                            foreach ($cat_level2 as $index => $cat_title) {
                                            ?>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="product.php?cid=<?=$index?>" class="nav-link  "><i class="icon-tag"></i> <?=$cat_title?> </a>
                                                </li>
                                            <?
                                            }
                                            ?>
                                            </ul>
                                        </li>
                                        <?
                                        }
                                        ?>
                                        <li aria-haspopup="true">
                                            <a href="cart.php"> Giỏ Hàng
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            