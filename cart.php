<?

include 'include/header.php';

// get SANPHAM
$san_phams = $db->lay_du_lieu("SANPHAM");

$gio_hang = [];

// Da co san pham trong session
if (isset($_SESSION['gio-hang']))
{
    $gio_hang = $_SESSION['gio-hang'];
}


if (isset($_GET['pid']))
{
    for ($i=0; $i < count($gio_hang); $i++) {
        if ($gio_hang[$i]['pid'] == $_GET['pid']) {
            $gio_hang[$i]['so_luong']++;
            break;
        }
    }



    if ($i == count($gio_hang)) {
    var_dump($i);
        for ($i=0; $i < count($san_phams); $i++) { 
            if ($san_phams[$i]['pid'] == $_GET['pid']) {
                $san_pham = $san_phams[$i];
                break;
            }
        }

        $san_pham['so_luong'] = 1;
        $gio_hang[] = $san_pham;
    }

}

    $_SESSION['gio-hang'] = $gio_hang;

    
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
                                <span>Chi tiết giỏ hàng</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            <div class="mt-content-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light portlet-fit ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-fire font-red"></i>
                                                    <span class="caption-subject font-red bold uppercase">Chi Tiết Giỏ Hàng</span>
                                                </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="mt-element-card mt-element-overlay">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Mã sản phẩm </th>
                                                                        <th> Hình ảnh </th>
                                                                        <th> Tên sản phẩm </th>
                                                                        <th> Đơn giá </th>
                                                                        <th> Số lượng </th>
                                                                        <th> Thành tiền </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <? 
                                                                    foreach ($gio_hang as $key => $value):
                                                                    ?>
                                                                    <tr>
                                                                        <td><?=$value['pid']?></td>
                                                                        <td><img width="150px" src="../assets/images/<?=$value['pid']?>.jpg"></td>
                                                                        <td>
                                                                            <a href="product.php?pid=<?=$value['pid']?>"> <?=$value['tensanpham']?> </a>
                                                                        </td>
                                                                        <td> <?=number_format($value['dongia'])?>đ </td>
                                                                        <td> 
                                                                                <span class="btn btn-sm btn-warning" data-target-pid="<?=$value['pid']?>"><i class="fa fa-minus"></i></span>
                                                                                <span class="cart-item-nums" data-pid="<?=$value['pid']?>"><?=$value['so_luong']?></span>
                                                                                <span class="btn btn-sm btn-success" data-target-pid="<?=$value['pid']?>"><i class="fa fa-plus"></i></span>
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            <a href="/include/remove-cart-item.php?key=<?=$key?>" class="btn btn-sm btn-danger">
                                                                                <i class="fa fa-close"></i> Xóa khỏi giỏ hàng</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?
                                                                        
                                                                    endforeach;
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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