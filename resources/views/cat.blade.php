<div class="features_items" id="ok"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>


    <?
    foreach ($cat as $ca){
    ?>

    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="/public/eshop/images/home/gallery3.jpg" alt="" />
                    <h2>$<?=$ca['price']?></h2>
                    <p><?=$ca['title']?></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$<?=$ca['price']?></h2>
                        <p><?=$ca['title']?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i><?=$ca['wishlist']?></a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i><?=$ca['compare']?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?}?>


</div><!--features_items-->