    <tr class="cart_item">
        <td class="product-remove">
            <a href="#" class="remove"></a>
        </td>
        <td class="product-thumbnail">
            <a href="#">
                <img src="{{$value["image-url"]}}" alt="img"
                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
            </a>
        </td>
        <td class="product-name" data-title="Product">
            <a href="#" class="title">{{$value["title"]}}</a>
            <span class="attributes-select attributes-color">{{$value["title"]}}, </span>
            <span class="attributes-select attributes-size">{{$value["title"]}}</span>
        </td>
        <td class="product-quantity" data-title="Quantity">
            <div class="quantity">
                <div class="control">
                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                    <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                           class="input-qty qty" size="4">
                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                </div>
            </div>
        </td>
        <td class="product-price" data-title="Price">
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">
                            $
                        </span>
                        {{$value["sum-price-product"]}}
                    </span>
        </td>
    </tr>