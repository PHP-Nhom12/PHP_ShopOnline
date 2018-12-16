<?

session_start();

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
        // var_dump($i);
        for ($i=0; $i < count($san_phams); $i++) { 
            if ($san_phams[$i]['pid'] == $_GET['pid']) {
                $san_pham = $san_phams[$i];
                break;
            }
        }
        
        $san_pham['so_luong'] = 1;
        $gio_hang[] = $san_pham;
    }
    
    $_SESSION['gio-hang'] = $gio_hang;
}


    // var_dump($_SESSION['gio-hang'], $gio_hang);
    
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
                                                                        <th> Mã SP </th>
                                                                        <th> Hình ảnh </th>
                                                                        <th> Tên sản phẩm </th>
                                                                        <th> Màu sắc </th>
                                                                        <th> Kích thước </th>
                                                                        <th> Đơn giá </th>
                                                                        <th> Số lượng </th>
                                                                        <th> Thành tiền </th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?
                                                                    if (empty($gio_hang)) {
                                                                    ?>
                                                                        <tr>
                                                                            <td class="text-center" colspan="9">Giỏ hàng rỗng, quay lại và thêm một vài món đồ vào nhé !</td>
                                                                        </tr>
                                                                    <?
                                                                    }
                                                                    else {
                                                                        foreach ($gio_hang as $key => $value):
                                                                    ?>
                                                                    <tr>
                                                                        <td><?=$value['pid']?></td>
                                                                        <td><img width="150px" src="../assets/images/<?=$value['pid']?>.jpg"></td>
                                                                        <td>
                                                                            <a href="product.php?pid=<?=$value['pid']?>"> <?=$value['tensanpham']?> </a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td> <?=number_format($value['dongia'])?>đ </td>
                                                                        <td> 
                                                                                <span class="btn btn-icon-only btn-link text-danger cin-minus md-skip" data-target-pid="<?=$value['pid']?>"><i class="fa fa-angle-down"></i></span>

                                                                                <span style="padding:5px" class="cart-item-nums" data-pid="<?=$value['pid']?>"><?=$value['so_luong']?></span>

                                                                                <span class="btn btn-icon-only btn-link text-success cin-plus md-skip" data-target-pid="<?=$value['pid']?>"><i class="fa fa-angle-up"></i></span>
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            <span class="cart-items-total"><?=number_format($value['so_luong']*$value['dongia'])?>đ</span>
                                                                        </td>
                                                                        <td>
                                                                            <a href="/include/remove-cart-item.php?key=<?=$key?>" class="btn btn-sm btn-danger bs-confirm" data-toggle="confirmation" data-popout="true" data-singleton="true" data-btn-ok-label="Xác nhận"  data-btn-cancel-label="Hủy" data-title='Sản phẩm "<?=$value['tensanpham']?>" sẽ bị xóa khỏi giỏ hàng?'>
                                                                                <i class="fa fa-close"></i> Xóa khỏi giỏ hàng</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?
                                                                        endforeach;
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div> <!-- row -->
                                                    <div class="row">
                                                        <div class="col-md-6 text-right">
                                                            <a href="product.php" class="btn btn-sm btn-info"><i class="fa fa-chevron-left"></i> Tiếp tục mua hàng</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="checkout.php" class="btn btn-sm btn-success">Thanh toán <i class="fa fa-chevron-right"></i></a>
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