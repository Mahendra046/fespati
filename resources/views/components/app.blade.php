<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/focus') }}/images/FESPATI KETAPANG.png">
    <link href="{{ url('public/focus') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ url('public/focus') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ url('public/focus') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('public/focus') }}/vendor/summernote/summernote.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{ url('public/focus') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- font Awesome --}}
    @stack('style')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <x-Layout.admin.header />

        <x-Layout.admin.sidebar />

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            {{-- Ngambik Content Dari Container Fluid Woii Sah Lupak !! --}}
            <div class="container-fluid">
                <x-Layout.utils.notif />
                {{ $slot }}
                {{-- Ngambik Content Dari container Fluid Woii Sah Lupak !! --}}
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <x-Layout.admin.footer />

        <!--**********************************
        Support ticket button start
        ***********************************-->

        <!--**********************************
        Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('public/focus') }}/vendor/global/global.min.js"></script>
    <script src="{{ url('public/focus') }}/js/quixnav-init.js"></script>
    <script src="{{ url('public/focus') }}/js/custom.min.js"></script>

    <script src="{{ url('public/focus') }}/vendor/chartist/js/chartist.min.js"></script>

    <script src="{{ url('public/focus') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ url('public/focus') }}/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="{{ url('public/focus') }}/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

    <!-- Datatable -->
    <script src="{{ url('public/focus') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/focus') }}/js/plugins-init/datatables.init.js"></script>
    <!-- Summernote -->
    <script src="{{ url('public/focus') }}/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="{{ url('public/focus') }}/js/plugins-init/summernote-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('script')

</body>

</html>
