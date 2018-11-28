<? 

    include_once 'libs/xulydb.php';
    $db = new XuLyDB();

    $rows = $db->lay_du_lieu("LoaiSP");

    $products = $db->lay_du_lieu("SANPHAM");

    $danhmuc = [];

    foreach ($rows as $row) {

        if ($row['iddanhmuc']==0) {
            $idloai = $row['idloai'];

            foreach ($rows as $c_row) {
                if ($c_row['iddanhmuc'] == $idloai) {
                    $danhmuc[$row['tenloai']][$c_row['idloai']] = $c_row['tenloai'];
                }
            }
        }
    }

    //var_dump($danhmuc);

    foreach ($danhmuc as $cat_level1 => $cat_level2) {
    ?>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-fire font-blue"></i>
                    <!-- category level 1 -->
                    <span class="caption-subject font-blue bold uppercase"><?=$cat_level1?></span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs">
                    <!-- category level 2 -->
                    <?
                    foreach ($cat_level2 as $index => $cat_title) {
                    ?>
                        <li class="<?=($index==4||$index==9||$index==7)?'active':''?>">
                            <a href="#danhmuc_<?=$index?>" data-toggle="tab" aria-expanded="true"> <?=$cat_title?> </a>
                        </li>
                    <?    
                    }
                    ?>
                    </ul>
                    <div class="tab-content">
                    <!-- category level 3 -->
                    <?
                    foreach ($cat_level2 as $index => $cat_title) {
                    ?>
                    <div class="tab-pane <?=($index==4||$index==9||$index==7)?'active':''?>" id="danhmuc_<?=$index?>">
                        <div class="portfolio-content portfolio-1">
                            <div id="card_<?=$index?>" class="cbp">
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
                    <?
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?
        
    }

?>

