<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="top_main">
                    <div class="social">
                        <ul>
                            <li><a href="javascript:;"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-pinterest'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-telegram'></i></a></li>
                        </ul>
                    </div>
                    <div class="top_cont">
                        <p>
                            LIMITED-TIME - GET FREE SHIPPING WORLDWIDE!
                        </p>
                    </div>
                    <div class="login-registor">
                        <ul>
                            <li class="dropdown"><a href="login.php">Login / Register</a>

                                <div class="dropdown_menu">
                                    <div class="top_form">
                                        <form action="">
                                            <div class="form_heading">
                                                <h3>Sign in</h3>
                                                <a href="login.php">create an account</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Username or email address <span>*</span></label>
                                                    <input type="text" class="form-control top-input"
                                                        placeholder="test@test.com">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Password <span>*</span></label>
                                                    <input type="text" class="form-control top-input"
                                                        placeholder="********">
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
                                </div>
                            </li>
                        </ul>
                        <div class="search">
                            <a href="javascript:;" class="search_open" onclick="openSearch()"><i class='bx bx-search'></i></a>
                            <a href="cart.php" class="shoping"><i class='bx bx-shopping-bag'></i> <span>2   </span></a>
                            <a href="javascript:;">$0.00</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-main">

                <a href="index.php" class="header__logo">
                    <img src="assets/images/logo.png" alt="Logo" class="imgFluid" />
                </a>

                <ul class="header-main__nav">
                    <li><a href="product.php">Shop By Style</a></li>
                    <li><a href="product.php">Sofas</a></li>
                    <li><a href="product.php">Shop By Collection</a></li>
                    <li><a href="product.php">Occasional Chairs</a></li>
                    <li><a href="product.php">Planters, Outdoor</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div>
        </div>
    </header>


    <div class="search_bar" id="mySearch">
        <div class="search_posts">
            
            <form action="">
                <input type="search" placeholder="Search for posts">
                <a href="javascropt:;" class="search_close" onclick="closeSearch()">X</a>
            </form>

            <p>Start typing to see posts you are looking for.</p>
        </div>
    </div>