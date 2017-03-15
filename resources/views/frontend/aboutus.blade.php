@extends('frontend.master')
@section('content')
    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->


    <!-- PAGE HEADER -->
    <section class="page_header">

        <!-- CONTAINER -->
        <div class="container">
            <h3 class="pull-left">
                <b>About us</b>
            </h3>

            <div class="pull-right">
                <a href="women.html">Back to shop<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //PAGE HEADER -->


    <!-- ABOUT US INFO -->
    <section class="about_us_info">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
        @include('partials/aboutinfo')
        <!-- //ROW -->

            <!-- ROW -->
            <div class="row services_wrapper padbot40"
                 data-appear-top-offset='-100' data-animated='fadeInUp'>
                @component('partials/about')Responsive Theme @endcomponent
                @component('partials/about')Free Support @endcomponent
                @component('partials/about')Retina Ready @endcomponent
                @component('partials/about')Easy Customize @endcomponent
            </div>
            <!-- //ROW -->


            <!-- ROW -->
            <div class="row team_wrapper padbot60" data-appear-top-offset='-100'
                 data-animated='fadeInUp'>

                @component('partials/team')
                @slot('image')team/1.jpg @endslot
                @slot('name')Anna balashova @endslot
                @slot('position')Senior Manager @endslot
                @endcomponent

                @component('partials/team')
                @slot('image')team/2.jpg @endslot
                @slot('name')John James @endslot
                @slot('position')Manager @endslot
                @endcomponent

                @component('partials/team')
                @slot('image')team/3.jpg @endslot
                @slot('name')Kristi hogvard @endslot
                @slot('position')Manager @endslot
                @endcomponent

                @component('partials/team')
                @slot('image')team/4.jpg @endslot
                @slot('name')Nick Kovach @endslot
                @slot('position')Marketing @endslot
                @endcomponent

            </div>
            <!-- //ROW -->
        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //ABOUT US INFO -->
@endsection