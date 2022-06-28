<a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-about-dtl">
					<div class="footer-title">
						<h4>About Us</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="{{ route('site.page', 'about-us') }}">Our History</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'join-us') }}">Join Us</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'our-team') }}">Our Team</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'our-strength') }}">Our Strength</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'blogs') }}">Blogs</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'corporate-order') }}">Corporate Order</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'bulk-party') }}">Bulk/Party Order</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'diet-plan') }}">Diet Plan</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-account">
					<div class="footer-title">
						<h4>Useful Links</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="{{ route('site.page', 'refund-policy') }}">Refund Policy</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'cancelation-policy') }}">Cancelation Policy</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'payment-security') }}">Payments & Security</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'privacy-poliicy') }}">Privacy Policy</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'terms-condition') }}">Terms & Conditions</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'offers') }}">Offers</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-about">
					<div class="footer-title">
						<h4>Help & Support</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="{{ route('site.page', 'help-support') }}">Help Support</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'customer-service') }}">Customer Service</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'customer-review') }}">Customer Reviews</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'my-review') }}">My Wishlist</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'contact-us') }}">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-resources">
					<div class="footer-title">
						<h4>contact us</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="{{ route('site.page', 'faq') }}">frequently asked question's</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'donations') }}">donations</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'feedbacks') }}">feedbacks</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'terms-policy') }}">terms & policy</a>
						</li>
						<li>
							<a href="{{ route('site.page', 'foodonways-deals') }}">Food On Ways Deals</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-social">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<ul>
						<li>
							<a href="{{ $data['setting']->facebook }}" class='facebook' target='_blank'>
								<i class="lab la-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="{{ $data['setting']->instagram }}" class='instagram' target='_blank'>
								<i class="lab la-instagram"></i>
							</a>
						</li>
						<li>
							<a href="{{ $data['setting']->tiktok }}" class='twitter' target='_blank'>
								<i class="lab la-twitter"></i>
							</a>
						</li>
						<li>
							<a href="{{ $data['setting']->youtube }}" class='youtube' target='_blank'>
								<i class="lab la-youtube"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<div class="mobile-content text-sm-end">
						<span>
							<a href="javascript:void;" target="_blank">
								<img src="{{ asset('site-assets/images/google-play.svg') }}" 
									class="img-fluid" alt="food on ways">
							</a>
						</span>
						<span>
							<a href="javascript:;" target="_blank">
								<img src="{{ asset('site-assets/images/appstore.svg') }}" 
									class="img-fluid" alt="food on ways">
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="row">
				<div class="col-lg-612">
					<ul class="nav footer-nav">
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">privacy (Updated)</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">terms & condition</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">accessibility</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">my personal information</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">© 2021 - {{ date('Y') }}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">all rights reserved</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="javascript:;">cookie setting</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- START Bootstrap-Cookie-Alert -->
<!-- <div class="alert text-center cookiealert" style="background:var(--secondary-color);" role="alert">
	<b>Do you like cookies?</b> &#x1F36A; We use third-party cookies to enhance your experience on this website. <a href="javascript:void(0)" target="_blank" style="color:#fff">Learn more</a>

	<button type="button" class="btn btn-light btn-sm acceptcookies">
		I agree
	</button>
</div> -->
<!-- END Bootstrap-Cookie-Alert -->

<script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site-assets/xzoom/setup.js') }}"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- owl carousel -->
<script src="{{ asset('site-assets/owl/jquery.min.js') }}"></script>
<script src="{{ asset('site-assets/owl/owl.carousel.min.js') }}"></script>

<!-- Global JS -->
<script type="text/javascript" src="{{ asset('site-assets/js/main.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('site-assets/js/rangeslider.js') }}"></script> -->

@yield('script')

</body>

</html>