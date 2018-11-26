<?


function get_data() {
    include_once 'libs/xulydb.php';
    $db = new XuLyDB();

    $row = $db->lay_du_lieu("SANPHAM");

    foreach ($row as $product):
    ?>
        
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="mt-card-item">
                <div class="mt-card-avatar mt-overlay-5">
                    <img src="../assets/images/<?=$product['pid']?>.jpg">
                    <div class="mt-overlay">
                        <!-- <h2>Predator Shop</h2> -->
                        <a class="mt-info uppercase btn default btn-outline" href="product.php?pid=<?=$product['pid']?>"><i class="fa fa-search"></i> Xem chi tiết</a>
                    </div>
                </div>
                <div class="mt-card-content">
                    <h3 class="mt-card-name">
                        <?=$product['tensanpham']?>
                    </h3>
                    <p class="mt-card-desc font-grey-mint">
                        <?= number_format($product['dongia']) ?> VNĐ
                    </p>
                    <div class="mt-card-social">
                        <ul>
                            <li>
                                <a href="cart.php?pid=<?=$product['pid']?>" class="btn btn-transparent btn-no-border btn-circle font-green-meadow font-hover-white bg-hover-green-meadow tooltips" data-original-title="Thêm vào giỏ">
                                    <i class="fa fa-cart-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn btn-transparent btn-no-border btn-circle font-red font-hover-white bg-hover-red tooltips" data-original-title="Yêu thích">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="product.php?pid=<?=$product['pid']?>" class="btn btn-transparent btn-no-border btn-circle font-dark font-hover-white bg-hover-dark tooltips" data-original-title="Xem chi tiết">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn btn-transparent btn-no-border btn-circle font-blue font-hover-white bg-hover-blue tooltips" data-original-title="Chia sẻ">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?
    endforeach;
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-fire font-red"></i>
                    <span class="caption-subject font-red bold uppercase">Sản Phẩm Bán Chạy</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-element-card mt-element-overlay">
                    <div class="row">
                        <?get_data();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>