<?

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
                                <span>Tất cả sản phẩm</span>
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

                                include_once("include/index/san-pham-ban-chay.php");

                                include_once("include/index/san-pham-moi.php");

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

            //var_dump(include_once("include/index/quick-sidebar.php"));

            ?>
        </div>
        <!-- END CONTAINER -->
    </div>
</div>

<?

include_once("include/footer.php");

?>