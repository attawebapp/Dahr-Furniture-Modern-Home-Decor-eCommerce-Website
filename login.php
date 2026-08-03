<?php
$title = "Login";
include 'include/header.php';
?>

<section class="inner_banner">
    <div class="inner_img">
        <img src="assets/images/inner_banner.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner_cont">
                    <h3>My account</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login_form">
    <div class="container">
        <form action="">
            <div class="form_heading alt">
                <h3>LOGIN</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="login_form_input">
                        <label for="">Username or email address <span>*</span></label>
                        <input type="text" class="form-control top-input" placeholder="test@test.com">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="login_form_input">
                    <label for="">Password <span>*</span></label>
                    <input type="text" class="form-control top-input" placeholder="********">
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form_btn">
                        <button class="themebtn">login</button>
                    </div>
                </div>
            </div>
            <div class="reset-password">
                <div class="remember_me">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Remember me</label>
                </div>
                <a href="javascript:;">Lost your password?</a>
            </div>
        </form>
    </div>
</section>


<?php
include 'include/footer.php';
?>