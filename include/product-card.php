<div class="cbp-item">
    <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
            <img src="../assets/images/<?=$product['pid']?>.jpg" alt=""> </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                    <a href="include/product/detail.php?pid=<?=$product['pid']?>" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">Xem chi tiết</a>
                    <a href="cart.php?pid=<?=$product['pid']?>" class="cbp-l-caption-buttonRight btn red uppercase btn red uppercase">Thêm vào giỏ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center"><?=$product['tensanpham']?></div>
    <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">
        <p class="mt-card-desc font-grey-mint">
            <?= number_format($product['dongia']) ?> VNĐ
        </p>
    </div>
</div>