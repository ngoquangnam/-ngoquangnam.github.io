<div class="container">
	<section>
		<!--for demo wrap-->   
		<div class="tbl-header">
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<th scope="col" class="th1-giohang">STT</th>          
						<th scope="col" class="th2-giohang">Tên Sản Phẩm</th>
						<th scope="col" class="th3-giohang">Giá</th>
						<th scope="col" class="th4-giohang">Số Lượng</th>
						<th scope="col" class="th5-giohang">Hình Ảnh</th>         
						<th scope="col" class="th6-giohang">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 0; ?>
					@foreach($giohang as $b)
					<?php $stt = $stt+1; ?>
					<tr class="tr">
						<td>{{$stt}}</td>          
						<td>{{ $b->name }}</td>         
						<td>{{ $b->price }}</td>                            
						<td>{{ $b->qty }}</td>                                                      
						<td><img src="{{  asset('resources/upload/'.$b->options->img) }}" alt="" style="width: 100px;
						height: auto";></td>         
						<th>
							<a href="{!! url('xoagiohang',['id'=>$b->rowId]) !!}">Xóa</a>
						</th>			
					</tr>
					@endforeach
				</tbody>
	</table>
	</div>
	</section>
	<div class="row">
	<div class="col-sm-6">
		<div class="chose_area">
			<ul class="ul_total">
				<li class="total">Thời Điểm Giao Hàng: <span>3 Ngày Từ Khi Đặt Hàng</span></li>
				<li class="total">Hình Thức Thánh Toán: <span>Thanh Toán Khi Nhận Hàng</span></li>
				<li class="total">Phí Giao Hàng: <span>Free</span></li>
				<li class="total">Hình Thức Vận Chuyển: <span> </span></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="total_area">
			<ul class="ul_total">
				<li class="total">Số Mặt Hàng:	    <span>{{$count}}</span></li>
				<li class="total">Giảm Giá:	<span>Free</span></li>
				<li class="total">Tổng Tiền:		<span>{{$total}}</span></li>
			</ul>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2 bt">															
				<a href="{{route('thongtin')}}" >
					<input type="submit" name="submit" value="Mua Hàng" class="button" />
				</a>
			</div>
		</div>
	</div>
	</div>
</div>


