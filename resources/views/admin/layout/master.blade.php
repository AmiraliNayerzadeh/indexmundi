<!doctype html>
<html lang="en"  dir="rtl">

<head>

    <meta charset="utf-8" />



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/admin/images/favicon.ico">

    <link href="/assets/admin/libs/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/libs/select2/select2-bootstrap-5-theme.rtl.min.css" rel="stylesheet" type="text/css" />

    <!-- plugin css -->
    <link href="/assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="/assets/admin/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/assets/admin/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/admin/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />




    <link href="/assets/admin/libs/JalaliDatePicker-main/dist/jalalidatepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/admin/libs/ckeditor5/ckeditor5.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-theme="dark" data-topbar="dark" data-sidebar="dark">

<div id="layout-wrapper">



    @include('admin.layout.header')

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layout.sidebar')

    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('admin.layout.footer')



    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="/assets/admin/libs/jquery/jquery.min.js"></script>
<script src="/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/admin/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/admin/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/admin/libs/node-waves/waves.min.js"></script>
<script src="/assets/admin/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="/assets/admin/libs/pace-js/pace.min.js"></script>

<script src="/assets/admin/libs/select2/select2.js"></script>


<!-- apexcharts -->
<script src="/assets/admin/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="/assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="/assets/admin/js/pages/dashboard.init.js"></script>

<script src="/assets/admin/js/app.js"></script>



<script src="/assets/admin/libs/JalaliDatePicker-main/dist/jalalidatepicker.min.js"></script>

<script src="/assets/admin/libs/ckeditor/main.js"></script>

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>


@include('sweetalert::alert')

<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,
        Alignment,
        Heading,
        Table ,
        TableToolbar ,
        Link ,
        AutoLink ,
        PasteFromOffice,
        List ,

    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            language: {
                // The UI will be Arabic.
                ui: 'fa',

                // And the content will be edited in Arabic.
                content: 'fa'
            },
            plugins: [ Essentials, Bold, Italic ,Link,AutoLink, Font, Paragraph , Alignment , Heading , Table , TableToolbar , PasteFromOffice , List ],
            fontFamily: {
                options: [
                    'default',
                    'iranYekan, sans-serif',
                ]
            },
            alignment: {
                options: [ 'left', 'right' ]
            },
            toolbar: {
                items: [
                    'undo', 'redo' ,'|', 'heading' , 'bulletedList' ,'numberedList' ,'|', 'bold', 'italic', 'link' ,'|' ,
                    'fontColor', 'fontBackgroundColor' , 'alignment' ,
                    'insertTable'
                ]
            },
            table: {
                contentToolbar: [
                    'toggleTableCaption'
                ]
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' } ,
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' } ,
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' } ,
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' } ,
                ]
            }
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
</script>

@yield('script')

</body>

</html>