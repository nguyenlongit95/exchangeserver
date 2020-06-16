<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Adminstator</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="admin/DashBoard"><img src="{{ asset('admin/asset/css/font-awesome/fonts/chart-bar.svg') }}" style="width: 16px;"> Dashboard </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>System elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/exchange"><i class="fa fa-money"></i>Exchanges Money</a></li>
                    <li><a href="admin/exchange-bank"><i class="fa fa-bank"></i>Exchange Money of Bank</a></li>
                    <li><a href="admin/gold"><img src="{{ asset('admin/asset/css/font-awesome/fonts/coins.svg') }}" style="width: 16px;"> Gold Exchanges</a></li>
                    <li><a href="admin/interest"><i class="fa fa-map"></i>Interest Of Bank</a></li>
                    <li><a href="admin/virual-money"><i class="fa fa-bitcoin"></i>Virtual Money</a></li>
                    <li><a href="admin/oil-petro"><img src="{{ asset('admin/asset/css/font-awesome/fonts/gas-pump-solid.svg') }}" width="16px" alt=""> Oil Petro</a></li>
                    {{-- <li><a href="admin/bank"><i class="fa fa-university"></i>Bank Info</a></li> --}}
                </ul>
            </li>

            <li><a href="admin/seo"><i class="fa fa-book"></i> <span>SEO</span></a></li>
            <li><a href="admin/google-adsense"><i class="fa fa-google"></i> <span>Google AdSense</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
