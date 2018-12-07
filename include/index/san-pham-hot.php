<?


function get_sp_hot() {
    include_once 'libs/xulydb.php';
    $db = new XuLyDB();

    $row = $db->lay_du_lieu("SANPHAM, SanPhamHOT", "SANPHAM.pid = SanPhamHOT.idsanpham AND SANPHAM.daxoa = 0 AND SanPhamHOT.daxoa = 0");

    foreach (array_slice($row, 0, 8) as $product) {
        $tgketthuc=$product['thoigianketthuc'];
        if(date("Y-m-d", strtotime($tgketthuc)) > date('Y-m-d')){
            include "include/product-card.php";
        }
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box-shadow-none">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-fire font-red"></i>
                    <span class="caption-subject font-red bold uppercase">Sản Phẩm HOT</span>
                </div>
                <div class="tools pull-left">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="portfolio-content portfolio-1">
                    <div id="card_sanphamhot" class="cbp">
                        <?get_sp_hot();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>