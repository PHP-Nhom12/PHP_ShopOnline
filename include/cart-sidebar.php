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
<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
    <div class="page-quick-sidebar-alerts-list">
        <h3 class="list-heading">General</h3>
        <ul class="feeds list-items">
        <?
        foreach ($gio_hang as $i => $value) {
        ?>
            <!-- <li>
                <div class="col1">
                    <div class="cont">
                        <div class="cont-col1">
                            <div class="label label-sm label-info">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="cont-col2">
                            <div class="desc"> You have 4 pending tasks.
                                <span class="label label-sm label-warning "> Take action
                                    <i class="fa fa-share"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="date"> Just now </div>
                </div>
            </li> -->
            <li class="media">
                <img class="media-object" src="assets/images/<?=$value['pid']?>.jpg" alt="...">
                <div class="media-body">
                    <div class="media-status">
                        <span class="badge badge-success"><?=$value['soluong']?></span>
                    </div>
                    <h4 class="media-heading"><?=$value['tensanpham']?></h4>
                    <div class="media-heading-sub"> <?=$value['dongia']?> </div>
                </div>
            </li>
        <?
        }
        ?>
        </ul>
    </div>
</div>