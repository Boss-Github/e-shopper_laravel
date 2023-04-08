@extends("main.main")

@section("content")
    <?if(count(Cart::content())){?>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">


            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
                </thead>

                <tbody>

                             @foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $addcart)

                <tr>
                    <td class="cart_product">
                        <a href=""><img src="/public/eshop/images/cart/one.png" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{{ $addcart -> name }}</a></h4>
                        <p>Web ID: 1089772</p>
                    </td>
                    <td class="cart_price">
                        <p>${{ $addcart -> price }}</p>
                    </td>

                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href="{{ route('plus', ['id'=>$addcart->rowId,'qty'=>$addcart->qty]) }}"> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="{{ $addcart->qty }}" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href="{{ route('minus', ['id'=>$addcart->rowId,'qty'=>$addcart->qty]) }}"> - </a>
                        </div>
                    </td>

                    <td class="cart_total">
                        <p class="cart_total_price">${{ $addcart->price * $addcart->qty }}</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{ route('remove', ['id'=>$addcart->rowId]) }}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                             @endforeach

                </tbody>


            </table>


        </div>

    </div>

    <div class="col-sm-8"style="margin-left: 200px">
        <div class="contact-form">
            <h2 class="title text-center">To Order</h2>
            <div class="status alert alert-success" style="display: none"></div>

            <form action="#" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
@csrf

                <div class="form-group col-md-6">
                    <input type="text" name="product" class="form-control" required="required" placeholder="Product">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <input type="number" name="number" class="form-control" required="required" placeholder="Number">
                </div>
                <div class="form-group col-md-12">
                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                </div>


            </form>

        </div>
    </div>
</section> <!--/#cart_items-->

    <? }else{ echo "Cart empty";}?>
@endsection