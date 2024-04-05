@extends('website.layouts.layout')
@section('website.content')


        <!-- Begin Slider With Banner Area -->
        <div class="slider-with-banner">
            <div class="container">
                <div class="row">
                    <!-- Begin Slider Area -->
                    <div class="col-lg-8 col-md-8">
                        <div class="slider-area pt-sm-30 pt-xs-30">
                            <div class="slider-active owl-carousel">
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-01 bg-1">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                        <h2>Chamcham Galaxy S9 | S9+</h2>
                                        <h3>Starting at <span>$1209.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-02 bg-2">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                        <h2>Work Desk Surface Studio 2018</h2>
                                        <h3>Starting at <span>$824.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-01 bg-3">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                        <h2>Phantom 4 Pro+ Obsidian</h2>
                                        <h3>Starting at <span>$1849.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                    <!-- Begin Li Banner Area -->
                    <div class="col-lg-4 col-md-4 text-center pt-sm-30 pt-xs-30">
                        <div class="li-banner">
                            <a href="#">
                                <img src=" {{ asset( 'website/images/banner/1_1.jpg' ) }}" alt="">
                            </a>
                        </div>
                        <div class="li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5">
                            <a href="#">
                                <img src=" {{ asset( 'website/images/banner/1_2.jpg' ) }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Li Banner Area End Here -->
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
                                                        <a href="product-details.html">{{ $latestProduct->subCategory->title }}</a>
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

                            @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- new-product-area end -->



        <!-- Begin Li's Static Banner Area -->
        <div class="li-static-banner li-static-banner-4 text-center pt-20">
            <div class="container">
                <div class="row">
                    <!-- Begin Single Banner Area -->
                    <div class="col-lg-6">
                        <div class="single-banner pb-sm-30 pb-xs-30">
                            <a href="#">
                                <img src=" {{ asset( 'website/images/banner/2_3.jpg' ) }}" alt="Li's Static Banner">
                            </a>
                        </div>
                    </div>
                    <!-- Single Banner Area End Here -->
                    <!-- Begin Single Banner Area -->
                    <div class="col-lg-6">
                        <div class="single-banner">
                            <a href="#">
                                <img src=" {{ asset( 'website/images/banner/2_4.jpg' ) }}" alt="Li's Static Banner">
                            </a>
                        </div>
                    </div>
                    <!-- Single Banner Area End Here -->
                </div>
            </div>
        </div>
        <!-- Li's Static Banner Area End Here -->


        
        
        @foreach($subCats as $subCat)
        
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
                                                            <a href="product-details.html">{{$subCat->title}}</a>
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
                                    @endforeach
                                
                                
                                
                                </div>
                            </div>





                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            
        @endforeach
        
        







@endsection
