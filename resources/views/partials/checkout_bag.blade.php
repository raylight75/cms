<div class="sidepanel widget_bag_totals your_order_block">
    <h3>Your Order</h3>
    <table class="bag_total">
        <tr class="shipping clearfix">
            <th>Products</th>
            <td>{!! Helper::price($grand_total) !!}&nbsp{!! $currency !!}</td>
        </tr>
        <tr class="shipping clearfix">
            <th>SHIPPING RATE</th>
            <td>{!! Helper::price($shippings->rate) !!}&nbsp{!! $currency !!}</td>
        </tr>
        <tr class="shipping clearfix">
            <th>+ 20% VAT applicable</th>
            <td>{!! Helper::price($vat_total) !!}&nbsp{!! $currency !!}</td>
        </tr>
        <tr class="total clearfix">
            <th>Total</th>
            <td>{!! Helper::price($finalTotal) !!}&nbsp{!! $currency !!}</td>
        </tr>
    </table>
    <a class="btn active" href="{{ url('checkout/create') }}">Place Test Order</a>
    <a class="btn active" href="{{ url('payment/alert') }}">Proceed to PayPal</a>
    <a class="btn inactive" href="{{ url(URL::previous()) }}">Go to previous
        step</a>
</div>