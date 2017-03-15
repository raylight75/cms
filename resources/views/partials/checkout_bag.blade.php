<div class="sidepanel widget_bag_totals your_order_block">
    <h3>Your Order</h3>
    <table class="bag_total">
        <tr class="shipping clearfix">
            <th>Products</th>
            <td>{!! Helper::price($grand_total) !!}&nbsp{!! $label !!}</td>
        </tr>
        <tr class="shipping clearfix">
            <th>SHIPPING RATE</th>
            <td>{!! Helper::price($shippings->rate) !!}&nbsp{!! $label !!}</td>
        </tr>
        <tr class="shipping clearfix">
            <th>+ 20% VAT applicable</th>
            <?php $vat_total = $grand_total * $vat;?>
            <td>{!! Helper::price($vat_total) !!}&nbsp{!! $label !!}</td>
        </tr>
        <tr class="total clearfix">
            <th>Total</th>
            <?php
            $shipping_rate = $shippings->rate;
            $grand_total = $grand_total + $shipping_rate + $vat_total;
            ?>
            <td>{!! Helper::price($grand_total) !!}&nbsp{!! $label !!}</td>
        </tr>
    </table>
    <a class="btn active" href="{{ url('checkout/create') }}">Place Order</a>
    <a class="btn inactive" href="{{ url(URL::previous()) }}">Go to previous
        step</a>
</div>