<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/ogani/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 13:02:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}/Frontend/css/style.css" type="text/css">
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e189848d8d8ea1828e8d8e938d8883cf828e8c">hello@colorlib.com</a></li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{ asset('/') }}/Frontend/img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ asset('/') }}"><img src="{{ asset('/') }}/Frontend/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ asset('/') }}">Home</a></li>
                        <li><a href="{{ asset('/shop-category') }}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{ asset('/shop-details') }}">Shop Details</a></li>
                                <li><a href="{{ asset('/shopping-card') }}">Shopping Cart</a></li>
                                <li><a href="{{ asset('/check-out') }}">Check Out</a></li>
                                <li><a href="{{ asset('/blog-details') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ asset('/blog') }}">Blog</a></li>
                        <li><a href="{{ asset('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
@yield('home')
@yield('shop-category')
@yield('shop-details')
@yield('shopping-card')
@yield('check-out')
@yield('blog-details')
@yield('blog')
@yield('contact')


<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="index-2.html"><img src="{{ asset('/') }}/Frontend/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93fbf6fffffcd3f0fcfffce1fffaf1bdf0fcfe">[email&#160;protected]</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                            Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                        </p></div>
                    <div class="footer__copyright__payment"><img src="{{ asset('/') }}/Frontend/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('/') }}/Frontend/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/jquery-ui.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/jquery.slicknav.js"></script>
<script src="{{ asset('/') }}/Frontend/js/mixitup.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}/Frontend/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/ogani/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 13:03:11 GMT -->
</html>
