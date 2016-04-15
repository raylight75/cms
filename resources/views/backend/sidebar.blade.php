<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    <div class="title">Admin Backend</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('backend') }}">
                        <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                    </a>
                </li>
                <li {{ Request::is('backend/products') ? 'class=active' : '' }} class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-table">
                        <span class="icon fa fa-table"></span><span class="title">Products</span>
                    </a>
                    <!-- Dropdown-->
                    <div id="dropdown-table" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('backend/products') }}">Edit Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Dropdown-->
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
<script>
    $(function() {
        var url = window.location.href;
        console.log(url)
        $('a[href="'+url+'"]').parent('.nav li').addClass('active');
        //$('a[href="'+url+'"]').addClass('active');
    });
</script>
