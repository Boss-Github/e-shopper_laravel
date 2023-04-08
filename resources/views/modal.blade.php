
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
                                    <button  class="cart_quantity_up" onclick="plus('<?=$addcart->rowId?>')" data-url="{{ route('plusajax') }}"  data-qty="{{ $addcart->qty }}"> + </button>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{ $addcart->qty }}"  autocomplete="off" size="2">
                                    <button class="cart_quantity_down" onclick="minus('<?=$addcart->rowId?>')" data-url="{{ route('minusajax') }}"  data-qty="{{ $addcart->qty }}"> - </button>
                                </div>
                            </td>

                            <td class="cart_total">
                                <p class="cart_total_price">${{ $addcart->price * $addcart->qty }}</p>
                            </td>
                            <td class="cart_delete">
                                <button  class="cart_quantity_delete" onclick="remove('<?=$addcart->rowId?>')" data-url="{{ route('removeajax') }}" ><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>


                </table>


            </div>

        </div>
    </section> <!--/#cart_items-->

    <? }
    else {  echo "Cart empty";  }?>