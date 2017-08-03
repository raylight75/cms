<li class=" {{$slot}} panel panel-default dropdown">
    <a data-toggle="collapse" href="#dropdown-table">
        <span class="{{$m_icon}}"></span><span class="title">{{$m_name}}</span>
    </a>
    <!-- Dropdown-->
    <div id="dropdown-table" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="{{$link}}">
                        <span class="{{$s_icon}}"></span>{{$s_name}}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Dropdown-->
</li>