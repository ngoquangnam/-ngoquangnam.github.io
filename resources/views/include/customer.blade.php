<div class="info">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 info-left">
				<label for="">Thông tin của quý khách</label>				
				<form action="{{route('donhang')}}" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Email</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Email" class="form-control input-info" required="" name="email">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Tên</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Tên" class="form-control input-info" name="ten">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Tỉnh/Thành phố</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Tỉnh/Thành phố" class="form-control input-info" name="thanhpho">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Quận/Huyện</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Quận/Huyện" class="form-control input-info" name="huyen">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Xã/Phường</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Xã/Phường" class="form-control input-info" name="xa">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Địa chỉ nhận hàng</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Địa chỉ nhận hàng" class="form-control input-info" name="diachi">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-sm-4 label-info1">Số điện thoại</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Số điện thoại" class="form-control input-info" name="sodt">
						</div>
					</div>
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2 bt1">
						<input type="submit" name="submit" value="Mua Hàng" class="button" />
					
				</div>
			</form>				
		</div>
		<div class="col-sm-5">
			<div class="">
			<table class="table table-info table-striped ">
				<thead>
					<tr>
						<th scope="col" class="th1-info">STT</th>
						<th scope="col" class="th2-info">Tên Sản Phẩm</th>
						<th scope="col">Giá</th>
						<th scope="col">Số Lượng</th>
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
					</tr>
					@endforeach
					<tr >
						<td colspan="1" class="td-info">Tổng tiền:</td>
						<td colspan="3" class="td-info">{{$total}}</td>
					</tr>
				</tbody>					
			</table>
			</div>	
		</div>
	</div>
</div>
</div>