<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
      style="">
<head>
    <meta http-equiv="content-language" content="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}
    <meta property="fb:admins" content="696085087">
    <meta property="og:image" content="https://www.indexmundi.com/img/compare-200x200.jpg">
    <link href="/s/bootstrap.min.css" rel="stylesheet">
    <link href="/s/site.css" rel="stylesheet">
    <link href="/s/commodities.2.0.1.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    <style type="text/css">
        :focus {
            outline: none;
        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .absolute-wrapper {
            position: fixed;
            width: 300px;
            height: 100%;
            background-color: #f8f8f8;
            border-right: 1px solid #e7e7e7;
        }

        .side-menu {
            position: absolute;
            width: 300px;
            height: 100%;
            background-color: #f8f8f8;
            border-right: 1px solid #e7e7e7;
        }

        .side-menu .navbar {
            border: none;
        }

        .side-menu .navbar-header {
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }

        .side-menu .navbar-nav .active a {
            background-color: transparent;
            margin-right: -1px;
            border-right: 5px solid #e7e7e7;
        }

        .side-menu .navbar-nav li {
            display: block;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }

        .side-menu .navbar-nav li a {
            padding: 15px;
        }

        .side-menu .navbar-nav li a .glyphicon {
            padding-right: 10px;
        }

        .side-menu .dropdown {
            border: 0;
            margin-bottom: 0;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
        }

        .side-menu .dropdown .caret {
            float: right;
            margin: 9px 5px 0;
        }

        .side-menu .dropdown .indicator {
            float: right;
        }

        .side-menu .dropdown > a {
            border-bottom: 1px solid #e7e7e7;
        }

        .side-menu .dropdown .panel-body {
            padding: 0;
            background-color: #f3f3f3;
        }

        .side-menu .dropdown .panel-body .navbar-nav {
            width: 100%;
        }

        .side-menu .dropdown .panel-body .navbar-nav li {
            padding-left: 15px;
            border-bottom: 1px solid #e7e7e7;
        }

        .side-menu .dropdown .panel-body .navbar-nav li:last-child {
            border-bottom: none;
        }

        .side-menu .dropdown .panel-body .panel > a {
            margin-left: -20px;
            padding-left: 35px;
        }

        .side-menu .dropdown .panel-body .panel-body {
            margin-left: -15px;
        }

        .side-menu .dropdown .panel-body .panel-body li {
            padding-left: 30px;
        }

        .side-menu .dropdown .panel-body .panel-body li:last-child {
            border-bottom: 1px solid #e7e7e7;
        }

        .side-menu #search-trigger {
            background-color: #f3f3f3;
            border: 0;
            border-radius: 0;
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px 18px;
        }

        .side-menu .brand-name-wrapper {
            min-height: 50px;
        }

        .side-menu .brand-name-wrapper .navbar-brand {
            display: block;
        }

        .side-menu #search {
            position: relative;
            z-index: 1000;
        }

        .side-menu #search .panel-body {
            padding: 0;
        }

        .side-menu #search .panel-body .navbar-form {
            padding: 0;
            padding-right: 50px;
            width: 100%;
            margin: 0;
            position: relative;
            border-top: 1px solid #e7e7e7;
        }

        .side-menu #search .panel-body .navbar-form .form-group {
            width: 100%;
            position: relative;
        }

        .side-menu #search .panel-body .navbar-form input {
            border: 0;
            border-radius: 0;
            box-shadow: none;
            width: 100%;
            height: 50px;
        }

        .side-menu #search .panel-body .navbar-form .btn {
            position: absolute;
            right: 0;
            top: 0;
            border: 0;
            border-radius: 0;
            background-color: #f3f3f3;
            padding: 15px 18px;
        }

        /* Main body section */
        .side-body {
            margin-left: 310px;
        }

        /* small screen */
        @media (max-width: 768px) {
            .side-menu {
                position: relative;
                width: 100%;
                height: 0;
                border-right: 0;
                border-bottom: 1px solid #e7e7e7;
            }

            .side-menu .brand-name-wrapper .navbar-brand {
                display: inline-block;
            }

            /* Slide in animation */
            @-moz-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-webkit-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-moz-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @-webkit-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            /* Slide side menu*/
            /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
            .side-menu-container > .navbar-nav.slide-in {
                -moz-animation: slidein 300ms forwards;
                -o-animation: slidein 300ms forwards;
                -webkit-animation: slidein 300ms forwards;
                animation: slidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .side-menu-container > .navbar-nav {
                /* Add position:absolute for scrollable menu -> see top comment */
                position: absolute; /*MB: Chnaged from fixed*/
                left: -300px;
                width: 300px;
                top: 43px;
                height: 100%;
                border-right: 1px solid #e7e7e7;
                background-color: #f8f8f8;
                -moz-animation: slideout 300ms forwards;
                -o-animation: slideout 300ms forwards;
                -webkit-animation: slideout 300ms forwards;
                animation: slideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            /* Uncomment for scrollable menu -> see top comment */
            .absolute-wrapper {
                width: 285px;
                -moz-animation: slideout 300ms forwards;
                -o-animation: slideout 300ms forwards;
                -webkit-animation: slideout 300ms forwards;
                animation: slideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            @-moz-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-webkit-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-moz-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @-webkit-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            /* Slide side body*/
            .side-body {
                margin-left: 0px; /*MB: changed from 5px to 0px*/
                margin-top: 70px;
                position: relative;
                -moz-animation: bodyslideout 300ms forwards;
                -o-animation: bodyslideout 300ms forwards;
                -webkit-animation: bodyslideout 300ms forwards;
                animation: bodyslideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .body-slide-in {
                -moz-animation: bodyslidein 300ms forwards;
                -o-animation: bodyslidein 300ms forwards;
                -webkit-animation: bodyslidein 300ms forwards;
                animation: bodyslidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            /* Hamburger */
            .navbar-toggle {
                border: 0;
                float: left;
                padding: 18px;
                margin: 0;
                border-radius: 0;
                background-color: #f3f3f3;
            }

            /* Search */
            #search .panel-body .navbar-form {
                border-bottom: 0;
            }

            #search .panel-body .navbar-form .form-group {
                margin: 0;
            }

            .navbar-header {
                /* this is probably redundant */
                position: fixed;
                z-index: 3;
                background-color: #f8f8f8;
            }

            /* Dropdown tweek */
            .dropdown .panel-body .navbar-nav {
                margin: 0;
            }
        }
    </style>
    <script src="https://secure.quantserve.com/quant.js" async="" type="text/javascript"></script>
    <script type="text/javascript" id="async-buttons" src="https://ws.sharethis.com/button/async-buttons.js"></script>
    <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202409100101/show_ads_impl_fy2021.js"></script>
    <script src="/js/modernizr-2.8.3.js"></script>
    <script type="text/javascript" src="/js/charts.3.7.1/fusioncharts.js"></script>
    <script type="text/javascript">
        function getWidth(minWidth) {
            var width;
            if (window.innerWidth) {
                width = document.getElementById("header").clientWidth;
            } else if (document.all) {
                width = (document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body.clientWidth) - 220 - 350;
            }
            if (width < minWidth) {
                width = minWidth;
            }
            return width;
        }

        function scaleHeight(mapW, mapH, containerW, minHeight, maxHeight) {
            var height = Math.round((mapH / mapW) * containerW);
            if (height < minHeight) {
                height = minHeight;
            }
            if (height > maxHeight) {
                height = maxHeight;
            }
            return height;
        }
    </script>
    <meta name="Description"
          content="Monthly price charts and freely downloadable data for 8 indices and 75 primary commodities. 1980 - current. Includes agricultural products, fuels, metals, beverages, meats, raw materials, etc.">
</head>
<body aria-hidden="false" style="">

<div class="row" style="height: auto !important;">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->

    @include('home.layout.sidebar')

    <!-- Main Content -->
    <div class="container-fluid">
        @yield('content')
    </div>


</div>

<div class="row">
    <div id="footer" align="center">
        <hr width="100%" noshade="noshade" size="1">
        <p><a href="/">Home</a>
            | <a href="/about.html">About</a>
            | <a href="/search.html">Search</a>
            | <a href="/blog/">Blog</a>
        </p>
    </div>
</div>



<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/respond.min.js"></script>




<!-- End Quantcast tag -->


</body>
</html>