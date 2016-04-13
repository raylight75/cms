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
			<b><?= _('Contacts')?></b>
		</h3>

		<div class="pull-right">
			<a href="women.html"><?= _('Back to shop')?><i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //PAGE HEADER -->


<!-- CONTACTS BLOCK -->
<section class="contacts_block">

	<!-- CONTAINER -->
	<div class="container">

		<!-- ROW -->
		<div class="row padbot30">
			<div class="col-lg-6 col-md-6 padbot30">
				<div id="map">
					<iframe height="490"
						src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York&amp;sll=49.891235,-97.15369&amp;sspn=47.259509,86.923828&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+United+States&amp;ll=40.714867,-74.005537&amp;spn=0.019517,0.018797&amp;z=14&amp;iwloc=near&amp;output=embed"></iframe>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 padbot30">
				<ul class="contact_info_block">
					<li>
						<h3>
							<i class="fa fa-map-marker"></i><b><?= _('Store locations')?></b>
						</h3>
						<p>Glammy Store</p> <span>000, Country, Streer name 55, US</span>
					</li>
					<li>
						<h3>
							<i class="fa fa-phone"></i><b><?= _('Phones')?></b>
						</h3>
						<p class="phone">(+44) 800 456 7890</p>
						<p class="phone">(+55) 800 456 7890</p>
					</li>
					<li>
						<h3>
							<i class="fa fa-envelope"></i><b>E-mail</b>
						</h3>
						<p><?= _('Advertising')?></p> <a href="mailto:adv@glammyshop.com">adv@glammyshop.com</a>

						<p><?= _('Partnership')?></p> <a href="mailto:partner@glammyshop.com">partner@glammyshop.com</a>

						<p><?= _('Returns and Refunds')?></p> <a href="mailto:return@glammyshop.com">return@glammyshop.com</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 padbot30">
				<!-- CONTACT FORM -->
				<div class="contact_form">
					<h3>
						<b><?= _('Contacts form')?></b>
					</h3>
					<p><?= _('Sign in to save and share your Love List.')?></p>
					<div id="note"></div>
					<div id="fields">
						<form id="ajax-contact-form" action="#">
							<label><?= _('Name')?></label> <input type="text" name="name" value=""
								placeholder="Name" /> <label>E-mail</label> <input type="text"
								name="email" value="" placeholder="E-mail" /> <label><?= _('Phone')?></label>
							<input type="text" name="phone" value="" placeholder="Phone" /> <label><?= _('Message')?></label>
							<textarea name="message" placeholder="Message"></textarea>
							<br> <input class="btn active" type="submit" value="Send Message" />
						</form>
					</div>
				</div>
				<!-- //CONTACT FORM -->
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->
</section>
<!-- //CONTACTS BLOCK -->
@endsection