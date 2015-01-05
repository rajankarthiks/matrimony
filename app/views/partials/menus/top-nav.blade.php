<!-- BEGIN TOP NAV -->
<div class="top-navbar dark-color">

    <div class="top-navbar-inner">

        <!-- Begin Logo brand -->
        <div class="logo-brand">
            <a href="/"><img src="assets/img/sentir-logo-primary.png" alt="Sentir logo"></a>
        </div><!-- /.logo-brand -->
        <!-- End Logo brand -->

        <div class="top-nav-content no-right-sidebar">

            <!-- Begin button sidebar left toggle -->
            <div class="btn-collapse-sidebar-left">
                <i class="fa fa-bars"></i>
            </div><!-- /.btn-collapse-sidebar-left -->
            <!-- End button sidebar left toggle -->

            <!-- Begin button nav toggle -->
            <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                <i class="fa fa-plus icon-plus"></i>
            </div><!-- /.btn-collapse-sidebar-right -->
            <!-- End button nav toggle -->

            <!-- Begin user session nav -->
            <ul class="nav-user navbar-right full">
                @include('partials.menus.user-info')
            </ul>
            <!-- End user session nav -->

            <!-- Begin Collapse menu nav -->
            <div class="collapse navbar-collapse" id="main-fixed-nav">

                @include('partials.menus.top-navbar-search')

                <ul class="nav navbar-nav navbar-left">

                    @include('partials.notifications.notifications')
                    @include('partials.notifications.messages')
                    @include('partials.notifications.interests')

                </ul>

            </div>
            <!-- End Collapse menu nav -->

        </div><!-- /.top-nav-content -->

    </div><!-- /.top-navbar-inner -->

</div><!-- /.top-navbar -->

<!-- END TOP NAV -->
