@extends('website.layouts.layout')
@section('website.content')


        <!-- Begin Slider With Banner Area -->
        <div class="slider-with-banner">
            <div class="container">
                <div class="row">
                    <!-- Begin Slider Area -->
                    <div class="col-lg-8 col-12 m-auto">
                        <h1 class="text-center">Categories</h1>
                        <div class="slider-area pt-sm-30 pt-xs-30">
                            <div class="slider-active owl-carousel">
                                @foreach($mainCats as $mainCat)
                                @if($mainCat->status == 1)
                                <!-- Begin Single Slide Area -->
                                <!-- min-height: 475px; -->
                                <div class="single-slide align-center-left animation-style-01 bg">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content w-100 p-0 d-lg-flex d-md-flex d-sm-flex d-block justify-content-around align-items-center">
                                        <div class="my-5 p-0">
                                            <h2 class="my-3">{{ $mainCat->title }}</h2>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="{{ route( 'main.category.products', $mainCat->id ) }}">Shopping Now</a>
                                            </div>
                                        </div>
                                        <div class="category-parent-image">
                                            <img class="category-image" src="{{ $mainCat->getFirstMediaUrl('images') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                    
                </div>
            </div>
        </div>
        <!-- Slider With Banner Area End Here -->



        <!-- Begin Static Top Area -->
        <div class="static-top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="static-top-content mt-sm-30">
                            Shop, Share, and Connect -
                            <span>More Than Sales: It’s About You.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Top Area End Here -->




        <!-- new-product-area start -->
        <div class="product-area pt-55 pb-25 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="li-product-tab">
                            <ul class="nav li-product-menu">
                                <li><a class="active" data-toggle="tab" href="#li-new-product"><span>New Arrival</span></a></li>
                            </ul>
                        </div>
                        <!-- Begin Li's Tab Menu Content Area -->
                    </div>
                </div>

                <div class="tab-content">
                    <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="product-active owl-carousel">

                            @foreach($latestProducts as $latestProduct)
                            @if($latestProduct->status == 1)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{route('website.product.show', $latestProduct->id)}}">
                                            @if(count($latestProduct->getMedia('images')) > 0)
                                                <img src="{{ $latestProduct->getFirstMedia('images')->getUrl() }}" alt="Li's Product Image">
                                            @else
                                                <p class="w-100 h-100">No image</p>    
                                            @endif
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="{{ route('sub_category.products', $latestProduct->subCategory->id) }}">{{ $latestProduct->subCategory->title }}</a>
                                                    </h5>
                                                </div>
                                                <h4><a class="product_name" href="{{route('website.product.show', $latestProduct->id)}}">{{ $latestProduct->title }}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$ {{ $latestProduct->price }}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            @endif
                            @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- new-product-area end -->



        <!-- Begin Li's Static Banner Area -->
        <div class="static-top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="static-top-content mt-sm-30">
                            Shop smarter -
                            <span>not hardert.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Li's Static Banner Area End Here -->


        
        
        @foreach($subCats as $subCat)
        @if($subCat->status == 1)
            <section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>{{$subCat->title}}</span>
                                </h2>
                            </div>


                            
                            
                            
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    
                                    
                                    
                                    @foreach($subCat->products as $product)
                                    @if($product->status == 1)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('website.product.show', $product->id)}}">
                                                @if(count($product->getMedia('images')) > 0)
                                                    <img src="{{ $product->getFirstMedia('images')->getUrl() }}" alt="Product Image">
                                                @else
                                                    <p class="w-100 h-100">No image</p>    
                                                @endif
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="{{ route('sub_category.products', $subCat->id) }}">{{$subCat->title}}</a>
                                                        </h5>
                                                        
                                                    </div>
                                                    <h4><a class="product_name" href="{{route('website.product.show', $product->id)}}">{{$product->title}}</a></h4>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="price-box">
                                                            <span class="new-price">${{$product->price}}</span>
                                                        </div>
                                                        @if($product->quantity < 1)
                                                        <div class="out-of-stock text-danger">
                                                            <span>Out of stock</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="{{route('website.product.show', $product->id)}}"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endif
                                    @endforeach
                                
                                
                                
                                </div>
                            </div>





                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            
        @endif
        @endforeach
        
        







@endsection
