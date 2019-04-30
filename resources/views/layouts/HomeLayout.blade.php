@include('includes/head')
<body class="home1">
<!--Preloader area start here-->
<div class="book_preload">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>
<!--Preloader area end here-->

<!--Full width header Start-->
<div class="full-width-header">

    <!-- Toolbar Start -->
    @include('includes/apply-bar')
    <header id="rs-header" class="rs-header">

        <!-- Header Top Start -->
        <div class="rs-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="header-contact">
                            <div id="info-details" class="widget-text">
                                <i class="glyph-icon flaticon-email"></i>
                                <div class="info-text">
                                    <a href="mailto:info@domain.com">
                                        <span>Mail Us</span>
                                        info@domain.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="logo-area text-center">
                            <a href="MS_22.html"><img src="images\logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="header-contact pull-right">
                            <div id="phone-details" class="widget-text">
                                <i class="glyph-icon flaticon-phone-call"></i>
                                <div class="info-text">
                                    <a href="tel\MS_28.html">
                                        <span>Call Us</span>
                                        +1234-567-890
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                @include('includes/menu')
            </div>
        </div>
        <!-- Menu End -->
    </header>

@yield('content')

    @include('includes/footer')


<script>
    $('.rs-menu').find('.current-menu-item').removeClass('current-menu-item current_page_item');
    $('.menu-home').addClass('current-menu-item current_page_item');
</script>
</body>
</html>