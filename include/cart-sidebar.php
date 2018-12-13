<?

    $gio_hang = [];

    // Da co san pham trong session
    if (isset($_SESSION['gio-hang']))
    {
        $gio_hang = $_SESSION['gio-hang'];
    }

    // for ($i=0; $i < count($gio_hang); $i++) {
    //     if ($gio_hang[$i]['pid'] == $_GET['pid']) {
    //         $gio_hang[$i]['so_luong']++;
    //         break;
    //     }
    // }


    // if ($i == count($gio_hang)) {
    //     for ($i=0; $i < count($san_phams); $i++) { 
    //         if ($san_phams[$i]['pid'] == $_GET['pid']) {
    //             $san_pham = $san_phams[$i];
    //             break;
    //         }
    //     }

    //     $san_pham['so_luong'] = 1;
    //     $gio_hang[] = $san_pham;
    // }
?>
<div class="tab-pane active page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
    <div class="page-quick-sidebar-alerts-list">
        <h3 class="list-heading">Giỏ Hàng</h3>
        <ul class="feeds list-items">
        <?
        // var_dump($gio_hang);
        foreach ($gio_hang as $i => $value) {
            $tong = $value['so_luong']*$value['dongia'];
        ?>
            <li>
                <div class="col1">
                    <div class="cont">
                        <div class="cont-col1">
                                <img width="50px" class="rounded" src="assets/images/<?=$value['pid']?>.jpg" alt="...">
                        </div>
                        <div class="cont-col2">
                            <div class="desc">
                            <!-- <span class="label label-sm label-info "> <?=$value['pid']?> </span> -->
                            <?=$value['tensanpham']?>
                            <a href="javascript:;" class="label label-sm label-danger text-white"> <i class="fa fa-remove"></i></a> <br/>
                            <span class="text-muted">Số lượng: <?=$value['so_luong']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="date"><?=number_format($tong)?>đ </div>
                </div>
            </li>
        <?
        }
        ?>
        </ul>
    </div>
</div>