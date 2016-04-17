@extends('backend.master')
@section('content')
<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title">
                            <span class="title ">@yield('title', 'Edit Products')</span>
                            <!--<div class="description">Description</div>-->
                        </div>
                    </div>
                    @yield('body')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Main Content -->
@endsection