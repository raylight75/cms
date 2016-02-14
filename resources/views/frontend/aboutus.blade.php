@extends('frontend.main')
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
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 padbot60 about_us_description"
				data-appear-top-offset='-100' data-animated='fadeInLeft'>
				<p>We empower WordPress developers with design-driven themes and a
					classy experience their clients will just love</p>
				<span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa
					viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh
					synth blue bottle tofu tonx iphone. Blue bottle 90вЂІs vice trust
					fund gastropub gentrify retro marfa viral.</span> <span>Sollicitudin,
					lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
					sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a
					sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
					tincidunt auctor a ornare odio.</span>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 padbot30"
				data-appear-top-offset='-100' data-animated='fadeInRight'>
				<img class="about_img1"
					src="{{ url('images') }}/about_img1.jpg" alt="" />
			</div>
		</div>
		<!-- //ROW -->

		<!-- ROW -->
		<div class="row services_wrapper padbot40"
			data-appear-top-offset='-100' data-animated='fadeInUp'>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<div class="service_item">
					<div class="clearfix">
						<i class="fa fa-tablet"></i>
						<p>Responsive Theme</p>
					</div>
					<span>Thundercats squid single-origin coffee YOLO selfies disrupt,
						master cleanse semiotics letterpress typewriter.</span>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<div class="service_item">
					<div class="clearfix">
						<i class="fa fa-comments-o"></i>
						<p>Free Support</p>
					</div>
					<span>Thundercats squid single-origin coffee YOLO selfies disrupt,
						master cleanse semiotics letterpress typewriter.</span>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<div class="service_item">
					<div class="clearfix">
						<i class="fa fa-eye"></i>
						<p>Retina Ready</p>
					</div>
					<span>Thundercats squid single-origin coffee YOLO selfies disrupt,
						master cleanse semiotics letterpress typewriter.</span>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<div class="service_item">
					<div class="clearfix">
						<i class="fa fa-cogs"></i>
						<p>Easy Customize</p>
					</div>
					<span>Thundercats squid single-origin coffee YOLO selfies disrupt,
						master cleanse semiotics letterpress typewriter.</span>
				</div>
			</div>
		</div>
		<!-- //ROW -->


		<!-- ROW -->
		<div class="row team_wrapper padbot60" data-appear-top-offset='-100'
			data-animated='fadeInUp'>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 padbot30">
				<div class="team_item center">
					<img class="team_foto"
						src="{{ url('images') }}/team/1.jpg" alt="" />
					<p>Anna balashova</p>
					<span>Senior Manager</span>
					<div class="team_social">
						<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-twitter"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-linkedin"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 padbot30">
				<div class="team_item center">
					<img class="team_foto"
						src="{{ url('images') }}/team/2.jpg" alt="" />
					<p>John James</p>
					<span>Manager</span>
					<div class="team_social">
						<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-twitter"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-linkedin"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 padbot30">
				<div class="team_item center">
					<img class="team_foto"
						src="{{ url('images') }}/team/3.jpg" alt="" />
					<p>Kristi hogvard</p>
					<span>Manager</span>
					<div class="team_social">
						<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-twitter"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-linkedin"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 padbot30">
				<div class="team_item center">
					<img class="team_foto"
						src="{{ url('images') }}/team/4.jpg" alt="" />
					<p>Nick Kovach</p>
					<span>Marketing</span>
					<div class="team_social">
						<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-twitter"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-linkedin"></i></a> <a
							href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //ABOUT US INFO -->
@endsection