<? 

    include_once 'libs/xulydb.php';
    $db = new XuLyDB();

    $rows = $db->lay_du_lieu("LoaiSP");

    $products = $db->lay_du_lieu("SANPHAM");

    $danhmuc = [];

    $classNames = [];

    foreach ($rows as $row) {

        if ($row['iddanhmuc']==0) {
            $idloai = $row['idloai'];

            foreach ($rows as $c_row) {
                if ($c_row['iddanhmuc'] == $idloai) {
                    $danhmuc[$row['tenloai']][$c_row['idloai']] = $c_row['tenloai'];
                    $classNames[] = "card_".$c_row['idloai'];
                }
            }
        }
    }

    //var_dump($classNames);

    foreach ($danhmuc as $cat_level1 => $cat_level2) {
    ?>
        <div class="row margin-bottom-40 category-header">
            <div class="col-md-12">
                <h1><?=$cat_level1?></h1>
                <!-- <h2>Life is either a great adventure or nothing</h2>
                <button type="button" class="btn btn-danger">JOIN US TODAY</button> -->
            </div>
        </div>
        <?
        foreach ($cat_level2 as $index => $cat_title) {
        ?>
        <div class="portlet box-shadow-none">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-fire font-blue"></i>
                    <!-- category level 1 -->
                    <span class="caption-subject font-blue bold uppercase"><?=$cat_title?></span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="portfolio-content portfolio-1">
                    <div name="card_<?=$index?>" class="cbp">
                        <!-- begin product card -->
                        <?
                        foreach ($products as $product) {
                            if ($product['loaisp'] == $index) {
                                include "include/product-card.php";
                            }
                        }
                        ?>
                        <!-- end product card -->
                    </div>
                </div>
            </div>
        </div>
        <?    
        }
        ?>
    <?
    }

?>
