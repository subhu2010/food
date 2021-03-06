<div id="header-top">
    <div class="container">
        <div class="header-top clearfix">
            <div class="top-left-menu d-none d-xl-block">
                <ul class="top-menu">
                    <li>
                        <a href="{{ route('site.cakeLandingPage') }}">Bresakfast</a>
                    </li>
                    <li>
                        <a href="{{ url('item-list') }}">Launch</a>
                    </li>
                    <li>
                        <a href="{{ route('site.page', 'contact-us') }}">Dinner</a>
                    </li>
                    @if (request()->is('/'))
                        <li>
                            <div class="toogle-btn">
                                <span class="label">dine-in/takeaway</span>
                                <label class="switch">
                                    <input type="checkbox" checked id="btnToggle">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
            {{-- <div class="top-left-menu d-none d-xl-block">
                <ul class="top-menu">
                    <li>
                        <a href="{{ route('site.cakeLandingPage') }}">cakes</a>
                    </li>
                    <li>
                        <a href="{{ url('item-list') }}">foods</a>
                    </li>
                    <li>
                        <a href="{{ url('foodonways-deals') }}">foodonways Deals</a>
                    </li>
                    <li>
                        <a href="{{ url('contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div> --}}
            <div id="logo">
                <a href="{{ route('site.landingPage') }}">
                    @if(isset($data))
                    <img src="{{ asset('uploads/logo/' . $data['setting']->logo) }}" class="img-fluid"></img>
                    @else
                    <img src="{{ asset('uploads/logo/food-in-ways-logo-68oxggbgrr.png') }}" class="img-fluid"></img>
                    @endif
                </a>
            </div>

            <div class="top-right-menu  d-none d-xl-block">
                <ul class="top-menu">
                    <li>
                        <marquee  direction="left" >
                            <span class="text-white">Currently we are delivering within Butwal city.</span>
                        </marquee>
                    </li>
                    <li>
                        <div class="location-input">
                            <i class="las la-map-marker"></i>
                            <input type="text" class="form-control" value="kathmandu, Nepal" disabled readonly
                                data-bs-toggle="modal" data-bs-target="#topLocation">
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
