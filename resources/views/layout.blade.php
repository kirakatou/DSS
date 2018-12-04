<!DOCTYPE html>
<html lang="en">

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Selection DSS - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ route('home') }}" class="brand-logo">
                        DSS Project
                    </a>
                </li>
                <li {{Request::is('/') ? ' class=active' :  ''}}>
                    <a href="{{ route('home') }}">List Calon Mahasiswa</a>
                </li>
                <li {{Request::is('direct-normalisation' . '*') ? ' class=active' :  ''}}>
                    <a href="{{ route('home.direct') }}">Perankingan Direct</a>
                </li>
                <li {{Request::is('usm-normalisation' . '*') ? ' class=active' :  ''}}>
                    <a href="{{ route('home.usm') }}">Perankingan USM</a>
                </li>
                <li {{Request::is('student' . '*') ? ' class=active' :  ''}}>
                    <a href="{{ route('student.index')}}">Input Calon Mahasiswa</a>
                </li>
                <li {{Request::is('cut-off-mark' . '*') ? ' class=active' :  ''}}>
                    <a href="{{ route('cut-off-mark.index') }}">Input Cut Off Mark</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "info":true,
                "paging":true,
                "searching":true
            });
            $('#example2').DataTable({
                "info":true,
                "paging":true,
                "searching":true
            });
        } );
    </script>
    @yield('script')

</body>

</html>
