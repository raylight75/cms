<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    @if  (Auth::check() && Auth::user()->is('admin'))
                        <div class="title">Menu Backend</div>
                    @else(Auth::check() && Auth::user()->is('user'))
                        <div class="title">User Menu</div>
                    @endif
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                @if  (Auth::check() && Auth::user()->is('admin'))
                    <li class="menu">
                        <a href="{{ url('backend/admin') }}">
                            <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ url('backend/articles') }}">
                            <span class="icon fa fa-pencil-square-o"></span><span class="title">Custom Table</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ url('backend/users') }}">
                            <span class="icon fa fa-user"></span><span class="title">Manage Users</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ url('backend/orders') }}">
                            <span class="icon fa fa-shopping-cart"></span><span class="title">Orders</span>
                        </a>
                    </li>
                    <li class=" {{ Request::is('backend/products') ? 'active' : '' }} panel panel-default dropdown">
                        <a data-toggle="collapse" href="#dropdown-table">
                            <span class="icon fa fa-table"></span><span class="title">Manage Catalog</span>
                        </a>
                        <!-- Dropdown-->
                        <div id="dropdown-table" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ url('backend/products') }}">
                                            <span class="icon fa fa-pencil-square-o"></span>Edit Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Dropdown-->
                    </li>
                @else (Auth::check() && Auth::user()->is('user'))
                    <li class="menu">
                        <a href="{{ url('backend/user') }}">
                            <span class="icon fa fa-tachometer"></span><span class="title">User Dashboard</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ url('backend/profile') }}">
                            <span class="icon fa fa-eye"></span><span class="title">User Profile</span>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ url('backend/user-orders') }}">
                            <span class="icon fa fa-money"></span><span class="title">My Orders</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
<script>
    $(function () {
        var url = window.location.href;
        console.log(url)
        $('a[href="' + url + '"]').parent('ul .menu').addClass('active');
        //$('a[href="'+url+'"]').addClass('active');
    });
</script>
