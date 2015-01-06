<div class="wrapper">

    @include('partials.menus.top-nav')

    @include('partials.menus.sidebar-left')

    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container-fluid">

            @include('partials.errors')
            @include('partials.notifications')

            @yield('content')

        </div><!-- /.container-fluid -->
    </div><!-- /.page-content -->

</div><!-- /.wrapper -->