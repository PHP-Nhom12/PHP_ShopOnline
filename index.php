<?

session_start();

if(isset($_POST['tentaikhoan']) && isset($_POST['matkhau'])) {
    require_once('libs/xulydb.php');

    $db = new XuLyDB();
    $kq = $db->lay_du_lieu("TAIKHOAN", "tentaikhoan = '".$_POST['tentaikhoan']."' AND matkhau ='".md5($_POST['matkhau'])."'");
    
    if(!empty($kq)) {
        $_SESSION['dang_nhap'] = $kq[0];
    } else {
        echo "Tên đăng nhập hoặc mật khẩu chưa đúng";
    }

}

include_once('include/header.php');

?>

<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.php">Trang chủ</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Trang chủ</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">

                            <?

                            include_once("include/index/banner-top.php");

                            ?>
                            
                            <div class="mt-content-body">

                                <? 

                                //include_once("include/index/san-pham-ban-chay.php");

                                ?>

                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <?

            include_once("include/index/quick-sidebar.php");

            ?>
        </div>
        <!-- END CONTAINER -->
    </div>
</div>

<?

include_once("include/footer.php");

?>