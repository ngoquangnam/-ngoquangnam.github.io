<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="col-md-8 modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>

					<form action="{{ route('postform') }}" method="post">
						{{ csrf_field() }}
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="name" >
							<label>Name</label>
							<span class="text-danger"></span>
						</div>
						<div class="styled-input">
							<input type="email" name="email" > 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="password" > 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="confirm" > 
							<label>Confirm Password</label>
							<span></span>
						</div> 
						<input type="submit" value="Sign Up">
					</form>

					<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
						<li><a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="#" class="twitter"> 
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
						</li>
					</ul>
					<div class="clearfix"></div>
					<p><a href="#">By clicking register, I agree to your terms</a></p>

				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<img src=" {{ asset('public/images/log_pic.jpg') }}" alt=" "/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>