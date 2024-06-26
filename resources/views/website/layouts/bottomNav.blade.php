<!-- Begin Header Bottom Area -->
<div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>

                            <li><a href="/">Home</a></li>

                            @foreach($mainCats as $mainCat)
                                @if($mainCat->status == 1)

                                <li class="dropdown-holder"><a href="{{ route( 'main.category.products', $mainCat->id ) }}">{{$mainCat->title}}</a>
                                    <ul class="hb-dropdown">
                                        @foreach($mainCat->SubCategory as $subCat)
                                            @if($subCat->status == 1)
                                                <li><a href="{{ route( 'sub_category.products', $subCat->id ) }}">{{$subCat->title}}</a></li>
                                            @endif    
                                        @endforeach
                                    </ul>
                                </li>

                                @endif
                            @endforeach

                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->
