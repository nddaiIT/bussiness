@extends('shops.layouts.master')
@section('content')
<!-- Slider section --> 
<div class="content offset-top-0" id="slider">
<!--
	#################################
	- THEMEPUNCH BANNER -
	#################################
	--> 
<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
<h2 class="hidden">Slider Section</h2>
<div class="tp-banner-container">
	<div class="tp-banner">
		<ul>
				
			<!-- SLIDE -1 -->
			<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
				<!-- MAIN IMAGE --> 
				<img src="images/slides/slide-1.jpg"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" > 
				<!-- LAYERS --> 
				<!-- TEXT -->
				<div class="tp-caption lfl stb" 
					data-x="205"              
					data-y="center"    
					data-voffset="60" 
					data-speed="600" 
					data-start="900" 
					data-easing="Power4.easeOut" 
					data-endeasing="Power4.easeIn" 
					style="z-index: 2;">
					<div class="tp-caption1--wd-1">Spring -Summer 2016</div>
					<div class="tp-caption1--wd-2">Save 20% on</div>
					<div class="tp-caption1--wd-3">new arrivals </div>
					<a href="listing.html" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a>
				</div>
			</li>
			<!-- /SLIDE -1 -->
			<!-- SLIDE 2  -->            
			<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
				<!-- MAIN IMAGE --> 
				<img src="images/slides/slide-2.jpg"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
				<!-- LAYERS -->
				<!-- TEXT -->
				<div class="tp-caption lfr stb" 
					data-x="right"              
					data-y="center"    
					data-voffset="-5"
					data-hoffset="-205" 
					data-speed="600" 
					data-start="900" 
					data-easing="Power4.easeOut" 
					data-endeasing="Power4.easeIn" 
					style="z-index: 2;">
					<div class="tp-caption2--wd-1">A great selection of superb brands </div>
					<div class="tp-caption2--wd-2">50% off</div>
					<div class="tp-caption2--wd-3">on all clothes</div>
					<a href="listing.html" class="link-button button--border-thick pull-right" data-text="Shop now!">Shop now!</a>
				</div>							
			</li>
			<!-- /SLIDE 2  -->						
			<!-- SLIDE - 3 -->
			<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							<img src="images/slides/04/intro_img_03.jpg"  alt="slide3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-fade fadeout fullscreenvideo"
							data-x="0"
							data-y="0"
							data-speed="1000"
							data-start="1100"
							data-easing="Power4.easeOut"
							data-endspeed="1500"
							data-endeasing="Power4.easeIn"
							data-autoplay="true"
							data-autoplayonlyfirsttime="false"
							data-nextslideatend="true"
							data-forceCover="1"
							data-dottedoverlay="twoxtwo"
							data-aspectratio="16:9"
							data-forcerewind="on"
							style="z-index: 2">


							<video class="video-js vjs-default-skin" preload="none" 
								poster='images/slides/video/video_img.jpg' data-setup="{}">
								<source src='images/slides/video/explore.mp4' type='video/mp4' />
								<source src='images/slides/video/explore.webm' type='video/webm' />
								<source src='images/slides/video/explore.ogv' type='video/ogg'  />
							</video>

						</div>
						<!-- TEXT -->
					<div class="tp-caption lfb stb" 
					data-x="center"              
					data-y="center"    
					data-voffset="0"
					data-hoffset="0" 
					data-speed="600" 
					data-start="900" 
					data-easing="Power4.easeOut" 
					data-endeasing="Power4.easeIn" 
					style="z-index: 2;">
					<div class="tp-caption3--wd-1 color-white">Spring -Summer 2016</div>
					<div class="tp-caption3--wd-2">Season sale!</div>
					<div class="tp-caption3--wd-3 color-white">Get huge</div>
					<div class="tp-caption3--wd-3 color-white">savings!</div>
					<div class="text-center"><a href="listing.html" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a></div>
				</div>	
			
			</li>
			<!-- /SLIDE - 3 -->	
					  		
			
			
		</ul>
	</div>
</div>
</div>
<!-- END REVOLUTION SLIDER --> 
<!-- CONTENT section -->
<div id="pageContent">
<!-- category section -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="category-carousel">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<a href="listing.html" class="banner zoom-in">
						<span class="figure">
							<img src="images/custom/category-3.jpg" alt=""/>
							<span class="figcaption">
								<span class="block-table">
									<span class="block-table-cell">
										<span class="banner__title size5">women’s</span>
										<span class="btn btn--ys btn--xl">Shop now!</span>
									</span>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<a href="listing.html" class="banner zoom-in">
					<span class="figure">
						<img src="images/custom/category-2.jpg" alt=""/>
						<span class="figcaption">
							<span class="block-table">
								<span class="block-table-cell">
									<span class="banner__title size5">aCCESSORIES</span>
									<span class="btn btn--ys btn--xl">Shop now!</span>
								</span>
							</span>
						</span>
					</span>
					</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<a href="listing.html" class="banner zoom-in">
					<span class="figure">
						<img src="images/custom/category-1.jpg" alt=""/>
						<span class="figcaption">
							<span class="block-table">
								<span class="block-table-cell">
									<span class="banner__title size5">men’s</span>
									<span class="btn btn--ys btn--xl">Shop now!</span>
								</span>
							</span>
						</span>
					</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /category section -->
<!-- featured products -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xl-8">
				<!-- title -->
				<div class="title-box">
					<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
				</div>
				<!-- /title -->
				<div class="product-listing carousel-products-mobile row">
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<!-- product image carousel -->
									<div class="product__inside__carousel slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active"> <a href="product.html"><img src="images/product/product-1.jpg" alt=""></a> </div>
											<div class="item"> <a href="product.html"><img src="images/product/product-2.jpg" alt=""></a> </div>
											<div class="item"> <a href="product.html"><img src="images/product/product-3.jpg" alt=""></a> </div>
										</div>
										<!-- Controls --> 
										<a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
									</div>
									<!-- /product image carousel -->  
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
									<!-- countdown_box -->
									<div class="countdown_box">
										<div class="countdown_inner">
											<div id="countdown1"></div>
										</div>
									</div>
									<!-- /countdown_box --> 
								</div>
								<!-- /product image --> 
								<!-- label news -->
								<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
								<!-- /label news --> 
								<!-- label sale -->
								<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
									-20%</span> 
								</div>
								<!-- /label sale --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<!-- /product price --> 
								<!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<ul class="options-swatch options-swatch--color">
											<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png"  alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png"  alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/red.png"  alt=""/></span></a></li>
										</ul>
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating -->
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-2.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$46.00</div>
								<!-- /product price --> 
								<!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-3.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$143.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-4.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html"> Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$587.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<ul class="options-swatch options-swatch--color">
											<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png"  alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png"  alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/red.png"  alt=""/></span></a></li>
										</ul>
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> <!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-5.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$54.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> <!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-6.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$66.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> <!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom sold-out">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-7.jpg" alt=""> </a> 
									<!-- label sold-out -->
									<div class="product__label--sold-out"> <span>sold<br>
										out</span> 
									</div>
									<!-- /label sold-out --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$73.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> <!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
						<!-- product -->
						<div class="product product--zoom">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-8.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name -->                 <!-- product description --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
								<!-- /product description -->                 <!-- product price -->
								<div class="product__inside__price price-box">$73.00</div>
								<!-- /product price -->                 <!-- product review --> 
								<!-- visible only in row-view mode -->
								<div class="product__inside__review row-mode-visible">
									<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
								</div>
								<!-- /product review --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> <!-- product rating -->
									<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
				</div>
			</div>
			<!-- lookbook -->
			<div class="col-xl-4 visible-xl">
				<!-- title -->
				<div class="title-box">
					<h2 class="text-left text-uppercase title-under pull-left">LOOKBOOK</h2>
				</div>
				<!-- /title -->
				
				<a class="link-img-hover" href="lookbook.html"><img src="images/custom/lookbook.jpg" class="img-responsive" alt=""></a>
				
			</div>
			<!-- /lookbook -->
		</div>
	</div>
</div>
<!-- banners -->
<div class="content fullwidth indent-col-none">
	<div class="container">
		<div class="row">
			<div class="banner-carousel">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<a href="listing.html" class="banner zoom-in">
					<span class="figure">
						<img src="images/custom/banner-01.jpg" alt=""/>
						<span class="figcaption">
							<span class="block-table">
								<span class="block-table-cell">
									<span class="banner__title size3">Hats</span>
									<span class="text">GET UP TO</span>
									<span class="text size3">20% OFF</span>
								</span>
							</span>
						</span>
					</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<a href="listing.html" class="banner zoom-in">
						<span class="figure">
							<img src="images/custom/banner-02.jpg" alt=""/>
							<span class="figcaption">
								<span class="block-table">
									<span class="block-table-cell">
										<span class="banner__title size3-1">15% OFF</span>
										<span class="text size1"><em>on brand-new models</em></span>
										<span class="btn btn--ys btn--xl">Shop now!</span>
									</span>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<a href="listing.html" class="banner zoom-in">
						<span class="figure">
							<img src="images/custom/banner-03.jpg" alt=""/>
							<span class="figcaption">
								<span class="block-table">
									<span class="block-table-cell">
										<span class="banner__title size4">New<br> collection</span>
										<span class="text size2">OF FASHION CLOTHES</span>
										<span class="btn btn--ys btn--xl offset-top">Shop now!</span>
									</span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /banners -->
<!-- news & sale products -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-xl-4">
				<!-- title -->
				<div class="title-with-button">
					<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
					<h2 class="text-left text-uppercase title-under pull-left">New</h2>
				</div>
				<!-- /title --> 
				<!-- carousel -->
				<div class="carousel-products row" id="carouselNew">
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-9.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label news -->
								<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
								<!-- /label news --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$46.00</div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-10.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label news -->
								<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
								<!-- /label news --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$133.00</div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-9.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label news -->
								<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
								<!-- /label news --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$46.00</div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-10.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label news -->
								<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
								<!-- /label news --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$133.00</div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<ul class="options-swatch options-swatch--color">
											<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png" width="10" height="10" alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png" width="10" height="10" alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/red.png" width="10" height="10" alt=""/></span></a></li>
										</ul>
										<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
				</div>
				<!-- /carousel --> 
			</div>
			<!-- promo -->
			<div class="col-xl-4 visible-xl">
				<!-- title -->
				<div class="title-box">
					<h2 class="text-left text-uppercase title-under pull-left">PROMOS</h2>
				</div>
				<!-- /title -->
				<div class="text-center promos">
					
					<div class="promos__image">
						<a href="lookbook.html" class="link-img-hover">
						<img src="images/custom/promos.jpg" class="img-responsive" alt="">
						<span class="promos__label">-20%</span>
						</a>
					</div>
					<h2><a href="lookbook.html">Mauris lacinia lectus</a></h2>
					Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.
				</div>
			</div>
			<!-- /promo -->						

			<div class="col-sm-12 col-md-6 col-xl-4">
				<div class="divider--lg visible-sm visible-xs"></div>
				<!-- title -->
				<div class="title-with-button">
					<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
					<h2 class="text-left text-uppercase title-under pull-left">On Sale</h2>
				</div>
				<!-- /title --> 
				<!-- carousel -->
				<div class="carousel-products row" id="carouselSale">
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-11.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label sale -->
								<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
									-20%</span> 
								</div>
								<!-- /label sale --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<ul class="options-swatch options-swatch--color">
											<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png" width="10" height="10" alt=""/></span></a></li>
											<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png" width="10" height="10" alt=""/></span></a></li>
										</ul>
										<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-12.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label sale -->
								<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
									-20%</span> 
								</div>
								<!-- /label sale --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$77.00<span class="price-box__old">$97.00</span></div>
								<!-- /product price --> 
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-11.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label sale -->
								<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
									-20%</span> 
								</div>
								<!-- /label sale --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
								<!-- /product price -->
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
					<div class="col-lg-3">
						<!-- product -->
						<div class="product">
							<div class="product__inside">
								<!-- product image -->
								<div class="product__inside__image">
									<a href="product.html"> <img src="images/product/product-12.jpg" alt=""> </a> 
									<!-- quick-view --> 
									<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
									<!-- /quick-view --> 
								</div>
								<!-- /product image --> 
								<!-- label sale -->
								<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
									-20%</span> 
								</div>
								<!-- /label sale --> 
								<!-- product name -->
								<div class="product__inside__name">
									<h2><a href="product.html">Mauris lacinia lectus</a></h2>
								</div>
								<!-- /product name --> 
								<!-- product price -->
								<div class="product__inside__price price-box">$77.00<span class="price-box__old">$97.00</span></div>
								<!-- /product price -->
								<div class="product__inside__hover">
									<!-- product info -->
									<div class="product__inside__info">
										<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
										<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
										<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
										<ul class="product__inside__info__link hidden-xs">
											<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
										</ul>
									</div>
									<!-- /product info --> 
									<!-- product rating -->
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									<!-- /product rating --> 
								</div>
							</div>
						</div>
						<!-- /product --> 
					</div>
				</div>
				<!-- /carousel --> 
			</div>
		</div>
	</div>
</div>
<!-- /news & sale products -->
<!-- blog slider -->
<div class="content content-bg-1 fixed-bg">
	<div class="container">				
		<div class="row">
			<h2 class="text-center text-uppercase title-under">testimonials</h2>
			<div class="slider-blog slick-arrow-bottom">
				<!-- slide-->
				<a href="blog-post-right-column.html" class="link-hover-block">
					<div class="slider-blog__item">
						<div class="row">
							<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
								<img src="images/custom/slider-blog-img01.jpg" alt="">
							</div>
							<div class="col-xs-12 col-sm-5 col-xl-4 box-data">
								<h6>Eleanor  <em>&nbsp;-&nbsp;  designer</em></h6>
								<p>
									Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
								</p>
							</div>
						</div>
					</div>
				</a>
				<!-- /slide-->
				<!-- slide-->
				<a href="blog-post-right-column.html" class="link-hover-block">
					<div class="slider-blog__item">
						<div class="row">
							<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
								<img src="images/custom/slider-blog-img02.jpg" alt="">
							</div>
							<div class="col-xs-12 col-sm-5 box-data">
								<h6>Piper  <em>&nbsp;-&nbsp;  designer</em></h6>
								<p>
									Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
								</p>
							</div>
						</div>
					</div>
				</a>
				<!-- /slide-->
				<!-- slide-->
				<a href="blog-post-right-column.html" class="link-hover-block">
					<div class="slider-blog__item">
						<div class="row">
							<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
								<img src="images/custom/slider-blog-img03.jpg" alt="">
							</div>
							<div class="col-xs-12 col-sm-5 box-data">
								<h6>MARK   <em>&nbsp;-&nbsp;  designer</em></h6>
								<p>
									Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
								</p>
							</div>
						</div>
					</div>
				</a>
				<!-- /slide-->
			</div>
		</div>
	</div>
</div>
<!-- /blog slider -->
<!-- recent-posts-carousel -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- title -->
				<div class="title-with-button">
					<div class="carousel-products__button pull-right">
						<span class="btn-prev"></span>
						<span class="btn-next"></span>        
					</div>
					<h2 class="text-center text-uppercase title-under">RECENT POSTS</h2>
				</div>
				<!-- /title -->
				<!-- carousel-new -->
				<div class="carousel-products row" id="postsCarousel">
					<!-- slide-->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
									<span class="figure">
										<img src="images/custom/recent-posts-01.jpg" alt="">
										<span class="figcaption label-top-left">
											<span>
												<b>26</b>
												<em>jun</em>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="recent-post-box__text">
									<h4><a href="blog-post-right-column.html">Mauris lacinia lectus</a></h4>
									<div class="author">by <b>Admin</b></div>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
									</p>
									<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
								</div>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
					<!-- slide -->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
								<span class="figure">
								<img src="images/custom/recent-posts-02.jpg" alt="">
								<span class="figcaption label-top-left">
								<span>
								<b>26</b>
								<em>jun</em>
								</span>
								</span>
								</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="recent-post-box__text">
									<h4><a href="blog-post-right-column.html">Lorem ipsum dolor</a> </h4>
									<div class="author">by <b>Admin</b></div>
									<p>
										Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
									</p>
									<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
								</div>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
					<!-- slide -->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
								<span class="figure">
								<img src="images/custom/recent-posts-03.jpg" alt="">
								<span class="figcaption label-top-left">
								<span>
								<b>26</b>
								<em>jun</em>
								</span>
								</span>
								</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="recent-post-box__text">
									<h4><a href="blog-post-right-column.html">dolore magna aliqua</a></h4>
									<div class="author">by <b>Admin</b></div>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
									</p>
									<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
								</div>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
					<!-- slide-->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
								<span class="figure">
								<img src="images/custom/recent-posts-01.jpg" alt="">
								<span class="figcaption label-top-left">
								<span>
								<b>26</b>
								<em>jun</em>
								</span>
								</span>
								</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="recent-post-box__text">
									<h4><a href="blog-post-right-column.html">Mauris lacinia lectus</a></h4>
									<div class="author">by <b>Admin</b></div>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
									</p>
									<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
								</div>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
					<!-- slide -->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
								<span class="figure">
								<img src="images/custom/recent-posts-02.jpg" alt="">
								<span class="figcaption label-top-left">
								<span>
								<b>26</b>
								<em>jun</em>
								</span>
								</span>
								</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="recent-post-box__text">
									<h4><a href="blog-post-right-column.html">Lorem ipsum dolor</a> </h4>
									<div class="author">by <b>Admin</b></div>
									<p>
										Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
									</p>
									<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
								</div>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
					<!-- slide -->
					<div class="col-sm-3 col-xl-6">
						<!--  -->
						<div class="recent-post-box">
							<div class="col-lg-12 col-xl-6">
								<a href="blog-post-right-column.html">
								<span class="figure">
								<img src="images/custom/recent-posts-03.jpg" alt="">
								<span class="figcaption label-top-left">
								<span>
								<b>26</b>
								<em>jun</em>
								</span>
								</span>
								</span>
								</a>
							</div>
							<div class="col-lg-12 col-xl-6">
								<h4><a href="blog-post-right-column.html">dolore magna aliqua</a></h4>
								<div class="author">by <b>Admin</b></div>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
								</p>
								<a class="link-commet" href="blog-post-right-column.html"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
							</div>
						</div>
						<!-- / -->
					</div>
					<!-- /slide -->
				</div>
				<!-- /carousel-new -->
			</div>
		</div>
	</div>
</div>
<!-- /recent-posts-carousel -->
<!-- brands-carousel -->
<div class="content section-indent-bottom">
	<div class="container">
		<div class="row">
			<div class="brands-carousel">
				<div><a href="#"><img src="images/custom/brand-01.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-02.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-03.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-04.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-05.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-06.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-07.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-08.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-09.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-10.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-01.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-02.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-03.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-04.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-05.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-06.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-07.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-08.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-09.png" alt=""></a></div>
				<div><a href="#"><img src="images/custom/brand-10.png" alt=""></a></div>
			</div>
		</div>
	</div>
</div>
<!-- /brands-carousel -->
<div class="content fullwidth hidden-xs">
	<div class="container">
		<div class="row">
			<div class="instafeed-wrapper">
				<h3 class="title-vertical"><span>INSTAGRAM FEED</span></h3>
				<div id="instafeed" class="instafeed"></div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End CONTENT section -->
@endsection