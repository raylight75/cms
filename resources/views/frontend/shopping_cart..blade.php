<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">

    <!-- CONTAINER -->
    <div class="container">
        <h3 class="pull-left">
            <b><?= _('Shopping Bag')?></b>
        </h3>

        <div class="pull-right">
            <a href="{{ url('cms') }}"><?= _('Back to shop')?><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //PAGE HEADER -->
<!-- SHOPPING BAG BLOCK -->
<section class="shopping_bag_block">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- CART TABLE -->
            <script type="text/javascript">
                function clear_cart() {
                    var result = confirm('Are you sure want to clear all products?');

                    if (result) {
                        window.location = "{{ url('destroy') }}";
                    } else {
                        return false;
                    }
                }
            </script>
            <div class="col-lg-9 col-md-9 padbot40">
                <div id="heading">
                    <h2 align="center"><?= _('Products on Your Shopping Bag')?></h2>
                    <h3 align="center"><font color="red">
                            <?php //echo $this->session->flashdata('message');?></font></h3>
                </div>
                <div id="text">
                    @if ($cart == '')
                        <h3 class="pull-left">
                            <b><?= _('To add products to your shopping cart click on "Add to Bag" Button')?></b>
                        </h3>
                    @endif
                </div>
                <table class="shop_table">
                    @if ($cart)
                    <thead>
                    <tr>
                        <th class="product-thumbnail"></th>
                        <th class="product-name">ID</th>
                        <th class="product-name">Name</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Amount</th>
                        <th class="product-remove">Cancel Product</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo form_open ( 'shopping/update_products' );
                    $grand_total = 0;
                    $i = 1;
                    foreach ( $cart as $item ) :
                    echo form_hidden ( 'cart[' . $item ['id'] . '][id]', $item ['id'] );
                    echo form_hidden ( 'cart[' . $item ['id'] . '][rowid]', $item ['rowid'] );
                    echo form_hidden ( 'cart[' . $item ['id'] . '][name]', $item ['name'] );
                    echo form_hidden ( 'cart[' . $item ['id'] . '][price]', $item ['price'] );
                    echo form_hidden ( 'cart[' . $item ['id'] . '][qty]', $item ['qty'] );
                    ?>
                    <tr class="cart_item">
                        <?php $k = $item['options']; ?>
                        <td class="product-thumbnail">
                            <a href="<?php echo base_url() ?>images/products/<?php echo $k['Img'];?>">
                                <img src="<?php echo base_url() ?>images/products/<?php echo $k['Img'];?>"
                                     width="100px" alt="" /></a></td>
                        <td><?php echo $i++; ?></td>
                        <td class="product-name">
                            <a href="<?php echo base_url() ?>cart/<?php echo $k ['slug'];?>/<?php echo $item ['id'];?>">
                                <?php echo $item['name'];?></a>
                            <ul class="variation">
                                <li class="variation-Color"><?= _('Color:')?><span><?php echo $k['Color'];?></span></li>
                                <li class="variation-Size"><?= _('Size:')?><span><?php echo $k['Size'];?></span></li>
                                <li class="variation-Size"><?= _('DISCOUNT')?><span><?php echo $k['disc'];?></span>%</li>
                            </ul></td>
                        <td class="product-price"><?php echo currency($item['price'])."&nbsp".label();?>
                        </td>
                        <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'],
                                'maxlength="3" size="1" style="text-align: center"'); ?></td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td class="product-subtotal"><?php echo currency($item['subtotal'])."&nbsp".label();?></td>
                        <td class="product-remove"><a
                                href="<?php echo base_url() ?>shopping/remove/<?php echo $item ['rowid']; ?>">
                                <span><?= _('Delete')?></span>
                                <i>X</i></a></td>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- //CART TABLE -->

            <!-- SIDEBAR -->
            <div id="sidebar" class="col-lg-3 col-md-3 padbot50">

                <!-- BAG TOTALS -->
                <div class="sidepanel widget_bag_totals">
                    <h3><?= _('BAG TOTALS')?></h3>
                    <table class="bag_total">
                        <tr class="shipping clearfix">
                            <th><?= _('SHIPPING')?></th>
                            <td><?= _('Free')?></td>
                        </tr>
                        <tr class="total clearfix">
                            <th><?= _('Total')?></th>
                            <?php	if ($cart = $this->cart->contents ()) : ?>
                                <td><?php echo currency($grand_total)."&nbsp".label();?></td>
                            <?php endif; ?>
                        </tr>
                    </table>
                    <input type="button" class="btn active" value="Clear Cart"
                           onclick="clear_cart()"> <input type="submit" class="btn inactive"
                                                          value="Update Cart">
                    <?php echo form_close(); ?>
                    <a class="btn active" href="<?php echo base_url() ?>shopping/checkout1"><?= _('Check out')?></a> <a
                        class="btn inactive" href="<?php echo base_url() ?>home"><?= _('Continue shopping')?></a>
                </div>
                <!-- //REGISTRATION FORM -->
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //SHOPPING BAG BLOCK -->
