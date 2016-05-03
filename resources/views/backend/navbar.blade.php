<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-expand-toggle">
                <i class="fa fa-bars icon"></i>
            </button>
            <ol class="breadcrumb navbar-breadcrumb">
                @if  (Auth::check() && Auth::user()->is('admin'))
                    <li>Admin Panel</li>
                @else(Auth::check() && Auth::user()->is('user'))
                    <li>User Panel</li>
                @endif
                <li class="active">{{Auth::user()->email}}</li>
            </ol>
            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                <i class="fa fa-th icon"></i>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                <i class="fa fa-times icon"></i>
            </button>
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li>
                        <div class="profile-info">
                            <h4 class="username">{{Auth::user()->name}}</h4>

                            <p>{{Auth::user()->email}}</p>

                            <div class="btn-group margin-bottom-2x" role="group">
                                <button type="button" class="btn btn-default"><i class="fa fa-user"></i>
                                    <a href="{{ url('panel/profile') }}"><?= _('Profile')?></a>
                                </button>
                                <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i>
                                    <a href="{{ url('auth/logout') }}"><?= _('Logout')?></a>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>