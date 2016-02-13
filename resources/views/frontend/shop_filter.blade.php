<!-- SHOP FILTER -->
				<div class="sidepanel widget_sizes">				
				    <h3><?= _('SHOP BY CATEGORIES')?></h3>
				    
                    <form class="login_form" name="pr_cat" id="categories" role="form" 
                          method="GET" action="{{ url('filter/products/'.$menu[$parent]['id'].'') }}">				    
				    				                                         
                    <?php foreach($menu[$parent]['sub_cat'] as $row) : ?>
					<input type="checkbox" id="<?php echo $row['name'];?>"
					name="categ[]" value="<?php echo $row['id'];?>"
					<?php echo (in_array($row['id'],$category))?'checked="checked"':''; ?> />
					<label for="<?php echo $row['name'];?>"><li><a><?php echo $row['name'];?></a></li></label>
					<?php endforeach; ?>
										
					<div class="sidepanel widget_brands">						
					<h3><?= _('SORT BY PRICE')?></h3>			            										
					<input type="checkbox" id="priceasc" name="price" value="asc" 
					<?php echo (in_array('asc',$price))?'checked="checked"':''; ?> />					
					<label for="priceasc">Ascending</label>
					<input type="checkbox" id="pricedesc" name="price" value="desc" 
					<?php echo (in_array('desc',$price))?'checked="checked"':''; ?> />					
					<label for="pricedesc">Descending</label>					
					<h3><?= _('SORT BY NAME')?></h3>
					<input type="checkbox" id="nameasc" name="name" value="asc" 
					<?php echo (in_array('asc',$name))?'checked="checked"':''; ?> />					
					<label for="nameasc">Ascending</label>
					<input type="checkbox" id="namedesc" name="name" value="desc" 
					<?php echo (in_array('desc',$name))?'checked="checked"':''; ?> />					
					<label for="namedesc">Descending</label>										
					</div>					
					<div class="sidepanel widget_sized">					
					<h3><?= _('SORT BY SIZE')?></h3>										
					<?php foreach($properties['size'] as $row) : ?>
					<input type="checkbox" id="<?php echo $row->size;?>">
					<a class="size<?php echo $row->size;?>"
					name="size[]" value="<?php echo $row->size_id;?>"
					<?php echo (in_array($row->size_id,$size))?'checked="checked"':''; ?> />
					<label for="<?php echo $row->size;?>">
					<li><a><?php echo $row->size;?></a></li></label>
					<?php endforeach; ?>
					</div>
					<div class="sidepanel widget_color">
					<h3><?= _('SORT BY COLOR')?></h3>										
					<?php foreach($properties['colour'] as $row) : ?>
					<input type="checkbox" id="<?php echo $row->colour;?>">
					<a class="color<?php echo $row->colour_id;?>"
					name="color[]" value="<?php echo $row->colour_id;?>"
					<?php echo (in_array($row->colour_id,$color))?'checked="checked"':''; ?> />
					<label for="<?php echo $row->colour;?>">
					<li><a class="color<?php echo $row->colour_id;?>"></a></li>
					<?php echo $row->colour;?><span>(<?php echo $row->color_cnt;?>)</span></label>
					<style>
					.widget_color li a.color<?php echo $row->colour_id;?>
					{background-color:<?php echo $row->web;?>
					}
					</style>
					<?php endforeach; ?>
					</div>
					<div class="sidepanel widget_brands">						
					<h3><?= _('SORT BY BRANDS')?></h3>											
					<?php foreach($properties['brand'] as $row) : ?>					
					<input type="checkbox" id="<?php echo $row->brand;?>"
					name="brand[]" value="<?php echo $row->brand_id;?>"
					<?php echo (in_array($row->brand_id,$brand))?'checked="checked"':''; ?> />
					<label for="<?php echo $row->brand;?>"><?php echo $row->brand;?>										
					<span>(<?php echo $row->brand_cnt;?>)</span></label>					
					<?php endforeach; ?>
					</div>
						<input type="submit" value="Submit" class="submit">
					</form>					
				</div>				
<!-- //SHOP FILTER -->