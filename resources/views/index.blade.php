@extends("main.main")

@section("slider")
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>@lang('home.slider_title')</h2>
                                    <p>@lang('home.slider_text')</p>
                                <button type="button" class="btn btn-default get">@lang('home.get')</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/public/eshop/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="/public/eshop/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                            <?
                            foreach ($slider as $sl){
                            ?>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>

                                    @if(\Illuminate\Support\Facades\App::getLocale()=='ru')
                                    <h2><?=$sl['title2_ru']?></h2>
                                        <p><?=$sl['text_ru']?></p>
                                        <button type="button" class="btn btn-default get"><?=$sl['get_now_ru']?></button>

                                        @else @if(\Illuminate\Support\Facades\App::getLocale()=='uz')
                                        <h2><?=$sl['title_uz']?></h2>
                                        <p><?=$sl['text_uz']?></p>
                                        <button type="button" class="btn btn-default get"><?=$sl['get_now_uz']?></button>

                                        @else
                                        <h2><?=$sl['title2']?></h2>
                                        <p><?=$sl['text']?></p>
                                        <button type="button" class="btn btn-default get"><?=$sl['get_now']?></button>
                                    @endif
                                    @endif


                                </div>
                                <div class="col-sm-6">
                                    <img src="/public/eshop/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="/public/eshop/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                            <?}?>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection


@section("content")
    <div class="col-sm-9 padding-right">

        <div class="features_items" id="none"><!--features_items-->
            <h2 class="title text-center">@lang('home.fea')</h2>


            <?
            foreach ($product as $pro){
            ?>

            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="/public/eshop/images/home/product2.jpg" alt="" />
                            <h2>$<?=$pro['price']?></h2>
                            <p><?=$pro['title']?></p>

                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">

                                <div id="eye">
                                <button href="" class="add-to-view" data-id="{{ $pro->id }}" data-url="{{ route("viewajax") }}"><img width="20px" src="/public/eshop/images/64px-Font_Awesome_5_regular_eye.svg.png"></button>
                                </div>

                                <a href="{{ route('detail',['id'=>$pro->id]) }}"><button id="detail">See Details</button></a>
                                <h2>$<?=$pro['price']?></h2>
                                <p><?=$pro['title']?></p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i><?=$pro['wishlist']?></a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i><?=$pro['compare']?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?}?>


        </div><!--features_items-->

        <style>
            #eye{
                float: right;
                position: relative;
                bottom: 93px;
            }
            #detail{
                margin-bottom: 20px;
                margin-left: 40px;
                border-radius: 100%;
                color: #fe980f;
                font-size:18px;
                font-weight:500;
                padding: 15px;
                background: white;
                border:none;
            }
        </style>

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                    <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                    <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tshirt" >

                    <?
                    foreach ($tshirt as $ts){
                    ?>

                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/gallery1.jpg" alt="" />
                                        <h2>$<?=$ts['price']?></h2>
                                        <p><?=$ts['title']?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?}?>
                </div>


                <div class="tab-pane fade" id="blazers" >

                    <?
                        foreach ($blazer as $bl){
                    ?>

                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/gallery4.jpg" alt="" />
                                        <h2>$<?=$bl['price']?></h2>
                                        <p><?=$bl['title']?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?}?>

                </div>

                <div class="tab-pane fade" id="sunglass" >

                    <?
                    foreach ($sunglass as $sung){
                    ?>

                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/gallery3.jpg" alt="" />
                                        <h2>$<?=$sung['price']?></h2>
                                        <p><?=$sung['title']?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?}?>

                </div>


                </div>
            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend2.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend3.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend2.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/public/eshop/images/home/recommend3.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>
@endsection


@section("left-sidebar")
    <div class="left-sidebar">
        <h2>@lang('home.cat')</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            <?
            foreach ($category as $cat){
            ?>

            <div class="panel panel-default">
                <div class="panel-heading">

                    @if(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                    <h4 class="panel-title"><button style="border: none; background: #ffffff" onclick="cat('<?=$cat->rowId?>')" data-url="{{ route('catajax') }}"><?=$cat['title_ru']?></button></h4>

                        @else @if(\Illuminate\Support\Facades\App::getLocale() == 'uz')
                        <h4 class="panel-title"><button style="border: none; background: #ffffff" onclick="cat('<?=$cat->rowId?>')" data-url="{{ route('catajax') }}"><?=$cat['title_uz']?></button></h4>

                                  @else  <h4 class="panel-title"><button style="border: none; background: #ffffff" onclick="cat('<?=$cat->rowId?>')" data-url="{{ route('catajax') }}"><?=$cat['title_en']?></button></h4>
                                  @endif
                        @endif

                </div>
            </div>

            <?}?>



        </div><!--/category-products-->

        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">

                    <?
                    foreach ($brand as $bran){
                    ?>

                        <li><a href="{{ route('brand',['id'=>$bran->id]) }}"> <span class="pull-right">(50)</span><?=$bran['title']?></a></li>

                    <?}?>


                </ul>
            </div>
        </div><!--/brands_products-->

        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->

        <div class="shipping text-center"><!--shipping-->
            <img src="/public/eshop/images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>
@endsection