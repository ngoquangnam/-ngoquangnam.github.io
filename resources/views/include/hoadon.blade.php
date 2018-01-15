<div class="hoadon">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<div class="hoadon-left">
					<h4><span>Lưu ý khi mua hàng</span></h4>
					<ul>
						<li>-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sapiente, possimus ex qui fugiat sequi perferendis cum, atque recusandae illum id optio fuga nihil neque quos voluptas nostrum ducimus, ratione.</li>
						<li>-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, officiis veritatis ab nisi reprehenderit sapiente dolor! Amet consequatur quod quia enim, id, cupiditate magnam asperiores recusandae perspiciatis, doloribus commodi quam.</li>
						<li>-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni deserunt, sequi animi quisquam obcaecati quo dolor molestiae sunt nostrum illo placeat exercitationem nobis ipsum recusandae debitis dolorem cupiditate vel labore!</li>
					</ul>
				</div>
			</div>
			<dvi class="col-sm-5">
				<table class="table table-info table-striped ">
					<thead>
						<tr >
							<td colspan="3" class="td-info">Địa chỉ giao hàng</td>
						</tr>
						<tr >
							<td colspan="3" class="td-info">{{session()->get('validator')['ten']}}</td>
						</tr>
						<tr >
							<td colspan="3" class="td-info">{{session()->get('validator')['diachi']}}</td>
						</tr>
						<tr >
							<td colspan="3" class="td-info">Thông tin đơn hàng của {{$count}} sản phẩm</td>
						</tr>
						<tr>        
							<th scope="col" class="th2-giohang">Tên Sản Phẩm</th>
							<th scope="col" class="th3-giohang">Số lượng</th>
							<th scope="col" class="th4-giohang">giá</th>
						</tr>
					</thead>
					<tbody>
						@foreach($giohang as $giohang) 
						<tr class="tr">
							   
							<td>{{$giohang->name}}</td>                     
							<td>{{$giohang->qty}}</td>                     
							<td>{{$giohang->price}}</td>                     
							
						</tr>
						@endforeach()
						<tr >
							<td colspan="1" class="td-info">Tổng tiền</td>
							<td colspan="1" class="td-info">{{$total}}</td>
							<td colspan="1" class="td-info"></td>
						</tr>
						<tr>
							<td colspan="3" >
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2 bt">															
									<a href="{{route('dathang')}}" >
										<input type="submit" name="submit" value="Mua Hàng" class="button" />
									</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</dvi>
		</div>
	</div>
</div>
