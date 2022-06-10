@include("site.includes.header")

<div id="header" class="main-header-top">

    @include("site.includes.top-nav-bar")

    @include("site.includes.mid-nav-bar")

    @include("site.includes.menu-bar")

</div>

<!-- location Modal -->
<div class="modal fade" id="topLocation" tabindex="-1" aria-labelledby="topLocationLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered locationmodal">
        <div class=" modal-content">
            <form action="">
                <div class="location-detect">
                    <h2>
                        Pinpoint Your Location
                    </h2>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Enter Your Delivery Address">
                    <span>
                        <i class="las la-location-arrow"></i>
                        OR DETECT MY CURRENT LOCATION
                    </span>
                </div>
                <div class="form-group">
                    <button class="btn">start order</button>
                </div>
            </form>
        </div>
    </div>
</div>

@yield("content")

@include("site.includes.footer")