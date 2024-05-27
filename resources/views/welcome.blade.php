
<!DOCTYPE html>
<html>
<head>
<title>Above Free Responsive Template | Template Stock</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../assets/css/cssHome/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../assets/css/cssHome/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/js/jsHome/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jsHome/move-top.js"></script>
<script type="text/javascript" src="../assets/js/jsHome/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #eef2f5;
		margin: 0;
		padding: px;
	}
	.services-section {
		padding: 40px 0;
	}
	.services-header {
		text-align: center;
		margin-bottom: 40px;
	}
	.testimonial-carousel {
		display: flex;
		overflow-x: scroll;
		-ms-overflow-style: none;  /* IE and Edge */
		scrollbar-width: none;  /* Firefox */
		padding: 10px 0;
	}
	.testimonial-carousel::-webkit-scrollbar {
		display: none;  /* Chrome, Safari, Opera */
	}
	.testimonial-item {
		background-color: #ffffff;
		border: 1px solid #ddd;
		border-radius: 15px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
		text-align: center;
		padding: 20px;
		margin: 10px;
		width: 280px; /* carré */
		height: 280px; /* carré */
		flex: 0 0 auto;
		display: flex;
		flex-direction: column;
		justify-content: center;
		transition: transform 0.3s, box-shadow 0.3s;
	}
	.testimonial-item:hover {
		transform: translateY(-5px);
		box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 4px 8px rgba(0, 0, 0, 0.12);
	}
	.testimonial-item img {
		border-radius: 50%;
		width: 80px;
		height: 80px;
		object-fit: cover;
		margin-bottom: 15px;
	}
	.testimonial-item h5 {
		margin: 10px 0 5px;
		font-size: 18px;
		color: #333;
	}
	.testimonial-item p {
		color: #777;
		margin-bottom: 10px;
	}
	.testimonial-item p:last-child {
		color: #333;
		font-style: italic;
	}
	.comment-form-wrapper {
    margin-top: 40px;
    display: flex;
    justify-content: center;
}

#comment-form {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
    padding: 10px;
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 600px;
}

#comment-form input[type="text"] {
    width: 35%;
    padding: 10px;
    margin-right: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s;
}

#comment-form input[type="text"]:focus {
    border-color: #3b5d50;
    outline: none;
}

#comment-form button {
    padding: 10px 20px;
    background-color: #3b5d50;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

#comment-form button:hover {
    background-color: #2d4a3e;
}

.logo img {
            width: 35px; /* Ajustez cette valeur selon vos besoins */
            height: auto; /* Maintient le ratio d'aspect de l'image */
        }
</style>
</head>
<body>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="{{ url('welcome') }}"><img src="../assets/img/logo-ct-dark.png" alt=""/></a>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="{{ url('welcome') }}"><span data-hover="Home">home</span></a></li>
				<li><a href="#about" class="scroll"><span data-hover="about">about</span></a></li>
				<li><a href="#work" class="scroll"><span data-hover="Formation"><span>Formation</span></a></li>
				<li><a href="#services" class="scroll"><span data-hover="Temoingnage">Temoingnage</span></a></li>
				<li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
				<li><a class="nav-link" href="{{ url('login') }}"><img src="../assets/img/imagesHome/user.svg"></a></li>
				</nav> 
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Welcome to StarAgri,</h1> 
				   		 		<h2>Empowering<span>Agriculture Through Technology</span></h2>
				   		 		
				   		 		</div>
								
									
				   		 </div>
					</article>
				   
				 </div>
				
            </div>
            <script src="../assets/js/jsHome/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
	<div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<div class="about-header">
			<h3>about</h3>
			<div class="about-imag">
			<img src="../assets/img/imagesHome/pic-9.jpg" alt=""/>
			</div>
			<div class="about-text">
					<p> Welcome to StarAgri, your revolutionary agricultural dashboard designed to elevate modern farming 
						to new heights. We empower farmers with essential information and intelligent insights, transforming
						 the way you navigate today's dynamic agricultural landscape. Our cutting-edge platform is dedicated 
						 to helping you make informed decisions, optimize operations, and achieve sustainable growth,
						  all through the seamless integration of advanced technology and real-time data.</p>

						<p>At StarAgri, we understand the unique challenges you face in the field. That’s why we’ve crafted a tool
						 that not only provides you with up-to-the-minute weather forecasts and precise temperature readings but
						  also harnesses the power of AI to offer actionable insights tailored to your specific needs. Whether it's
						   determining the best planting times, optimizing irrigation schedules, or adopting sustainable farming 
						   practices, StarAgri is here to guide you every step of the way..</p>
			</div>
			
		<div class="clearfix"></div>
	</div>
	
	</div>
	</div>
	<!-- about-section-ends -->
	<div class="works-section" id="work" id="work">
	   <div class="works-header">
			<h3>Formation</h3>
			<p> Expert-Led Training for Modern Farmers
				At StarAgri, we believe that knowledge is as vital to farming as the soil itself. That's why we've curated a comprehensive training 
				section filled with expert-led videos designed to equip you with the skills and knowledge needed to excel in modern agriculture.
				
				Our training videos cover a wide range of topics tailored to address the real-world challenges you face every day. From mastering 
				the basics of sustainable farming practices to leveraging advanced technologies and understanding detailed weather data, our content 
				is designed to help you grow smarter and more efficiently.</p>
		</div>
		<div class="portfolio-section-bottom-row" id="portfolio">
			<div class="container">
				
						<script src="../assets/js/jsHome/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<link rel="stylesheet" href="../assets/css/cssHome/swipebox.css">
							<script src="../assets/js/jsHome/jquery.swipebox.min.js"></script> 
								<script type="text/javascript">
									jQuery(function($) {
										$(".swipebox").swipebox();
									});
								</script>
							<!-- Portfolio Ends Here -->
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Ausiness</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sustainability</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Technology</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Weather</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li>
									  <div class="clearfix"></div>
								  </ul>	
								<div id="portfoliolist">
									<div class="resp-tabs-container">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/9.mp4" class="swipebox"  title="Image Title">
															  <iframe   width="100%" height="223" src="../assets/img/VideosHome/9.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
																
															</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/2.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/2.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/3.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/3.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/4.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/4.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/5.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/5.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/6.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/6.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/7.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/7.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/VideosHome/8.mp4" class="swipebox"  title="Image Title">
															<iframe   width="100%" height="223" src="../assets/img/VideosHome/8.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  alt=""></iframe>
															  
														  </a>
													</div>
													<div class="clearfix"></div>	
											</div>
																				 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-5.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-5.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-6.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-6.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-7.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-7.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-8.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-8.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
													<div class="clearfix"></div>	
											</div>	 	        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-3.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-3.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-4.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-4.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>		        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="../assets/img/imagesHome/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="../assets/img/imagesHome/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>										
									</div>	
								</div>
							</div>
						</div>				
 
				
			</div>
		</div>
	</div>
	<!-- portfolio-section-ends -->
	<div class="services-section" id="services">
		<div class="container"> 
		<div class="services-header">
			<h3>Temoingnage</h3>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
		</div>
		<div class="owl-carousel testimonial-carousel position-relative">
			<div class="testimonial-item bg-white text-center border p-4">
				<img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="../assets/img/imagesHome/testimonial-4.jpg" style="width: 80px; height: 80px;">
				<h5 class="mb-0">Marie-Claire</h5>
				<p>New York, USA</p>
				<p class="mb-0"> "The detailed statistics about my city are very useful for monitoring the evolution of my crops and making informed decisions."</p>
			</div>
			<div class="testimonial-item bg-white text-center border p-4">
				<img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="../assets/img/imagesHome/testimonial-1.jpg" style="width: 80px; height: 80px;">
				<h5 class="mb-0">Pierre</h5>
				<p>Paris,France </p>
				<p class="mt-2 mb-0"> "L'outil de prise de décision basé sur l'IA est un atout majeur. Il m'a aidé à améliorer mes rendements et à optimiser mes ressources."</p>
			</div>
			<div class="testimonial-item bg-white text-center border p-4">
				<img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="../assets/img/imagesHome/testimonial-2.jpg" style="width: 80px; height: 80px;">
				<h5 class="mb-0">Sophie</h5>
				<p>Casablanca, Maroc</p>
				<p class="mt-2 mb-0"> "Les recommandations fournies par l'IA sont très pertinentes et m'ont permis de prendre des décisions plus éclairées pour ma ferme."</p>
			</div>
			<div class="testimonial-item bg-white text-center border p-4">
				<img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="../assets/img/imagesHome/testimonial-3.jpg" style="width: 80px; height: 80px;">
				<h5 class="mb-0">Antoine</h5>
				<p>Brussels, Belgique</p>
				<p class="mt-2 mb-0"> "Je suis très satisfait du support technique. L'équipe est réactive et m'a aidé à résoudre mes problèmes rapidement."
				</p>
			</div>
		</div>
		<div class="comment-form-wrapper">
			<form id="comment-form">
				<input type="text" id="name" name="name" placeholder="Votre nom" required>
				<input type="text" id="comment" name="comment" placeholder="Votre commentaire" required>
				<button type="submit">Ajouter</button>
			</form>
		</div>
			</div>
			

		</div>
			<div class="clearfix"></div>
			
	</div>
	</div>
	</div>
	<!-- services-section-ends -->
</div>
	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3> contact</h3>
				<p>Have questions or need assistance navigating the complexities of modern agriculture? Look no further! Our dedicated team of agricultural experts is here to provide you with personalized support and expert guidance every step of the way.</p
				></div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
				<form>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value=" name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
					</div>
					<div class="col-md-8 contactgrid1">
						<textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
					</div>
					<div class="col-md-4 contactgrid2">
						<input type="submit" value="[send message]">
					</div>
				   <div class="clearfix"></div>
				</form>
			</div>
			<div class="footer-bottom">

					<p>&copy; 2024 StarAgri. Tous droits réservés | Conçu avec passion pour l'agriculture by MSA<a href="http://templatestock.com" target="target_blank"></a></p>

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>
