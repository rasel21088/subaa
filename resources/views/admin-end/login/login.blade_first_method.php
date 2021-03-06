<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Suba | Admin Login Pannel</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('/') }}/admin-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}/admin-end/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}/admin-end/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}/admin-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('/') }}/admin-end/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->

		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					

							<div>
								
												<div class="signin-form profile admin">
													<h2>Admin Login</h2>
													<div class="login-form">
														{!! Form::open(['url'=>'/login','method'=>'POST']) !!}
													
															<fieldset>
																<div class="form-group">
																	<input id="email" placeholder="E-mail ID" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

									                                @error('email')
									                                    <span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
									                                @enderror
																</div>
																<div class="form-group">
																	 <input id="password" placeholder="Password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

									                                @error('password')
									                                    <span class="invalid-feedback" role="alert">
									                                        <strong>{{ $message }}</strong>
									                                    </span>
									                                @enderror
									                             </div>
									                             	<div class="form-group">
																	<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								                                    <label class="form-check-label" for="remember">
								                                        {{ __('Remember Me') }}
								                                    </label>
									                             </div>
															<div class="form-group">
																<input class="btn btn-success btn-block" name="btn" type="submit" value="LOGIN">
																@if (Route::has('password.request'))
								                                    <a class="btn btn-link" href="{{ route('password.request') }}">
								                                        {{ __('Forgot Your Password?') }}
								                                    </a>
								                                @endif
																							
															</div>
															</fieldset>
														{!! Form::close() !!}
													</div>
													<div class="login-social-grids admin_w3">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
												
													 <h6><a href="#">Back To Home</a><h6>

													 
												</div>

					

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->

<!-- js -->

          <script type="text/javascript" src="{{ asset('/') }}/admin-end/js/jquery-2.1.4.min.js"></script>
		  <script src="{{ asset('/') }}/admin-end/js/modernizr.custom.js"></script>
		
		   <script src="{{ asset('/') }}/admin-end/js/classie.js"></script>
		  <script src="{{ asset('/') }}/admin-end/js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
			  <script src="{{ asset('/') }}/admin-end/js/prettymaps.js"></script>
				<script>

        $(function(){
            //default
            $('.map-canvas').prettyMaps({
                address: 'Melbourne, Australia',
                image: 'map-icon.png',
                hue: '#FF0000',
                saturation: -20
            });

            //red map example
            $('#default-map-btn').on('click', function(){
                $('.map-canvas').prettyMaps();
            });

            //green map example
            $('#green-map-btn').on('click', function(){
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    hue: '#00FF55',
                    saturation: -30
                });
            });

            //blue map example
            $('#blue-map-btn').on('click', function(){
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    hue: '#0073FF',
                    saturation: -30,
                    zoom: 16,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    scrollwheel: false,
                });
            });
            
            //grey map example
            $('#grey-map-btn').on('click', function(){
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    saturation: -100,
                    lightness: 10
                });
            });
        });

  </script>
<!-- //js -->
<script src="{{ asset('/') }}/admin-end/js/screenfull.js"></script>
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
<script src="{{ asset('/') }}/admin-end/js/jquery.nicescroll.js"></script>
<script src="{{ asset('/') }}/admin-end/js/scripts.js"></script>

<script type="text/javascript" src="{{ asset('/') }}/admin-end/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>