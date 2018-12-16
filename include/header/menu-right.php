<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
        <!-- END NOTIFICATION DROPDOWN -->
        <?

            if(!isset($_SESSION['dang_nhap'])) {
                (!isset($_SESSION['gio-hang'])) ? $cart_nums = 0 : $cart_nums = count($_SESSION['gio-hang']);
            
            ?>
                <!-- SECTION "CHƯA ĐĂNG NHẬP" -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <li class="dropdown dropdown-extended">
                    <a href="cart.php">
                    <div class="header-cart">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span class="badge badge-danger"><?=$cart_nums?></span>
                    </div>
                </a>
                </li>
                <!-- END USER LOGGED IN DROPDOWN -->
                <li class="droddown dropdown-separator">
                    <span class="separator"></span>
                </li>
                <li class="quick-sidebar-toggler">
                    <div class="dropdown-toggle">
                        Đăng Nhập
                    </div>
                </li>

                <!-- END SECTION "CHƯA ĐĂNG NHẬP" -->
            <?
            }
            else
            {
            ?>
                <!-- BEGIN USER LOGGED IN DROPDOWN -->
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="../assets/layouts/layout3/img/avatar9.jpg">
                        <span class="username username-hide-mobile"><?=$_SESSION['dang_nhap']['tentaikhoan']?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-user"></i> Thông tin của tôi </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-calendar"></i> Lịch sử giao dịch </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-credit-card"></i> Thanh toán
                                <span class="badge badge-success"> <?=count($_SESSION['gio-hang'])?> </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-lock"></i> Đổi mật khẩu </a>
                        </li>
                        <li>
                            <a href="/include/form/dang-xuat.php">
                                <i class="icon-key"></i> Đăng xuất </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGGED IN DROPDOWN -->
                <li class="droddown dropdown-separator">
                    <span class="separator"></span>
                </li>
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <li class="dropdown dropdown-extended quick-sidebar-toggler">
                    <div class="header-cart">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span class="badge badge-danger"><?=count($_SESSION['gio-hang'])?></span>
                    </div>
                </li>
                <li class="dropdown dropdown-extended dropdown-dark">
                    <a href="/include/form/dang-xuat.php" class="dropdown-toggle">
                        Đăng xuất
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            <?

            }

            ?>
        
    </ul>
</div>