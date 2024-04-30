<!-- Begin Header Top Area -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        <!-- Begin Setting Area -->
                        <li>
                            @if(auth('admin')->check())
                            <div class="mx-4"><a class="text-light" href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                            @endif
                            <div class="ht-setting-trigger"><span>Setting</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">
                                    @if(auth()->check())
                                    <li><a href="login-register.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit">Sign Out</button>
                                        </form>
                                    </li>
                                    @elseif(auth('admin')->check())
                                    <li>{{ auth('admin')->user()->name }}</li>
                                    <li><a href="login-register.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li>
                                        <form action="{{ route('admin.logout') }}" method="post">
                                            @csrf
                                            <button type="submit">Sign Out</button>
                                        </form>
                                    </li>
                                    @else
                                    <li><a href="{{ route( 'login' ) }}">Sign In</a></li>
                                    <li><a href="{{ route( 'register' ) }}">Sign Up</a></li>
                                    
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <!-- Setting Area End Here -->
                        <!-- Begin Language Area -->
                        <li>
                            <span class="language-selector-wrapper">Language :</span>
                            <div class="ht-language-trigger"><span>English</span></div>
                            <div class="language ht-language">
                                <ul class="ht-setting-list">
                                    <li class="active"><a href="#"><img src="{{ asset( 'website/images/menu/flag-icon/1.jpg' ) }}" alt="">English</a></li>
                                    <li><a href="#"><img src="{{ asset( 'website/images/menu/flag-icon/2.jpg' ) }}" alt="">Français</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Language Area End Here -->
                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Top Area End Here -->
