
<!DOCTYPE HTML>
<html>
<head>
	<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="{{ asset('public/css/admin/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="{{ asset('public/css/admin/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet"> 
	<script src="{{ asset('public/js/jquery.min.js') }}"> </script>
	<!-- Mainly scripts -->
	<script src="{{ asset('public/js/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('public/js/jquery.slimscroll.min.js') }}"></script>
	<!-- Custom and plugin javascript -->
	<link href="{{ asset('public/css/admin/custom.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/custom.js') }}"></script>
	<script src="{{ asset('public/js/screenfull.js') }}"></script>
	<link href="http://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet" type="text/css"> 
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
	</script>

<!----->


<script src="{{ asset('public/js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body>
	<div id="wrapper">


		<div class="drop-men" >
			<ul class=" nav_1">

				<li class="dropdown at-drop">
					<a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
					<ul class="dropdown-menu menu1 " role="menu">
						<li><a href="#">

							<div class="user-new">
								<p>New user registered</p>
								<span>40 seconds ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-user-plus"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>Someone special liked this</p>
								<span>3 minutes ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-heart"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>John cancelled the event</p>
								<span>4 hours ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-times"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>The server is status is stable</p>
								<span>yesterday at 08:30am</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-info"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>New comments waiting approval</p>
								<span>Last Week</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-rss"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#" class="view">View all messages</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="{{ asset('public/images/wo.jpg') }}"></a>
					<ul class="dropdown-menu " role="menu">
						<li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
						<li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
						<li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
						<li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
					</ul>
				</li>

			</ul>
		</div>
		<div class="clearfix">
		</div>
		<!-- /.navbar-collapse -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				
			</div>
		</div>
	</nav>
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<div class="content-main">

			<!--banner-->	
			<div class="banner">

				<h2>
					<a href={{route('index')}}>Home</a>
					<i class="fa fa-angle-right"></i>
					<span>Dashboard</span>
				</h2>
			</div>
			<!--//banner-->
			<!--content-->
			<div class="content-top">


				<div class="validation-form">
 	
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Fullname</label>
              <input type="text" placeholder="Firstname" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Phone number</label>
              <input type="text" placeholder="Current Website Url" required="">
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <input type="text" placeholder="Current Website Url" required="">
            </div><div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Total money</label>
              <input type="text" placeholder="Current Website Url" required="">
            </div>
             <div class="clearfix"> </div>
              
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Your </label>
              <textarea  placeholder="Your Comment..." required="">Your Comment.....</textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" placeholder="Repeated password" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Number</label>
              <input type="text" placeholder="Number" required="">
               <p class=" hint-block">Numeric values from 0-***</p>
            </div>
             <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <div class="checkbox1">
                <label>
                  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
                  Are you a winner?
                </label>
              </div>
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Select</label>
            <select>
            	<option value="">Contrary</option>
            	<option value="">Contrary1</option>
            	<option value="">Contrary2</option>
            	<option value="">Contrary3</option>
            	<option value="">Contrary4</option>
            </select>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
				<div class="col-md-8 content-top-2">

					<link rel="stylesheet" href="{{ asset('public/css/admin/graph.css') }}">
					<!--//graph-->
					<script src="{{ asset('public/js/jquery.flot.js') }}"></script>
					<script>
						$(document).ready(function () {

										// Graph Data ##############################################
										var graphData = [{
												// Visits
												data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
												color: '#999999'
											}, {
												// Returning Visits
												data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
												color: '#999999',
												points: { radius: 4, fillColor: '#7f8c8d' }
											}
											];

										// Lines Graph #############################################
										$.plot($('#graph-lines'), graphData, {
											series: {
												points: {
													show: true,
													radius: 5
												},
												lines: {
													show: true
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});

										// Bars Graph ##############################################
										$.plot($('#graph-bars'), graphData, {
											series: {
												bars: {
													show: true,
													barWidth: .9,
													align: 'center'
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});

										// Graph Toggle ############################################
										$('#graph-bars').hide();

										$('#lines').on('click', function (e) {
											$('#bars').removeClass('active');
											$('#graph-bars').fadeOut();
											$(this).addClass('active');
											$('#graph-lines').fadeIn();
											e.preventDefault();
										});

										$('#bars').on('click', function (e) {
											$('#lines').removeClass('active');
											$('#graph-lines').fadeOut();
											$(this).addClass('active');
											$('#graph-bars').fadeIn().removeClass('hidden');
											e.preventDefault();
										});

										// Tooltip #################################################
										function showTooltip(x, y, contents) {
											$('<div id="tooltip">' + contents + '</div>').css({
												top: y - 16,
												left: x + 20
											}).appendTo('body').fadeIn();
										}

										var previousPoint = null;

										$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
											if (item) {
												if (previousPoint != item.dataIndex) {
													previousPoint = item.dataIndex;
													$('#tooltip').remove();
													var x = item.datapoint[0],
													y = item.datapoint[1];
													showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
												}
											} else {
												$('#tooltip').remove();
												previousPoint = null;
											}
										});

									});
								</script>
								<div class="graph-container">
									
									<div id="graph-lines"> </div>
									<div id="graph-bars"> </div>
								</div>

							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!---->


					<div class="content-mid">

						<div class="col-md-5">
							<div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
							<!----Calender -------->
							<link rel="stylesheet" href="{{ asset('public/css/admin/clndr.css') }}" type="text/css" />
							<script src="{{ asset('public/js/underscore-min.js') }}" type="text/javascript"></script>
							<script src= "{{ asset('public/js/moment-2.2.1.js') }}" type="text/javascript"></script>
							<script src="{{ asset('public/js/clndr.js') }}" type="text/javascript"></script>
							<script src="{{ asset('public/js/site.js') }}" type="text/javascript"></script>
							<!----End Calender -------->
						</div>
						<div class="col-md-7 mid-content-top">
							<div class="middle-content">
								<h3>Latest Images</h3>
								<!-- start content_slider -->
								<div id="owl-demo" class="owl-carousel text-center">
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na1.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na2.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na1.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na2.jpg') }}" alt="name">
									</div>
									<div class="item">
										<img class="lazyOwl img-responsive" data-src="{{ asset('public/images/na.jpg') }}" alt="name">
									</div>

								</div>
							</div>
							<!--//sreen-gallery-cursual---->
							<!-- requried-jsfiles-for owl -->
							<link href="{{ asset('public/css/admin/owl.carousel.css') }}" rel="stylesheet">
							<script src="{{ asset('public/js/owl.carousel.js') }}"></script>
							<script>
								$(document).ready(function() {
									$("#owl-demo").owlCarousel({
										items : 3,
										lazyLoad : true,
										autoPlay : true,
										pagination : true,
										nav:true,
									});
								});
							</script>
							<!-- //requried-jsfiles-for owl -->
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="copy">
						<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!---->
		<!--scrolling js-->
		<script src="{{ asset('public/js/jquery.nicescroll.js') }}"></script>
		<script src="{{ asset('public/js/scripts.js') }}"></script>
		<!--//scrolling js-->
		<script src="{{ asset('public/js/bootstrap.min.js') }}"> </script>
	</body>
	</html>

