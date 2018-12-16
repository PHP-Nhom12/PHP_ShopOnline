<?
    include_once __DIR__.'/../../libs/xulydb.php';
    
    $db = new XuLyDB();

    $param = "idsanpham = '".$_GET['pid']."' AND daxoa = 0";

    $rows = $db->lay_du_lieu("HinhAnhSP", $param);

    $row = $db->lay_du_lieu("SANPHAM", "pid = '".$_GET['pid']."' AND daxoa = 0");

    $params = "ChiTietSP.idsanpham = '".$_GET['pid']."' AND ChiTietSP.idmausac = MauSacSP.id AND ChiTietSP.idkichthuoc = KichThuocSP.id";

    $ctsp = $db->lay_du_lieu("ChiTietSP, MauSacSP, KichThuocSP", $params);

    // var_dump($ctsp);
?>

<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.php">Trang chủ</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Chi tiết sản phẩm</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="profile">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="carousel-home">
                            <div id="slide_banner_top" class="carousel slide widget-carousel" data-ride="carousel">
                            <!-- Indicators -->
                                <ol class="carousel-indicators carousel-indicators-red">
                                <?
                                    foreach ($rows as $key => $value) {
                                ?>
                                    <li data-target="#slide_banner_top" data-slide-to="<?=$key?>" class="circle <?=($key==0)?'active':''?>"></li>
                                <?
                                    }
                                ?>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                <?
                                foreach ($rows as $key => $value) {
                                ?>
                                    <div class="item <?=($key==0)?'active':''?>">
                                        <div class="widget-wrap-img widget-bg-color-white">
                                            <h3 class="widget-wrap-img-title"><?=$value['idsanpham']?></h3>
                                            <img class="widget-wrap-img-element img-responsive" src="<?=$value['duongdan']?>" alt=""> </div>
                                    </div>
                                <?
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 profile-info">
                                <h1 class="font-green sbold uppercase"><?=$row[0]['tensanpham']?></h1>
                                <p>
                                    <h1 class="font-red sbold"> <?= number_format($row[0]['dongia']) ?> VNĐ </h1>
                                </p>
                                <div class="well"> <?=$row[0]['mota']?> </div>
                                <ul class="list-inline">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?=$ctsp[0]['chatlieu']?> </li>
                                    <li>
                                        <i class="fa fa-calendar"></i> <?=$ctsp[0]['gioitinh']?> </li>
                                    <?
                                    foreach ($ctsp as $item) {
                                    ?>
                                    <li>
                                        <i class="fa fa-heart"></i> <?=$item['tenmau']?> </li>
                                    <?    
                                    }
                                    ?>
                                </ul>
                                <div class="form-group">
                                    <label>Chọn kích thước</label>
                                    <div class="mt-radio-inline">
                                    <?
                                    foreach ($ctsp as $item) {
                                    ?>
                                        <label class="mt-radio">
                                            <input type="radio" name="sizes" value="<?=$item['tenkichthuoc']?>"> <?=$item['tenkichthuoc']?>
                                            <span></span>
                                        </label>
                                    <?    
                                    }
                                    ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!--end col-md-12-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>