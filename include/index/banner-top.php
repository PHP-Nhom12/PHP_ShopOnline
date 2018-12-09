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
                <div id="carousel-example-generic-v2" class="carousel slide widget-carousel" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-red">
                        <li data-target="#carousel-example-generic-v2" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="1" class="circle"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="2" class="circle"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="3" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Mobile Layout</h3>
                                <img class="widget-wrap-img-element img-responsive" src="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1206/Ho18_AJXI_Concord_HP_1600x600.jpg.transform/full-screen/Ho18_AJXI_Concord_HP_1600x600.jpg" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1204/12.4_HP_Generic_Gifting_DT.jpg.transform/full-screen/12.4_HP_Generic_Gifting_DT.jpg" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1204/12.4_HP_NW_RN_VaporMax_MOB.jpg.transform/full-screen/12.4_HP_NW_RN_VaporMax_MOB.jpg" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1204/NIKE429_.com_Ho18_NBA_City_Edition_Desktop_Starter_Image.jpg.transform/full-screen/NIKE429_.com_Ho18_NBA_City_Edition_Desktop_Starter_Image.jpg" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
                <?
                include_once("include/index/san-pham-hot.php");
                ?>
        </div>
    </div>
</div>