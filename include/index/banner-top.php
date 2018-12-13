<?

$rows = $db->lay_du_lieu("BannerQuangCao", "vitri = 'index' AND daxoa = 0");

?>

<div class="c-content-feedback-1 c-option-1">
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
                                <h3 class="widget-wrap-img-title"><?=$value['tenchiendich']?></h3>
                                <img class="widget-wrap-img-element img-responsive" src="<?=$value['hinhanh']?>" alt=""> </div>
                        </div>
                    <?
                    }
                    ?>
                    </div>
                </div>
            </div>
                <?
                include_once("include/index/san-pham-hot.php");
                ?>
        </div>
    </div>
</div>