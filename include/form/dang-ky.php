<?



?>
<!-- BEGIN REGISTRATION FORM -->
<!-- <form class="register-form" method="post"> -->
<form class="register-form">
    <h3 class="font-green">Đăng Ký</h3>
    <p class="hint"> Vui lòng điền đầy đủ thông tin: </p>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Tên tài khoản</label>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Tên tài khoản" name="username" id="username" required="" /> </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" id="email" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Địa Chỉ</label>
        <textarea class="form-control placeholder-no-fix" type="text" placeholder="Địa chỉ" name="address" id="address" required="" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Mật khẩu</label>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu" name="password" id="password" required="" /> </div>
    <!-- <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Nhập lại mật khẩu</label>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Nhập lại mật khẩu" name="rpassword" id="rpassword" required="" /> </div> -->
    <div class="form-group margin-top-20 margin-bottom-20">
        <label class="mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="tnc" id="tnc" /> Tôi đồng ý với
            <a href="javascript:;">Điều khoản sử dụng </a> &
            <a href="javascript:;">Dịch vụ </a>
            <span></span>
        </label>
        <div id="register_tnc_error"> </div>
    </div>
    <div class="form-actions">
        <button type="button" id="register-back-btn" class="btn green btn-outline">Quay Lại</button>
        <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Đăng Ký</button>
    </div>
</form>
<!-- END REGISTRATION FORM -->