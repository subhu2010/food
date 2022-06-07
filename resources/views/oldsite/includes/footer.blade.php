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
							<a href="#">Our history</a>
						</li>
						<li>
							<a href="#">Leadership Team</a>
						</li>
						<li>
							<a href="#">Values in action</a>
						</li>
						<li>
							<a href="#">franchise action</a>
						</li>
						<li>
							<a href="#">news & notification</a>
						</li>
						<li>
							<a href="#">careers</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-account">
					<div class="footer-title">
						<h4>services</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="#">gift card</a>
						</li>
						<li>
							<a href="#">mobile order & pay</a>
						</li>
						<li>
							<a href="">trending now</a>
						</li>
						<li>
							<a href="#">playPlaces & parties</a>
						</li>
						<li>
							<a href="#">family fun hub</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-widget footer-about">
					<div class="footer-title">
						<h4>careers</h4>
					</div>
					<ul class="footer-list">
						<li>
							<a href="">itilian chef</a>
						</li>
						<li>
							<a href="">manager</a>
						</li>
						<li>
							<a href="">delivery boy</a>
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
							<a href="#">frequently asked question's</a>
						</li>
						<li>
							<a href="#">donations</a>
						</li>
						<li>
							<a href="#">feedbacks</a>
						</li>
						<li>
							<a href="privacy.php">terms & policy</a>
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
							<a href='#' class='facebook' target='_blank'>
								<i class="lab la-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href='#' class='twitter' target='_blank'>
								<i class="lab la-twitter"></i>
							</a>
						</li>
						<li>
							<a href='#' class='instagram' target='_blank'>
								<i class="lab la-instagram"></i>
							</a>
						</li>
						<li>
							<a href='#' class='youtube' target='_blank'>
								<i class="lab la-youtube"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<div class="mobile-content text-sm-end">
						<span>
							<a href="#" target="_blank">
								<img src="{{ asset('site-assets/images/google-play.svg') }}" class="img-fluid" alt="food on ways">
							</a>
						</span>
						<span>
							<a href="#" target="_blank">
								<img src="{{ asset('site-assets/images/appstore.svg') }}" class="img-fluid" alt="food on ways">
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
							<a class="nav-link menu-link" href="privacy.php">privacy (Updated)</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="terms.php">terms & condition</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#">accessibility</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#">my personal information</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#">© 2021 - 2022</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#">all rights reserved</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#">cookie setting</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" style="background:var(--secondary-color);" role="alert">
	<b>Do you like cookies?</b> &#x1F36A; We use third-party cookies to enhance your experience on this website. <a href="#" target="_blank" style="color:#fff">Learn more</a>

	<button type="button" class="btn btn-light btn-sm acceptcookies">
		I agree
	</button>
</div>
<!-- END Bootstrap-Cookie-Alert -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="{{ asset('site-assets/xzoom/foundation.min.js') }}"></script>
<script src="{{ asset('site-assets/xzoom/setup.js') }}"></script>

<!-- owl carousel -->
<script src="{{ asset('site-assets/owl/jquery.min.js') }}"></script>
<script src="{{ asset('site-assets/owl/owl.carousel.min.js') }}"></script>

<!-- Global JS -->
<script type="text/javascript" src="{{ asset('site-assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('site-assets/js/rangeslider.js') }}"></script>

	@yield('script')

</body>

<!-- Only for the demo -->
<script>
    for (var i = 1; i <= 150; i++)
        document.querySelector("#fillme").innerHTML += "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
</script>

<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

</html>
