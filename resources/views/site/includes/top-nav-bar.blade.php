<div id="header-top">
    <div class="container">
        <div class="header-top clearfix">
            <div class="top-left-menu d-none d-xl-block">
                <ul class="top-menu">
                    <li>
                        <a href="{{url('cake')}}">cakes</a>
                    </li>
                    <li>
                        <a href="{{url('item-list')}}">foods</a>
                    </li>
                    <li>
                        <a href="{{url('foodonways-deals')}}">foodonways Deals</a>
                    </li>
                    <li>
                        <a href="{{url('contact-us')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid"></img>
                </a>
            </div>

            <div class="top-right-menu  d-none d-xl-block">
                <ul class="top-menu">

                    @if(request()->is('/'))
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
                    
                    <li>
                        <div class="location-input">
                            <i class="las la-map-marker"></i>
                            <input type="text" class="form-control" disabled readonly value="kathmandu, Nepal"
                            data-bs-toggle="modal" data-bs-target="#topLocation">
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

