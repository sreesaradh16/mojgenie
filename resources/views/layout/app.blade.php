<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ABC BANK</title>
    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-flags.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-payments.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css?1684106062')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/demo.min.css?1684106062')}}" rel="stylesheet" />
    @yield('css')

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{asset('assets/dist/js/demo-theme.min.js?1684106062')}}"></script>
    <div class="page">


        <!-- header starts  -->
        @include('layout.header')
        <!-- header ends -->

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- Page body -->
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{asset('assets/dist/js/tabler.min.js?1684106062')}}" defer></script>
    @yield('js')

    <script>
        function myFunc() {
            setTimeout(function() {
                $('#status_div').fadeOut('fast');
            }, 1000);
        }
    </script>
</body>

</html>