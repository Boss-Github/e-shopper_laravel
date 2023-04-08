<div class="col-sm-5">
    <div class="view-product">
        <img id="img" src="/public/eshop/images/home/product2.jpg" alt="" />

    </div>
</div>

<div class="col-sm-7" id="view_modal">
    <div class="product-information"><!--/product-information-->

        <h2>{{ $product->title }}</h2>
        <p>Web ID: 1089772</p>
        <img src="/public/eshop/images/product-details/rating.png" alt="" />

        <p><b>Availability:</b> {{ $product->availability }}</p>
        <p><b>Condition:</b> {{ $product->condition }}</p>
        <p><b>Brand:</b> {{ $product->brand }}</p>
        <a href=""><img src="/public/eshop/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
    </div><!--/product-information-->
</div>

<style>
    #view_modal{
        float: right;
    }
    #img{
        float: left;
        width: 200px;
        height: 200px;
    }
</style>