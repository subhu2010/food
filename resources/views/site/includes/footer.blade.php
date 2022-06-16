<a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-about-dtl">
					<div class="footer-title">
						<h4>about us</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="{{url('about-us')}}">Our history</a>
						</li>
						<li>
							<a href="javascript:void(0)">Join Us</a>
						</li>
						<li>
							<a href="javascript:void(0)">Our Team</a>
						</li>
						<li>
							<a href="javascript:void(0)">Our Strength</a>
						</li>
						<li>
							<a href="{{url('blog-list')}}">Blog</a>
						</li>
						<li>
							<a href="javascript:void(0)">Corporate Order</a>
						</li>
						<li>
							<a href="javascript:void(0)">Bulk/Party Order</a>
						</li>
						<li>
							<a href="javascript:void(0)">Diet Plan</a>
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
							<a href="javascript:void(0)">Refund Policy</a>
						</li>
						<li>
							<a href="javascript:void(0)">Cancelation Policy</a>
						</li>
						<li>
							<a href="javascript:void(0)">Payments & Security</a>
						</li>
						<li>
							<a href="{{url('terms-policy')}}">Privacy Policy</a>
						</li>
						<li>
							<a href="{{url('terms-policy')}}">Terms & Conditions</a>
						</li>
						<li>
							<a href="javascript:void(0)">Offers</a>
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
							<a href="{{url('help-support')}}">Help Support</a>
						</li>
						<li>
							<a href="javascript:void(0)">Customer Service</a>
						</li>
						<li>
							<a href="javascript:void(0)">Customer Reviews</a>
						</li>
						<li>
							<a href="javascript:void(0)">My Wishlist</a>
						</li>
						<li>
							<a href="{{url('contact-us')}}">Contact Us</a>
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
							<a href="{{url('faq')}}">frequently asked question's</a>
						</li>
						<li>
							<a href="javascript:;">donations</a>
						</li>
						<li>
							<a href="javascript:;">feedbacks</a>
						</li>
						<li>
							<a href="{{url('terms-policy')}}">terms & policy</a>
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
							<a class="nav-link menu-link" href="javascript:;">© 2021 - 2022</a>
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