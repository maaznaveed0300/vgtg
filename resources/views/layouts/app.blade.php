<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Virtual Get Together Online</title>

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset("vgtgimg/vgtglogo.png") }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset("vgtgimg/vgtglogo.png") }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-corporate-6.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{-- <script type="text/javascript">
            $(document).ready(function(){
              $('#bookkaram').on("click",function(e){
                //   alert('workin');
               $('#karamform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookwaseem').on("click",function(e){
               $('#waseemform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookmazhar').on("click",function(e){
               $('#mazharform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookmeena').on("click",function(e){
               $('#meenaform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookimran').on("click",function(e){
               $('#imranform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookahmed').on("click",function(e){
               $('#ahmedform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookvicky').on("click",function(e){
               $('#vickyform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookrose').on("click",function(e){
               $('#roseform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookmehmood').on("click",function(e){
               $('#mehmoodform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookdiba').on("click",function(e){
               $('#dibaform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookirfan').on("click",function(e){
               $('#irfanform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookritika').on("click",function(e){
               $('#ritikaform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#booksyeda').on("click",function(e){
               $('#syedaform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookimrang').on("click",function(e){
               $('#imrangform').toggle('slow');
              });
            });
            $(document).ready(function(){
              $('#bookshabbir').on("click",function(e){
               $('#shabbirform').toggle('slow');
              });
            });
        </script> --}}
        <script>
        function clickme(id) {
            // alert(id);
                $('#singer-expertise').html("");
                $('#singer-intro').html("");
                $('#singer-pic').html("");
                $('#singer-video').html("");
                $("#pvid").css("display","none");
                $.ajax({
                    url:'singerModal/'+id,
                    type:'GET',
                    data:{
                        'id':id,
                        },
                        success:function(data){
                        // console.log(data);
                        $('#singer-expertise').html(data.expertise);
                        $('#singer-intro').html(data.introduction);
                        $('#singer-pic').html(data).append('<img src="saved_images/'+data.profile_picture+'" class="img-fluid border-radius-0" alt="">');
                        if(data.promo_video!=null) {
                        $("#pvid").css("display","block");
                            $('#singer-video').html(data).append('<source src="saved_videos/'+data.promo_video+'" type="video/mp4">');
                        }
                        else {
                            $("#pvid").css("display","none");
                            $('#singer-video').html("");
                        }
                        }
                    });
            }
            $(document).ready(function(){
                      $('#bookartist').on("click",function(e){
                        //   alert('workin');
                       $('#artistform').toggle('slow');
                      });
            });
        </script>

	</head>
	<body class="">


		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ url('/')}}">
											<img alt="" width="140" height="58" data-sticky-width="100" data-sticky-height="40" src="vgtgimg/vgtglogo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="">
                                                        <a class="" href="{{ url('/request_event') }}">
															Request an Event
														</a>
													</li>
                                                    <li class="">
                                                        <a class="" href="{{ url('/live_event') }}">
															Live Event
														</a>
													</li>

													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle"  href="{{ url('/')}}#artist">
															All Expertise
														</a>
														<ul class="dropdown-menu">
															<li>
                                                                <a href="">Actor</a>
															</li>
                                                            <li>
                                                                <a href="">Celebrity</a>
															</li>
                                                            <li>
                                                                <a href="">Entertainer</a>
															</li>
                                                            <li>
                                                                <a href="">Musician</a>
															</li>
                                                            <li>
                                                                <a href="">Other</a>
															</li>
                                                            <li>
                                                                <a href="">Poet</a>
															</li>
                                                            <li>
                                                                <a href="">Presenter</a>
															</li>
                                                            <li>
                                                                <a href="">Singer</a>
															</li>
                                                            <li>
                                                                <a href="">Writer</a>
															</li>
														</ul>
													</li>
                                                    <li class="">
                                                        <a class="" href="{{ url('/login') }}">
															Artist Section
														</a>
													</li>
                                                    <li class="">
                                                        <a class="" href="{{ url('/')}}#aboutus">
															About Us
														</a>
													</li>
                                                    <li class="">
                                                        <a class="" href="{{ url('/')}}#faqs">
															FAQs
														</a>
													</li>
                                                    <li class="">
                                                        <a class="" href="{{ url('/')}}#contactus">
															Contact
														</a>
													</li>
												</ul>
											</nav>
										</div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features d-inline-flex">
											<a href="#" class="header-nav-features-toggle" ><i class="icon-social-facebook icons"></i></a>
											{{-- <a href="#" class="header-nav-features-toggle" ><i class="icon-social-instagram icons"></i></a> --}}
										</div>
                                        <div class="header-nav-feature header-nav-features d-inline-flex">
											{{-- <a href="#" class="header-nav-features-toggle" ><i class="icon-social-facebook icons"></i></a> --}}
											<a href="#" class="header-nav-features-toggle" ><i class="icon-social-instagram icons"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
            <div class="modal fade" id="artistdetail" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{-- <h4 class="modal-title text-center" id="largeModalLabel">Artist</h4> --}}
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="ajax-container">
                                <div class="row pb-4 mb-2">
                                    <div class="col-sm-5">
                                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                                            <div>
                                                <div id="singer-pic" class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                    <img  src="{{ asset('') }}" class="img-fluid border-radius-0" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 20%">
                                                        Expertise
                                                    </td>
                                                    <td id="singer-expertise" style="width: 80%">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 20%">
                                                        Introduction
                                                    </td>
                                                    <td id="singer-intro" style="width: 80%">
                                                    </td>
                                                </tr>
                                                <tr id="pvid">
                                                    <td style="width: 20%">
                                                        Promo Video
                                                    </td>
                                                    <td style="width: 80%">
                                                        <video id="singer-video" width="300" height="220" controls>

                                                        </video>
                                                    </td>
                                                </tr>
                                            </tbody>
                                           </table>
                                           <button id="bookartist" class="btn btn-outline btn-primary w-100 mb-2">Book</button>

                                        <form role="form" id="artistform" method="POST" action="{{ route('karam') }}" class="needs-validation" style="display: none">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Name</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="name" required type="text">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="email" required type="email" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Phone(Whatsapp) </label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" nam="phone" required type="tel" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Date</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="date"required type="datetime-local" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Time</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="time" required type="time" value="" placeholder="Street">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="form-group col-lg-12">
                                                    <input type="submit" value="Submit" class="btn btn-outline btn-primary w-100 mb-2" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@yield('content')

<footer id="footer" class="mt-0">
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p>VGTG © 2021. All rights reserved. <a href="https://www.iitcanada.com/" style="color: #3e4095"> International Information Technology (IIT) Canada Sitemap</a>
                       </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/jquery.vide.min.js"></script>
<script src="vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script src="js/views/view.home.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-12345678-1', 'auto');
ga('send', 'pageview');
</script>
-->

</body>
</html>

