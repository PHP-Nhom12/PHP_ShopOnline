<?

    include 'include/header.php';

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
                                <span>Sản Phẩm</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="profile col-sm-3">
                                    <!-- <h4 class="block uppercase text-center">Danh Mục</h4> -->
                                    <ul class="list-unstyled profile-nav">
                                        <?
                                        foreach ($danhmuc as $cat_level1 => $cat_level2) {
                                        ?>
                                            <li>
                                                <p class="uppercase font-red-mint bold"><i class="icon-fire"></i> <?=$cat_level1?></p>
                                            </li>
                                            <?
                                            foreach ($cat_level2 as $index => $cat_title) {
                                            ?>
                                            <li>
                                                <a href="product.php?cid=<?=$index?>"><i class="icon-tag"></i> <?=$cat_title?> </a>
                                            </li>
                                            <?
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="col-sm-9">
                                <?

                                    // include_once "include/product/all.php";
                                    include_once("include/index/san-pham-theo-danh-muc.php");

                                ?>
                                    
                                </div>
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

include 'include/footer.php';

?>