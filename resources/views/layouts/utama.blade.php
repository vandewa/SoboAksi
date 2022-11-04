<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Sobo Aksi">
    <meta name="keywords" content="sobo aksi">
    <meta name="author" content="SOBO AKSI">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <link rel="apple-touch-icon" href="{{ asset('stack-admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('stack-admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/forms/selects/select2.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/forms/toggle/switchery.min.css')}}"> --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/pages/page-users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/pages/timeline.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/plugins/forms/switch.css')}}"> --}}
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    @vite([])

    @stack('css')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    @include('layouts.navbar')
    @include('layouts/sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts/footer')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('stack-admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('stack-admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    {{-- <script src="{{ asset('stack-admin/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('stack-admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script> --}}
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('stack-admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('stack-admin/app-assets/js/scripts/pages/page-users.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
    {{-- <script src="{{ asset('stack-admin/app-assets/js/scripts/forms/switch.js')}}"></script> --}}

    <!-- END: Page JS-->

    <!-- Laravel Javascript Validation -->
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <!-- END: Laravel Javascript Validation -->

    <!-- Sweetalert -->
    <script src="{{ asset('stack-admin/assets/js/sweetalert2@11.js')}}"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).on('click', '.delete-data-table', function (a) {
            a.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you realy want to delete this records? This process cannot be undone.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete!'
            }).then((result) => {
                if (result.value) {
                    a.preventDefault();
                    var url = $(this).attr('href');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        method: 'delete',
                        success: function () {
                            Swal.fire(
                                'Deleted!',
                                'data has been deleted.',
                                'success'
                            )
                            table.ajax.reload();
                            if (typeof table2) {
                                table2.ajax.reload();
                            }
                        }
                    })
                }
            })
        });
    </script>

    @stack('js')

</body>
<!-- END: Body-->

</html>