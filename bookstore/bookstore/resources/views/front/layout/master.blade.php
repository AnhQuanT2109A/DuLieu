
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="front/book.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    {{--font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--icon--}}
    <link rel="stylesheet" href="front/fonts/icomoon/style.css">
    <link rel="stylesheet" href="front/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="front/css/themify-icons/themify-icons.css">

    <link rel="stylesheet" href="front/css/tiny-slider.css">
    <link rel="stylesheet" href="front/css/aos.css">
    <link rel="stylesheet" href="front/css/style.css">

    <title>BookStore &mdash; @yield('title')</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="./" class="logo m-0 float-start">Bookstore</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end filter-control">
                    <li class="item active"><a href="./">Home</a></li>
                    <li class="item has-children">
                        <a href="./product">Products</a>
                        <ul class="dropdown">
                            <li><a href="#">Commic</a></li>
                            <li><a href="#">Economy</a></li>
                            <li><a href="#">TextBook</a></li>

{{--                            <li class="has-children">--}}
{{--                                <a href="#">Dropdown</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="#">Sub Menu One</a></li>--}}
{{--                                    <li><a href="#">Sub Menu Two</a></li>--}}
{{--                                    <li><a href="#">Sub Menu Three</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
{{--                    <li><a href="./service">Services</a></li>--}}
                    <li class="item"><a href="./about">About</a></li>
                    <li class="item"><a href="./contact">Contact Us</a></li>

                    <li><a href="./account/login">Login</a></li>
                    <li>
                        <div class="cart-icon">
                            <a href="cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>{{ Cart::count() }}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            @foreach(Cart::content() as $cart)
                                            <tr>
                                                <td class="si-pic"><img style="height: 120px" src="front/img/{{ $cart->options->images[0]->path }}"> </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>${{ number_format($cart->price, 2) }} x {{$cart->qty}}</p>
                                                        <h6>{{ $cart->name }}</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i onclick="window.location='./cart/delete/{{ $cart->rowId }}'" class="ti-close"></i>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>Total:</span>
                                    <h5>${{ Cart::total() }}</h5>
                                </div>
                                <div class="select-button">
                                    <a href="./cart" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="./checkout" class="primary-btn view-card">CHECK OUT</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </div>
</nav>

@yield('body')

<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Sources</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Links</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>

                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">
                <!--
          **==========
          NOTE:
          Please don't remove this copyright link unless you buy the license here https://untree.co/license/
          **==========
        -->

                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved &mdash; Designed with love by <a href="https://untree.co">Group 2</a> <!-- License information: https://untree.co/license/ -->
                </p>

            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->


<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


<script src="front/js/bootstrap.bundle.min.js"></script>
<script src="front/js/tiny-slider.js"></script>
<script src="front/js/aos.js"></script>
<script src="front/js/navbar.js"></script>
<script src="front/js/counter.js"></script>
<script src="front/js/custom.js"></script>
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/main.js"></script>

</body>
</html>
