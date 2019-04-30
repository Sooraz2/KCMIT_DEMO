@include('includes/head')
<body class="inner-page">
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


    <!-- Toolbar End -->

    <!--Header Start-->
    <!--Header Start-->
    <header id="rs-header-2" class="rs-header-2">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-area">
                            <a href="index.php"><img src="\images\logo-white.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">

                      @include('includes/menu')
                                <!--<div class="searce-box">
                                                       <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                                                   </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
            <!--Header End-->

</div>
<!--Full width header End-->

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="MS_22.html">Home</a>
                        </li>
                        <li>Cantact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- .breadcrumbs-inner end -->
</div>
<!-- Breadcrumbs End -->



@yield('content')



<!-- Partner Start -->

<!-- Partner End -->
@include('includes/footer')
<script>
    $('.rs-course').find('.current-menu-item').removeClass('current-menu-item current_page_item');
    $('.menu-course').addClass('current-menu-item current_page_item');
</script>
</body>
</html>