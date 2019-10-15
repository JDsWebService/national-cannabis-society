<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>NCS Admin - @yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    </head>

    <body id="page-top">

        @include('partials.admin.navbar')

        @component('components.who')
        @endcomponent

        <div id="wrapper">

            @include('partials.admin.sidebar')

            <div id="content-wrapper">
            
            {{-- Main Content Area --}}
            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    @yield('breadcrumbs')
                </ol>

                @include('partials.global.messages')

                @yield('content')

            </div>
            <!-- /.container-fluid -->

            @include('partials.admin.footer')

            </div>
            <!-- /.content-wrapper -->

        </div> <!-- /#wrapper -->
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Scripts -->
        <script src="{{ asset('js/admin.js') }}" defer></script>

    </body>

</html>
