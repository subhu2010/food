<div id="bottom-menu" class="d-none d-lg-block">
    <div class="container">
        <ul class="bottom-menu-nav">

            @foreach($data['menus'] as $men)
            <li>
                <a href="javascript:;" class="has-mega" title="{{ $men->name }}">
                    <img src="{{ asset('uploads/categories/'.$men->icon) }}">
                    <span>{{ $men->name }}</span>
                </a>
            </li>
            @endforeach

            <!-- <div class="row mega-menu g-0">
                <div class="col-3">
                    <a href="#">
                        <div class="menu-item">
                            <img class="img-fluid" src="{{ asset('site-assets/images/8.jpg') }}"></img>
                            <span>Legendary Deep Dish</span>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="menu-item">
                            <img class="img-fluid" src="{{ asset('site-assets/images/5.jpg') }}"></img>
                            <span>Legendary Deep Dish</span>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="menu-item">
                            <img class="img-fluid" src="{{ asset('site-assets/images/6.jpg') }}"></img>
                            <span>Legendary Deep Dish</span>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="menu-item pe-4">
                            <img class="img-fluid" src="{{ asset('site-assets/images/2.jpg') }}"></img>
                            <span>Legendary Deep Dish</span>
                        </div>
                    </a>
                </div>
            </div> -->

        </ul>
    </div>
</div>