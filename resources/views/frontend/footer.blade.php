<!-- FOOTER -->
<footer>

	<!-- CONTAINER -->
	<div class="container" data-animated='fadeInUp'>

		<!-- ROW -->
		<div class="row">

			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<h4><?= _('Contacts')?></h4>
				<div class="foot_address">
					<span>Mvc Shop</span>55 Ney York 6515, Grand Tower
				</div>
				<div class="foot_phone">
					<a href="tel:1 800 888 2828">1 800 888 2828</a>
				</div>
				<div class="foot_mail">
					<a href="mailto:info@glamyshop.com">raylight75@gmail.com</a>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
				<h4><?= _('Information')?></h4>
				<ul class="foot_menu">
					<li><a href="about.html"><?= _('About us')?></a></li>
					<li><a href="javascript:void(0);"><?= _('Delivery')?></a></li>
					<li><a href="javascript:void(0);"><?= _('Privacy police')?></a></li>
					<li><a href="blog.html"><?= _('Blog')?></a></li>
					<li><a href="faq.html"><?= _('Faqs')?></a></li>
					<li><a href="contacts.html"><?= _('countact us')?></a></li>
				</ul>
			</div>

			<div class="respond_clear_480"></div>

			<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
				<h4><?= _('About shop')?></h4>
				<p>We ask for your name, telephone number, home address, email
					address and age for competitions, prize draws or newsletter sign
					ups. When a purchase is made on our site, in addition to the above,
					we also ask for delivery address, and payment method details.</p>
				<p>We may obtain information about your usage of our website to help
					us develop and improve it further through online surveys and other
					requests.</p>
			</div>

			<div class="respond_clear_768"></div>

			<div class="col-lg-4 col-md-4 padbot30">
				<h4><?= _('Newsletter')?></h4>
				<form class="newsletter_form clearfix" action="javascript:void(0);"
					method="get">
					<input type="text" name="newsletter"
						value="Enter E-mail & Get 10% off"
						onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';"
						onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
					<input class="btn newsletter_btn" type="submit" value="SIGN UP">
				</form>

				<h4><?= _('we are in social networks')?></h4>
				<div class="social">
					<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a> <a
						href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a
						href="javascript:void(0);"><i class="fa fa-google-plus"></i></a> <a
						href="javascript:void(0);"><i class="fa fa-pinterest-square"></i></a>
					<a href="javascript:void(0);"><i class="fa fa-tumblr"></i></a> <a
						href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<!-- //ROW -->
	</div>
	<!-- //CONTAINER -->

	<!-- COPYRIGHT -->
	<div class="copyright">

		<!-- CONTAINER -->
		<div class="container clearfix">
			<div class="copyright_inf">
				<span>Mvc Shop© 2014</span> | <span>Theme modified by Tihomir
					Blajev</span> | <a class="back_top" href="javascript:void(0);">
					<?= _('Back to Top')?>
					<i class="fa fa-angle-up"></i>
				</a>
			</div>
		</div>
		<!-- //CONTAINER -->
	</div>
	<!-- //COPYRIGHT -->
</footer>
<!-- //FOOTER -->
</div>
<!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content"></div>
	<div class="close_block"></div>
</div>
<!-- TOVAR MODAL CONTENT -->

<!-- SCRIPTS -->
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE]><html class="ie" lang="en"> <![endif]-->

<!--<script>
$(document).ready(function(){
    $("button").on('click', function (e){
        $('#blog_slide').slideToggle();
    });
});
</script>-->
<script type="text/javascript">
$(document).ready(function() {		
	$(".fancybox").fancybox({		
	});	
});
</script>
<script src="{{ asset('/js/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/superfish.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.sticky.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/parallax.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.jcarousel.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/fancySelect.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/animate.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/myscript.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/customjs.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.fancybox.js') }}" type="text/javascript"></script>	
<script>
		if (top != self) top.location.replace(self.location.href);
	</script>

</body>
</html>