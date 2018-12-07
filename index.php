<?
session_start();

if(isset($_POST['tentaikhoan']) && isset($_POST['matkhau'])) {
    require('require/db.php');
    # Buoc 2: Tao cau truy van SQL
    $sql = "SELECT * FROM `TAIKHOAN` WHERE `tentaikhoan`='".$_POST['tentaikhoan']."' AND `matkhau`='".md5($_POST['matkhau'])."'";
    
    # Buoc 3: thuc thi SQL
    $result = $conn->query($sql);
    $n = $result->num_rows;
    if($n > 0) {
        $user = $result->fetch_assoc();
    }
    # Buoc 4: Dong ket noi
    $conn->close();
    
    if($n > 0) {
        // Đưa thông tin của người đăng nhập vào session
        $_SESSION['dang_nhap'] = $user;
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

                                include_once("include/index/san-pham-hot.php");

                                include_once("include/index/san-pham-theo-danh-muc.php");

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