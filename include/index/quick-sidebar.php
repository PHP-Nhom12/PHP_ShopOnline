<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-close"></i>
</a>
<div id="quick_sidebar" class="page-quick-sidebar-wrapper bg-dark" data-close-on-body-click="true">
    <div class="page-quick-sidebar login">
        <!-- BEGIN LOGIN -->
        <?
        if (!isset($_SESSION['dang_nhap']))
        {
        ?>
        <div class="content">
        <?
            
                include 'include/form/dang-nhap.php';

                include 'include/form/dang-ky.php';

                include 'include/form/quen-mat-khau.php'; 
        ?>
        </div>
        <?
            } 
            else
            {
                include 'include/cart-sidebar.php';
            }
            
            ?>
        <div class="copyright"> 2018 © Nguyễn Hữu Tiền - Ngô Trần Tuấn Phong. </div>
    </div>
</div>
<!-- END QUICK SIDEBAR -->