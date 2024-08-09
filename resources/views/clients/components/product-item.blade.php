<div class="product-item">
    <figure class="product-thumb">
        <a href="{{ route('product.detail', $item->id) }}">
            <img class="pri-img" src="{{ Storage::url($item->img_thumnail) }}"
                alt="product">
            <img class="sec-img" src="{{ Storage::url($item->img_thumnail) }}"
                alt="product">
        </a>
        <div class="product-badge">
            @if ($item->is_new == 1)
                <div class="product-label new">
                    <span>new</span>
                </div>
            @endif
        </div>
        <div class="button-group">
            <a href="wishlist.html" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Add to wishlist"><i
                    class="pe-7s-like"></i></a>
            <a href="compare.html" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Add to Compare"><i
                    class="pe-7s-refresh-2"></i></a>
            <a href="#" data-bs-toggle="modal"
                data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Quick View"><i
                        class="pe-7s-search"></i></span></a>
        </div>
        <div class="cart-hover">
            <button class="btn btn-cart">add to cart</button>
        </div>
    </figure>
    <div class="product-caption text-center">
        <div class="product-identity">
            <p class="manufacturer-name"><a href="product-details.html">{{$item->category->name}}</a>
            </p>
        </div>
        <h6 class="product-name">
            <a href="{{ route('product.detail', $item->id) }}">{{$item->name}}</a>
        </h6>
        <div class="price-box">
            @if ($item->price_sale != null)
                <span class="price-regular"> {{ number_format($item->price_sale, 0, '', '.') }} đ</span>
                <span class="price-old"><del>{{ number_format($item->price_regular, 0, '', '.') }} đ</del></span>
            @else
                <span class="price-regular"> {{ number_format($item->price_regular, 0, '', '.') }} đ</span>
            @endif
        </div>
    </div>
</div>