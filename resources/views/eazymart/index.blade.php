@extends('layouts.eazyCommon')
@section('content')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Save</span>
                    </h3>
                    <p>Get flat
                        <span>10%</span> Cashback</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Healthy
                        <span>Saving</span>
                    </h3>
                    <p>Get Upto
                        <span>30%</span> Off</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Deal</span>
                    </h3>
                    <p>Get Best Offer Upto
                        <span>20%</span>
                    </p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Today
                        <span>Discount</span>
                    </h3>
                    <p>Get Now
                        <span>40%</span> Discount</p>
                    <a class="button2" href="product.html">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->

<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Our Top Products
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <!-- product left -->

        <!-- //product left -->
        <!-- product right -->

        <div class="agileinfo-ads-display col-md-12">
            <div class="wrapper">
                <!-- first section (nuts) -->
                @if($nuts)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Nuts</h3>
                    @foreach ($nuts as $f)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}" >{{ Str::limit($f->name, 10) }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //first section (nuts) -->
                <!-- second section (nuts special) -->
                <div class="product-sec1 product-sec2">
                    <div class="col-xs-7 effect-bg">
                        <h3 class="">Pure Energy</h3>
                        <h6>Enjoy our all healthy Products</h6>
                        <p>Get Extra 10% Off</p>
                    </div>
                    <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                    <div class="col-xs-5 bg-right-nut">
                        <img src="{{asset('eazy/images/nut1.png')}}" alt="">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //second section (nuts special) -->
                <!-- third section (oils) -->
                @if($oil)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Oils</h3>
                    @foreach ($oil as $f)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L" />
                                            <input type="hidden" name="amount" value="78.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //third section (oils) -->
                <!-- fourth section (noodles) -->
                @if($bakery)
                <div class="product-sec1">
                    <h3 class="heading-tittle">Bakery</h3>
                    @foreach ($bakery as $f)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                    <del>Rs.{{$f->prev_price}}</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
                                            <input type="hidden" name="amount" value="15.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endif
                <!-- //fourth section (noodles) -->
            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->
<!-- special offers -->
@if($top_sales)
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Top Sales
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                @foreach ($top_sales as $f)
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="/singleMart/{{$f->id}}">
                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>Rs.{{$f->rate}}</h6>
                                <p>Save {{$f->discount}} %</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                        <input type="hidden" name="amount" value="220.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
@endif
<!-- //special offers -->

@endsection
