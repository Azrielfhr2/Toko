<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('style/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('manager')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li>
                    <a href="{{url('manager/admin')}}" > <i class="menu-icon fa fa-tasks"></i>User Admin</a>
                </li>
                
                <li><a href="{{url('manager/kasir')}}"> <i class="menu-icon fa fa-tasks"></i>User Kasir</a></li>
                
                <li><a href="{{url('laporan')}}"> <i class="menu-icon ti-email"></i>Laporan Transaksi</a></li>

                <li><a href="{{url('laporan_barang')}}"> <i class="menu-icon ti-email"></i>Laporan Barang</a></li>
             
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->