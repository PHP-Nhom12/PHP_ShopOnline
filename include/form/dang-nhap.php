<!-- BEGIN LOGIN FORM -->
<form id="login_form" class="login-form" action="" method="post">
    <h3 class="form-title">Đăng Nhập</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Chưa nhập tên tài khoản và mật khẩu. </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Tên tài khoản</label>
        <input id="username_login" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Tên tài khoản" name="tentaikhoan" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Mật khẩu</label>
        <input id="password_login" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu" name="matkhau" /> </div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase">Đăng Nhập</button>
        <label class="rememberme check mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="ghinho" value="1" />Ghi nhớ
            <span></span>
        </label>
        <a href="javascript:;" id="forget-password" class="forget-password">Quên mật khẩu?</a>
    </div>
    <div class="login-options" style="display: none">
        <h4>Or login with</h4>
        <ul class="social-icons">
            <li>
                <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
            </li>
        </ul>
    </div>
    <div class="create-account">
        <p>
            <a href="javascript:;" id="register-btn" class="uppercase">Tạo Tài Khoản</a>
        </p>
    </div>
</form>
<!-- END LOGIN FORM -->