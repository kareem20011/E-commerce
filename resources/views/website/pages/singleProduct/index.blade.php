@extends('website.layouts.layout')
@section('website.content')

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            
            
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        <div class="lg-image">
                            @if($product->hasMedia('images'))
                            <a class="popup-img venobox vbox-item" href="{{$product->getFirstMedia('images')->getUrl()}}" data-gall="myGallery">
                                <img src="{{$product->getFirstMedia('images')->getUrl()}}" alt="product image">
                            </a>
                            @else
                            <h1>No image</h1>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <!--// Product Details Left -->
            </div>
            
            

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2>{{$product->title}}</h2>
                        
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">${{$product->price}}</span>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span>{{$product->description}}.</span>
                            </p>
                        </div>
                        <div class="product-variants">
                            <div class="produt-variants-size">
                                <label>colos</label>
                                <select class="form-select w-lg-25 w-50" multiple name="color_id[]">
                                    <option selected disabled>Color Title</option>
                                    @foreach($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity">
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <button class="add-to-cart" type="submit">Add to cart</button>
                            </form>
                        </div>
                        
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Security policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Delivery policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Return policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- content-wraper end -->

@endsection