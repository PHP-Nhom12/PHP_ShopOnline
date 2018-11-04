<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-close"></i>
</a>
<div id="quick_sidebar" class="page-quick-sidebar-wrapper bg-dark" data-close-on-body-click="false">
    <div class="page-quick-sidebar page-quick-sidebar-chat login">
        <!-- BEGIN LOGIN -->
        <div class="content">
            <?

            if(isset($_SESSION['dang_nhap'])) {
            {
            
                include 'include/form/dang-nhap.php';

                include 'include/form/dang-ky.php';

                include 'include/form/quen-mat-khau.php'; 

            } else {
                include 'include/form/gio-hang.php';
            }
            
            ?>
        </div>
        <div class="copyright"> 2018 © Nguyễn Hữu Tiền - Ngô Trần Tuấn Phong. </div>
    </div>
</div>
<!-- END QUICK SIDEBAR -->