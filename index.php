<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ Web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- <link rel="stylesheet" href="/PHP_CP1896M04/assets/vendor/bootstrap/css/bootstrap.css"> -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="/PHP_CP1896M04/assets/vendor/font-awesome.css">
	<!-- link css frontend-->
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
</head>
<body>
	
	<!-- Navigation -->
	<div class="container-fluid px-0">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top fixed-top p-0"> 
			<a class="navbar-brand mr-4" href="#">
				
				<img src="assets/shared/img/logo.png" alt="logo cherry">
			</a>
			<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"></span> 
			</button>
		
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav ml-auto">
		        <li class="nav-item active">
		          <a class="nav-link text-uppercase" href="#">Trang Chủ
		                <span class="sr-only">(current)</span>
		              </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-uppercase" href="#">Giới Thiệu</a>
		        </li>		        
		        <li class="nav-item"> 
		        	<a class="nav-link text-uppercase" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch Vụ
		        		<span class="fa fa-angle-down"></span>
		        	</a>
                    <div class="dropdown-menu" id="dropdown-menu2" aria-labelledby="navbarDropdown2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> 
                                        	<span class="fa fa-folder"></span> 
                                        </div>
                                        <div class="d-flex flex-column"> 
                                        	<a class="dropdown-item" href="#">
                                                <h6 class="mb-0 text-uppercase">In áo đẹp</h6> 
                                                <small class="text-muted">Chuyên in các loại áo thun</small>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> 
                                        	<span class="fa fa-question"></span> 
                                        </div>
                                        <div class="d-flex flex-column">
                                        	<a class="dropdown-item" href="#">
                                                <h6 class="mb-0 text-uppercase">Giải pháp IT</h6> 
                                                <small class="text-muted">Tiện ích tối ưu</small>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> 
                                        	<span class="fa fa-calculator"></span> 
                                        </div>
                                        <div class="d-flex flex-column"> 
                                        	<a class="dropdown-item" href="#">
                                                <h6 class="mb-0 text-uppercase">Thiết kế Web</h6> 
                                                <small class="text-muted">Chuẩn công nghệ mới</small>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row d-flex tab">
                                        <div class="fa-icon text-center"> 
                                        	<span class="fa fa-paper-plane"></span> 
                                        </div>
                                        <div class="d-flex flex-column"> 
                                        	<a class="dropdown-item" href="#">
                                                <h6 class="mb-0 text-uppercase">Camera An ninh</h6>
                                                <small class="text-muted">An toàn cho mọi nhà</small>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
		        <li class="nav-item"> 
		        	<a class="nav-link text-uppercase" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm<span class="fa fa-angle-down"></span></a>
	                <div class="dropdown-menu" id="dropdown-menu1" aria-labelledby="navbarDropdown1">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center"> 
	                                    	<span class="fa fa-shopping-cart"></span> 
	                                    </div>
	                                    <div class="d-flex flex-column">
	                                    	<a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">May áo thun</h6> 
	                                            <small class="text-muted">Thiết kế theo yêu cầu</small>
	                                        </a> 
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center">
	                                    	<span class="fa fa-gamepad"></span> 
	                                    </div>
	                                    <div class="d-flex flex-column">
	                                    	<a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">Thiết kế Web</h6> 
	                                            <small class="text-muted">Theo chuẩn công nghệ 4.0</small>
	                                        </a> 
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center"> <span class="fa fa-video-camera"></span> </div>
	                                    <div class="d-flex flex-column"> <a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">Giải pháp IT</h6> <small class="text-muted">Giúp kinh doanh tốt</small>
	                                        </a> </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center"> <span class="fa fa-comment"></span> </div>
	                                    <div class="d-flex flex-column"> <a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">Công nghệ in</h6> <small class="text-muted">Chất lượng hàng đầu</small>
	                                        </a> </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center"> <span class="fa fa-briefcase"></span> </div>
	                                    <div class="d-flex flex-column"> <a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">Áo đồng phục </h6> <small class="text-muted">Tính chuyên nghiệp hơn</small>
	                                        </a> </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="row d-flex tab">
	                                    <div class="fa-icon text-center"> <span class="fa fa-bolt"></span> </div>
	                                    <div class="d-flex flex-column"> <a class="dropdown-item" href="#">
	                                            <h6 class="mb-0 text-uppercase">Áo lớp - nhóm</h6> <small class="text-muted">Tình bạn sẽ nhớ mãi</small>
	                                        </a> </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </li>
		        
		        <li class="nav-item">
		          <a class="nav-link text-uppercase" href="#">Đối Tác</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-uppercase" href="#">Liên Hệ</a>
		        </li>
		        <li class="nav-item">
		        	<!-- Search form -->
					<div class="input-group md-form form-sm form-2 pl-0">
						<input class="form-control my-0 py-1 amber-border" type="text" placeholder="Tìm kiếm" aria-label="Search">
						<div class="input-group-append">
						    <span class="input-group-text amber lighten-3" id="basic-text1">
						    	<a href="#"><i class="fa fa-search text-grey"
						        aria-hidden="true"></i></a></span>
						</div>
					</div>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav><!-- end Navigation menu -->
	</div>
	<!-- header -->
	<header class="bao_head">
        <div class="container-fluid">
			<div class="row">
				<!-- <div class="col-md-12"> -->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
							<li data-target="#carousel-example-generic" data-slide-to="6"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="img-fluid" src="assets/frontend/img/1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/2.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/3.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/4.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/5.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/6.png" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/frontend/img/7.png" alt="First slide">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<!-- </div> -->
				
			</div><!-- end row coursel -->
			<div class="row datao">
				<div class="col-md-12 delivery">
					<a href="#"><img src="assets/frontend/img/delivery.png" alt="Đặt áo ngay" class="img-fluid">
					</a>
				</div>
			</div>
		</div> <!-- end container -->
    </header> <!-- end header -->
	
	
	<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="section_tren text-uppercase">Dịch vụ của chúng tôi</h2>
                            <p class="section_duoi text-muted">Luôn mang đến bạn một dịch vụ chất lượng nhất.</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="ser_head">Camera An ninh</h4>
                                <p class="text-muted">Giải pháp camera cho nhà ở, công ty, đường phố hiệu quả an toàn, mang giá trị thực tế cho mọi nhà.</p>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="ser_head">In áo thun đẹp</h4>
                                <p class="text-muted">Quý khách hàng được thiết kế miễn phí và chất lượng luôn mang đến sự hài lòng của khách hàng.</p>
                            </div>
                            
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                                </span>
                                
                                <h4 class="ser_head">Thiết kế Web</h4>
                                <p class="text-muted">Chuẩn thiết kế chuyên nghiệp theo công nghệ và nền tảng mới nhất, đáp ứng nhu cầu của quý khách hàng.</p>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="ser_head">Giải pháp IT</h4>
                                <p class="text-muted">Là một đại lý của Mobifone cung cấp các giải pháp tối ưu giúp doanh nghiệp phát triển hơn.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section trang services -->
	<section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section_tren text-uppercase">Liên hệ chúng tôi</h2>
                    <p class="section_duoi text-muted">Vui lòng điền đầy đủ thông tin, chúng tôi cố gắng phản hồi và liên lạc với khách hàng một cách sớm nhất.</p>
                </div>
            </div> <!-- end row 1 -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form id="contact_form" name="guiEmail" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" required="required" data-validation-required-message="Please enter your name." placeholder="Your Name *">
                                    <p class="help-block text-danger"></p>
                                </div> <!-- end text name -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" required="required" data-validation-required-message="Please enter your email address." placeholder="Your Email *">
                                    <p class="help-block text-danger"></p>
                                </div> <!-- end text email -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" required="required" data-validation-required-message="Please enter your phone number." placeholder="Your Phone *">
                                    <p class="help-block text-danger"></p>
                                </div> <!-- end text phone -->
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div> <!-- end form group area -->
                            </div> <!-- end cot 6  thu 1-->
                            <div class="col-md-6">
                                <div class="maps_dqnghi">
								    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.601841647908!2d105.76614721408394!3d10.049676892817132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08808ccfb7b75%3A0xd9fa2fbf016e8ee7!2zNzAgQuG6vyBWxINuIMSQw6BuLCBBbiBIb8OgLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1537342219537" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div> <!-- end phần bản đồ -->
                            </div> <!-- end col 6 thu 2 -->
                        </div> <!-- end row 12 chua 2 cot 6 -->
                        <div class="clearfix"></div>
                        <div class="col-md-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary btn-xl text-uppercase" id="nutguiEmail">Gởi thông tin</button>
                        </div> <!-- end col 12 trong row 12 cot cua form -->
                    </form><!--  end form -->
                </div> <!-- end col12 cua row2 -->
            </div> <!-- end row 2 -->
        </div> <!-- end container -->
    </section> <!-- end section trang contact -->	
	
	<!-- footer -->
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span class="copyright">Copyright &copy; Mr. Nghi 2020</span>
                </div> <!-- end col 4 1 -->
                <div class="col-md-3">
                    <ul class="list-inline social_bao">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                              <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end col 4 2 -->
                <div class="col-md-3">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Quy trình bán hàng</a>
                        </li>
                        
                    </ul>
                </div> <!-- end col 4 3 -->
                <div class="col-md-3">
                    <ul class="list-inline quicklinks">                       
                        <li class="list-inline-item">
                            <a href="#">Quy định của công ty</a>
                        </li>
                    </ul>
                </div> <!-- end col 4 3 -->
            </div>
        </div>
    </footer>
	<!-- end footer -->

	<!-- jquery and bootstrap.js -->
	<!-- <script type="text/javascript" src="/PHP_CP1896M04/assets/vendor/bootstrap/js/bootstrap.js"></script>
	 	<script type="text/javascript" src="/PHP_CP1896M04/assets/vendor/jquery/jquery-3.4.1.min.js"></script> -->
 		<!--link bootstrap 4 -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>