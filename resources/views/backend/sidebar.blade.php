<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    @admin
                        <div class="title">Menu Backend</div>
                    @endadmin
                    @user
                        <div class="title">User Menu</div>
                    @enduser
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                @include('backend.menu')
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
