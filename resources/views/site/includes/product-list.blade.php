@if(isset($products))
<div class="category-section pa-tb">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title">
                    <h3>{{ $title }}</h3>
                </div>
            </div>
            <!-- <div class="col-6">
                <div class="default-btn text-end">
                    <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                </div>
            </div> -->
        </div>
        <div class="owl-carousel owl-theme favourites-carousel">

            @foreach($products as $pro)
            <div class="item">
                <div class="menu-card-two">
                    <a href="{{ route('site.productDetail', $pro->slug) }}">
                        <div class="menu-card-img">
                            <img src="{{ asset('uploads/products/'.$pro->thumb) }}" 
                                class="img-fluid" alt="{{ $pro->name }}">
                        </div>
                        <div class="menu-card-content">
                            <div class="menu-card-label @if($pro->veg == 'Yes') veg-label @else nonveg-label @endif" >
                                <span></span>
                            </div>
                            <h5 class="menu-card-title fw-700" 
                                title="{{ $pro->name }}">
                                {{ $pro->name }}
                            </h5>
                            <p class="menu-card-text">
                                <?php echo mb_substr(strip_tags($pro->description), 0, 75, 'utf-8'); ?>
                            </p>
                            <div class="menu-card-meta flex-center">
                                <span class="price">Rs. {{ number_format($pro->price) }}</span>
                                <a href="javascript:;" class="selling-card-cart btn" 
                                    data-bs-toggle="modal" data-bs-target="#addon">add +
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif