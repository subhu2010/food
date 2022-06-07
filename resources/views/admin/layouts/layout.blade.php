@include("admin.includes.header")

<div id="app">
    
    @include("admin.includes.side-bar")

    <div id="main" class='layout-navbar'>

        @include("admin.includes.top-bar")

    	@yield("content")

        <footer>
		    <div class="footer clearfix mb-0 text-muted">
		        <div class="float-md-start text-center">
		            <p><?php echo date('Y'); ?> &copy; Food On Ways</p>
		        </div>
		        <div class="float-md-end text-center">
		            <p>
		                Crafted with 
		                <span class="text-danger">
		                    <i class="bi bi-heart-fill icon-mid"></i>
		                </span> 
		                by 
		                <a href="https://softbenz.com/" target="_blank">
		                    <img src="{{ asset('admin-assets/images/logo/soft.png') }}" class="img-fluid" alt="" style="height:50px;">
		                </a>
		            </p>
		        </div>
		    </div>
		</footer>

    </div>
    
</div>

@include("admin.includes.footer")