@if(isset($products))
<div class="owl-carousel owl-theme other-food-carousel">

    @foreach($products as $pro)
    <div class="item">
        <div class="other-food-card">
            <div class="food-img">
                <a href="{{ route('site.productDetail', $pro->slug) }}">
                    <img src="{{ asset('uploads/products/'.$pro->thumb) }}" 
                        class="img-fluid" alt="{{ $pro->name }}">
                </a>
            </div>
            <div class="food-card-content">
                <h4 title="Chicken Kabab">
                    <a href="{{ route('site.productDetail', $pro->slug) }}">{{ $pro->name }}</a>
                </h4>
                <p><?php echo mb_substr(strip_tags($pro->description), 0, 90, 'utf-8') ?></p>
                <span class="price">Rs. {{ number_format($pro->price) }}</span>
            </div>
            <div class="food-plus">
                <a href="javascript:;">
                    <i class="las la-plus"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endif