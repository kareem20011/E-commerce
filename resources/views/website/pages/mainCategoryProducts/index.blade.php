@extends('website.layouts.layout')
@section('website.content')



<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <h1 class="text-center">{{$mainCategory->title}}</h1>
        <div class="row">
            <div class="col-lg-12">

                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                    </div>
                </div>
                <!-- shop-top-bar end -->

                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">

                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">




                                @foreach($subCategories as $subCategory)
                                    @if(! $subCategory->products->isEmpty() && $subCategory->status == 1)
                                        @foreach($subCategory->products as $product)
                                        @if($product->status == 1)



                                            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="{{ route('website.product.show', $product->id) }}">
                                                        <img src="{{ $product->getFirstMediaUrl('images') }}" alt="Li's Product Image">
                                                    </a>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a href="{{route('sub_category.products', $subCategory->id)}}">{{ $subCategory->title }}</a>
                                                                <p href="#">{{ $product->description }}</p>
                                                            </h5>
                                                        </div>
                                                        <h4><a class="product_name" href="{{ route('website.product.show', $product->id) }}">{{ $product->title }}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">${{ $product->price }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="shopping-cart.html">Add to cart</a></li>
                                                            <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>


                                        @endif
                                        @endforeach
                                    @endif
                                @endforeach




                                    



                                </div>
                            </div>
                        </div>





                        <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    

                                @foreach($subCategories as $subCategory)
                                    @if(! $subCategory->products->isEmpty())
                                    @foreach($subCategory->products as $product)
                                        @if($product->status == 1)

                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-5 ">
                                                    <div class="product-image">
                                                        <a href="{{ route('website.product.show', $product->id) }}">
                                                            <img src="{{ $product->getFirstMediaUrl('images') }}" alt="Li's Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-7">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="{{route('sub_category.products', $subCategory->id)}}">{{ $subCategory->title }}</a>
                                                                </h5>
                                                            </div>
                                                            <h4><a class="product_name" href="{{ route('website.product.show', $product->id) }}">{{ $product->title }}</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">${{ $product->price }}</span>
                                                            </div>
                                                            <p>{{ $product->description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="shop-add-action mb-xs-30">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart"><a href="#">Add to cart</a></li>
                                                            <li class="wishlist"><a href="#"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach


                                </div>
                            </div>
                        </div>







                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->

@endsection