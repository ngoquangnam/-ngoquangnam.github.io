<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu__list">
							<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
							<li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
							<?php $data = DB::table('categories')->where('parent_id',0)->select('name','parent_id','id')->get()->toArray(); ?>
							@foreach($data as $item) 
							<!-- du lieu cua DB::table la kiểu abtract nên phải dùng $item->name -->
							<li class="dropdown menu__item">

								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$item->name}} <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="agile_inner_drop_nav_info">
										<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
											<a href="mens.html"><img src="{{ asset('public/images/top2.jpg') }}" alt=" "/></a>
										</div>
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<?php $menu_con = DB::table('categories')->where('parent_id',$item->id)->skip(0)->take(5)->select('name','id')->get()->toArray(); ?>
												@foreach($menu_con as $item1)
												<li><a href="{{route('loaisanpham',$item1->id)}}">{!! $item1->name !!}</a></li>												
												@endforeach()
											</ul>
										</div>
                
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<?php $menu_con1 = DB::table('categories')->where('parent_id',$item->id)->select('name','id')->skip(5)->take(5)->get()->toArray(); ?>
												@foreach($menu_con1 as $item2)
												<li><a href="{{route('loaisanpham',$item2->id)}}">{!! $item2->name !!}</a></li>
												@endforeach()
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							@endforeach()
							<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>