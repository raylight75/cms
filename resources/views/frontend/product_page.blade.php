@include('frontend/header')
<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- TOVAR DETAILS -->
<section class="tovar_details padbot70">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- SIDEBAR TOVAR DETAILS -->
            <div class="col-lg-3 col-md-3 sidebar_tovar_details">
                <?php foreach($single as $row) : ?>
                <h3>
                    <b><?= _('other products')?></b>
                </h3>
                <?php endforeach; ?>
                <ul class="tovar_items_small clearfix">
                    <?php foreach($products as $row) : ?>
                    <li class="clearfix">
                        <img class="tovar_item_small_img"
                                src="{{ url('images/products') }}/<?php echo $row->a_img;?>" alt=""/>
                        <a href="{{ url() }}/<?php echo $row->cat."/".$row->slug."/".$row->product_id;?>"
                                class="tovar_item_small_title"><?php echo $row->name;?></a> <span
                                class="tovar_item_small_price">{!! Helper::currency($row->price) !!}&nbsp{!! Helper::label() !!}</span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- //SIDEBAR TOVAR DETAILS -->

            <!-- TOVAR DETAILS WRAPPER -->
            <div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
                <div class="tovar_details_header clearfix margbot35">
                    <?php foreach($single as $row) : ?>
                    <h3 class="pull-left">
                        <b>
                            <a href="{{ url('catalog') }}/<?php echo $row->cat;?>/<?php echo $row->parent_id;?>
                                    ?categ=<?php echo $row->cat_id;?>"><?php echo $row->cat;?></a></b>
                    </h3>
                    <?php endforeach; ?>
                </div>

                @include('frontend/clearfix')

                        <!-- TOVAR INFORMATION -->
                <div class="tovar_information">
                    <ul class="tabs clearfix">
                        <li class="current"><?= _('Description')?></li>
                        <li><?= _('Information')?></li>
                    </ul>
                    <div class="box visible">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio.
                            Nullam varius, turpis et commodo pharetra, est eros bibendum
                            elit, nec luctus magna felis sollicitudin mauris. Integer in
                            mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate
                            vehicula. Donec lobortis risus a elit. Etiam tempor. Ut
                            ullamcorper, ligula eu tempor congue, eros est euismod turpis, id
                            tincidunt sapien risus a quam. Maecenas fermentum consequat mi.
                            Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien
                            sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam
                            faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien,
                            sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc.
                            Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus
                            quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis
                            quis, molestie eu, feugiat in, orci. In hac habitasse platea
                            dictumst.</p>
                    </div>
                    <div class="box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- //TOVAR INFORMATION -->
            </div>
            <!-- //TOVAR DETAILS WRAPPER -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //TOVAR DETAILS -->


<!-- BANNER SECTION -->
<section class="banner_section">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper">
                <!-- BANNER -->
                <div class="col-lg-9 col-md-9">
                    <a class="banner type4 margbot40" href="javascript:void(0);">
                        <img src="{{ url('images/tovar') }}/banner4.jpg" alt=""/></a>
                </div>
                <!-- //BANNER -->

                <!-- BANNER -->
                <div class="col-lg-3 col-md-3"><a class="banner nobord margbot40" href="javascript:void(0);">
                        <img src="{{ url('images/tovar') }}/banner5.jpg" alt=""/></a>
                </div>
                <!-- //BANNER -->
            </div>
            <!-- //BANNER WRAPPER -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //BANNER SECTION -->


<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">

    <!-- CONTAINER -->
    <div class="container">
        <h2><?= _('new arrivals')?></h2>

        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">

            <div class="jcarousel">
                <ul>
                    <?php foreach($latest as $row) : ?>
                    <li>
                        <!-- TOVAR -->
                        <div class="tovar_item_new">
                            <div class="tovar_img">
                                <img src="{{ url('images/products') }}/<?php echo $row->a_img;?>" alt=""/>
                                <a class="open-project tovar_view"
                                   href="{{ url() }}/<?php echo $row->cat . "/" . $row->slug . "/" . $row->product_id;?>"><?= _('quick view')?></a>

                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title"
                                   href="{{ url() }}/<?php echo $row->cat . "/" . $row->slug . "/" . $row->product_id;?>">
                                    <?php echo $row->name;?></a>
                                <span class="tovar_price">{!! Helper::currency($row->price) !!}&nbsp{!! Helper::label() !!}</span>
                            </div>
                        </div>
                        <!-- //TOVAR -->
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- //JCAROUSEL -->
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //NEW ARRIVALS -->
@include('frontend/footer')