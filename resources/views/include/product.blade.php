<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<?php $data = DB::table('categories')->where('parent_id',0)->select('name')->skip(0)->take(4)->get()->toArray(); ?>
				@foreach($data as $item)
				<li> {!!$item->name!!}</li>
				@endforeach()
			</ul>
			<div class="resp-tabs-container">
				<div class="tab1">
					@foreach($product as $item)
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="{!! asset('resources/upload/'.$item['image']) !!}" style="width: 100%;
								height: 100%;" alt="" class="pro-image-front">
								<img src="{!! asset('resources/upload/'.$item['image']) !!}" style="width: 100%;
								height: 100%;" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4><a href="{!! route('sanpham',$item['id'])!!}">{!! $item["name"] !!}</a></h4>
								<div class="info-product-price">
									<span class="item_price">{!! $item["price"] !!}</span>
									<del>$69.71</del>								
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">															
										<a href="{!! url('muahang',$item['id'])!!}" >
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
	</div>
</div>