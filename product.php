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
                <?

                    if (isset($_GET['pid']))
                        include_once "include/product/detail.php";
                    else
                        include_once "include/product/all.php";

                ?>
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