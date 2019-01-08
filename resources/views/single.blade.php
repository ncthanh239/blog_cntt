<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Newspoint HTML Template | Blog Single</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
      <!--Header Top-->
      <div class="header-top">
        <div class="auto-container">
          <div class="clearfix">
            <!--Top Left-->
            <div class="top-left col-md-4 col-sm-12 col-xs-12">
              <ul class="clearfix">
                <li>Chia sẻ kiến thức CNTT cùng Uneti Blog IT</li>
              </ul>
            </div>
            <!--Top Right-->
            <div class="top-right pull-right col-md-8 col-sm-12 col-xs-12">
             
              <ul class="social-nav">
                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--Header-Upper-->
      <div class="header-upper">
        <div class="auto-container">
          <div class="logo-outer">
            <div class="logo"><a href="index.html"><span class="letter">Blog IT Uneti</span></a></div>
          </div>
        </div>
      </div>
      <!--End Header Upper-->

      <!--Header Lower-->
      <div class="header-lower">
        <div class="auto-container">
          <div class="nav-outer clearfix">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-header">
                <!-- Toggle Button -->      
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse clearfix" id="bs-example-navbar-collapse-1">
                <ul class="navigation clearfix">
                  <li class="current dropdown"><a href="#">Home</a>
                    <ul>
                      <li><a href="index-1.html">Home 01</a></li>
                      <li><a href="index-2.html">Home 02</a></li>
                      <li><a href="index-3.html">Home 03</a></li>
                      <li class="dropdown"><a href="#">Header Styles</a>
                        <ul>
                          <li><a href="index-1.html">Header 01</a></li>
                          <li><a href="index-2.html">Header 02</a></li>
                          <li><a href="index-3.html">Header 03</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">About Us</a>
                    <ul>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="about-2.html">About Us Two</a></li>
                      <li><a href="faq.html">Faq</a></li>
                      <li><a href="error-page.html">Error Page</a></li>
                      <li><a href="comming-soon.html">Comming Soon</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Projects</a>
                    <ul>
                      <li><a href="project-threecolumn.html">Projects 3 Column</a></li>
                      <li><a href="project-fourcolumn.html">Projects 4 Column</a></li>
                      <li><a href="project-fullscreen.html">Projects Full Screen</a></li>
                      <li><a href="project-detail.html">Projects Details</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Blog</a>
                    <ul>
                      <li><a href="blog.html">Our blog</a></li>
                      <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
            </nav>
            <!-- Main Menu End-->
            <div class="outer-box">

              <!--Cart Box-->
              <div class="cart-box">
                <div class="dropdown">
                  <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-shopping-cart"></span></button>
                  <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                    <div class="cart-product">
                      <div class="inner">
                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                        <div class="image"><img src="{{asset('images/resource/post-thumb-3.jpg')}}" alt="" /></div>
                        <h3><a href="shop-single.html">Woolen T-shirt</a></h3>
                        <div class="quantity-text">Quantity 1</div>
                        <div class="price">$99.00</div>
                      </div>
                    </div>
                    <div class="cart-product">
                      <div class="inner">
                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                        <div class="image"><img src="{{asset('images/resource/post-thumb-4.jpg')}}" alt="" /></div>
                        <h3><a href="shop-single.html">Woolen T-shirt</a></h3>
                        <div class="quantity-text">Quantity 1</div>
                        <div class="price">$99.00</div>
                      </div>
                    </div>
                    <div class="cart-total">Sub Total: <span>$198</span></div>
                    <ul class="btns-boxed">
                      <li><a href="#">View Cart</a></li>
                      <li><a href="#">CheckOut</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!--Search Box-->
              <div class="search-box-outer">
                <div class="dropdown">
                  <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                  <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                    <li class="panel-outer">
                      <div class="form-container">
                        <form method="post" action="blog.html">
                          <div class="form-group">
                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                          </div>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

            <!-- Hidden Nav Toggler -->
            <div class="nav-toggler">
             <button class="hidden-bar-opener"><span class="icon qb-menu1"></span></button>
           </div>

         </div>

       </div>
     </div>
     <!--End Header Lower-->

     <!--Sticky Header-->
     <div class="sticky-header">
      <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
          <a href="{{asset('')}}" title=""><span class="letter">Blog IT Uneti</span></a>
        </div>

        <!--Right Col-->
        <div class="right-col pull-right">
          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-header">
              <!-- Toggle Button -->      
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="navbar-collapse collapse clearfix">
              <ul class="navigation clearfix">
                <li class="current dropdown"><a href="#">Home</a>
                  <ul>
                    <li><a href="index-1.html">Home 01</a></li>
                    <li><a href="index-2.html">Home 02</a></li>
                    <li><a href="index-3.html">Home 03</a></li>
                    <li class="dropdown"><a href="#">Header Styles</a>
                      <ul>
                        <li><a href="index-1.html">Header 01</a></li>
                        <li><a href="index-2.html">Header 02</a></li>
                        <li><a href="index-3.html">Header 03</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">About Us</a>
                  <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="about-2.html">About Us Two</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="error-page.html">Error Page</a></li>
                    <li><a href="comming-soon.html">Comming Soon</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">Projects</a>
                  <ul>
                    <li><a href="project-threecolumn.html">Projects 3 Column</a></li>
                    <li><a href="project-fourcolumn.html">Projects 4 Column</a></li>
                    <li><a href="project-fullscreen.html">Projects Full Screen</a></li>
                    <li><a href="project-detail.html">Projects Details</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">Blog</a>
                  <ul>
                    <li><a href="blog.html">Our blog</a></li>
                    <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">Shop</a>
                  <ul>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="shop-single.html">Shop Details</a></li>
                    <li><a href="shoping-cart.html">Cart Page</a></li>
                    <li><a href="checkout.html">Checkout Page</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </nav><!-- Main Menu End-->
        </div>

      </div>
    </div>
    <!--End Sticky Header-->
    
  </header>
    <!--End Header Style Two -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">
        
        <div class="hidden-bar-closer">
            <button><span class="qb-close-button"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="logo">
            	<a href="index.html"><span class="letter">n</span><img src="images/mobile-logo.png" alt="" /></a>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!--navigation-->
                <ul class="navigation clearfix">
                    <li class="dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index-1.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                            <li><a href="index-3.html">Home 03</a></li>
                            <li class="dropdown"><a href="#">Header Styles</a>
                                <ul>
                                    <li><a href="index-1.html">Header 01</a></li>
                                    <li><a href="index-2.html">Header 02</a></li>
                                    <li><a href="index-3.html">Header 03</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">About Us</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about-2.html">About Us Two</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="error-page.html">Error Page</a></li>
                            <li><a href="comming-soon.html">Comming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Projects</a>
                        <ul>
                            <li><a href="project-threecolumn.html">Projects 3 Column</a></li>
                            <li><a href="project-fourcolumn.html">Projects 4 Column</a></li>
                            <li><a href="project-fullscreen.html">Projects Full Screen</a></li>
                            <li><a href="project-detail.html">Projects Details</a></li>
                        </ul>
                    </li>
                    <li class="current dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Our blog</a></li>
                            <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-single.html">Shop Details</a></li>
                            <li><a href="shoping-cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- /.Side-menu -->
            
            <!--Options Box-->
            <div class="options-box">
            	<!--Sidebar Search-->
                <div class="sidebar-search">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="text" value="" placeholder="Search ..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
                
                <!--Mobile Cart-->
                <div class="mobile-cart">
                	<a href="shop-single.html" class="clearfix">
                    	<div class="pull-left">
                        	<div class="text">0 items 0.00$</div>
                        </div>
                        <div class="pull-right">
                        	<span class="icon fa fa-shopping-cart"></span>
                        </div>
                    </a>
                </div>
                
                <!--Language Dropdown-->
                <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"> English <span class="icon fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Arabic</a></li>
                        <li><a href="#">Hindi</a></li>
                    </ul>
                </div>
                
                <!--Social Links-->
                <ul class="social-links clearfix">
                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>                    
                </ul>
                
            </div>
            
        </div><!-- / Hidden Bar Wrapper -->
        
    </section>
    <!-- End / Hidden Bar -->
    
    <!--Blog Single Slider-->
    <div class="blog-single-slider grey-bg">
    	<div class="auto-container">
            <div class="single-item-carousel owl-carousel owl-theme">
            
                <div class="slide">
                    <div class="video-box">
                        <figure class="image">
                            <img src="{{asset('images/main-slider/image-2.jpg')}}" alt="">
                        </figure>
                       
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <!--End Blog Single Slider-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="content">
                    	<div class="blog-single">
                        	<div class="inner-box">
                            	<div class="upper-box">
                                    <ul class="breadcrumb-bar">
                                        <li><a href="#">Home</a></li>
                                        <li>Featured</li>
                                        <li>Movies: Midnight Special delivers a new short trailer</li>
                                    </ul>
                                    <ul class="tag-title">
                                        <li>Featured</li>
                                        <li>Travel</li>
                                    </ul>
                                    <h2>{{$aaa['title']}}</h2>
                                    <ul class="post-meta">
                                        <li><span class="icon qb-clock"></span>March 16, 2017</li>
                                        <li><span class="icon qb-user2"></span>by Noor</li>
                                        <li><span class="icon fa fa-comment-o"></span>3 comments</li>
                                        <li><span class="icon qb-eye"></span>1524 Views</li>
                                    </ul>
                                    <ul class="social-icon-one alternate">
                                        <li class="share">Share:</li>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li class="g_plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                        <li class="pinteret"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                                <div class="text">
                                	<p>{{$aaa['description']}}</p>
                                    <div class="row clearfix">
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                        	<div class="image">
                                            	<img src="{{asset(\Storage::url($aaa['img']))}}" alt="" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <p>{!!$aaa['content']!!}</p>
                                    <div class="row clearfix">
                        
                                        {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                                        	<div class="image">
                                            	<img src="images/resource/image-2.jpg" alt="" />
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <!--post-share-options-->
                                <div class="post-share-options">
                                    <div class="tags clearfix"><a href="#">Design</a> <a href="#">Fashion</a> <a href="#">Money</a></div>
                                </div>
                                
                                <!--New Article-->
                                <ul class="new-article clearfix">
                                	<li><a href="#"><span class="fa fa-angle-left"></span> &ensp; &ensp; &ensp; &ensp; Previous Article</a></li>
                                    <li><a href="#">Next Article &ensp; &ensp; &ensp; &ensp; <span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div>
                            
                           	<!--Author Box-->
                            <div class="author-box">
                                <div class="author-comment">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/author-1.jpg" alt="" /></div>
                                        <h4>Sandra Mavic</h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam penatibus et magnis .</div>
                                        <ul class="social-icon-two">
                                            <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Related Posts-->
                            <div class="related-posts">
                            	<div class="sec-title">
                                	<h2>Related Articles</h2>
                                </div>
                                <div class="related-item-carousel owl-carousel owl-theme">
                                	
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                <div class="category"><a href="#">Travel</a></div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">Elon Musk's Hyperloop vision races toward</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 03, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                <div class="category"><a href="#">Sports</a></div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">A modern day security strategy</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 04, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                <div class="category">photo</div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">Fix an Exchange Rate today</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 04, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-40.jpg" alt="" /></a>
                                                <div class="category"><a href="#">Travel</a></div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">Elon Musk's Hyperloop vision races</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 03, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-41.jpg" alt="" /></a>
                                                <div class="category"><a href="#">Sports</a></div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">A modern day security strategy</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 04, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--News Block Two-->
                                    <div class="news-block-two small-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="#"><img src="images/resource/news-42.jpg" alt="" /></a>
                                                <div class="category">photo</div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="#">Fix an Exchange Rate now with</a></h3>
                                                <ul class="post-meta">
                                                    <li><span class="icon fa fa-clock-o"></span>April 04, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Comments Area-->
                            <div class="comments-area">
                                <div class="sec-title"><h2>2 Comments</h2></div>
                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info">Sandra Mavic</div>
                                            <div class="post-date">March 03, 2017</div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qam penatibus et magnis .</div>
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Comment Box-->
                                <div class="comment-box reply-comment">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info">George Belly</div>
                                            <div class="post-date">March 03, 2017</div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qam penatibus et magnis .</div>
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Comment Form -->
                            <div class="comment-form">
                                    
                                <div class="sec-title"><h2>Leave a comment</h2></div>
                                <!--Comment Form-->
                                <form method="post" action="blog.html">
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name ..." required>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email ..." required>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="website" placeholder="Website ..." required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Message ..."></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn" type="submit" name="submit-form">Submit Comment</button>
                                        </div>
                                        
                                    </div>
                                </form>
                                    
                            </div>
                            <!--End Comment Form -->
                            
                        </div>
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar right-sidebar">
					
                    	<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        
                        <!--Social Widget-->
                        <div class="sidebar-widget sidebar-social-widget">
                            <div class="sidebar-title">
                                <h2>Follow Us</h2>
                            </div>
                            <ul class="social-icon-one alternate">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="g_plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li class="linkedin"><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                <li class="pinteret"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li class="android"><a href="#"><span class="fa fa-android"></span></a></li>
                                <li class="instagram"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
                            </ul>
						</div>
                    	<!--End Social Widget-->
                    	
                        <!--Adds Widget-->
                        <div class="sidebar-widget sidebar-adds-widget">
                        	<div class="adds-block" style="background-image:url(images/resource/add-image.jpg);">
                            	<div class="inner-box">
                                	<div class="text">Advertisement <span> 340 x 283</span></div>
                                    <a href="#" class="theme-btn btn-style-two">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                        <!--Ends Adds Widget-->
                        
                    	<!--News Post Widget-->
                        <div class="sidebar-widget posts-widget">
                        	
                            <!--Product widget Tabs-->
                            <div class="product-widget-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">
                                
                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-popular" class="tab-btn active-btn">Popular</li>
                                        <li data-tab="#prod-recent" class="tab-btn">Recent</li>
                                        <li data-tab="#prod-comment" class="tab-btn">Comments</li>
                                    </ul>
                                    
                                    <!--Tabs Container-->
                                    <div class="tabs-content">
                                        
                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-popular">
                                            <div class="content">
                                                @foreach($data2 as $value)
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href=""><img src="{{asset(\Storage::url($value['img']->first()['link_img']))}}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="{{asset('')}}{{$value['slug']}}">{{$value['title']}}</a></div>
                                                    <div class="post-info">{{$value['updated_at']}}</div>
                                                </article>
                                                @endforeach
                                                
                                                
                                            </div>
                                        </div>
                                        
                                        <!--Tab-->
                                        <div class="tab" id="prod-recent">
                    						<div class="content">
                                                
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">the Poor Man use cycling for is Business improvement</a></div>
                                                    <div class="post-info">April 02, 2017</div>
                                                </article>
                                                
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">American Black Film Festival New projects from film TV</a></div>
                                                    <div class="post-info">April 03, 2017</div>
                                                </article>
                                                
                                            </div>
                                        </div>
                                        
                                        <!--Tab-->
                                        <div class="tab" id="prod-comment">
                                            <div class="content">
                                                
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">American Black Film Festival New projects from film TV</a></div>
                                                    <div class="post-info">April 03, 2017</div>
                                                </article>
                                                
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Amy Schumer swaps lives with Anna Wintour</a></div>
                                                    <div class="post-info">April 04, 2017</div>
                                                </article>
                                                
                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="blog-single.html">Historical Placed & his photoshopped</a></div>
                                                    <div class="post-info">April 01, 2017</div>
                                                </article>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!--End Product Info Tabs-->
                            
                        </div>
                        <!--End Post Widget-->
                        
                        <!--Category Widget-->
                        
                        <!--End Category Widget-->
                        
                    </aside>
               	</div>
                
            </div>
            
        </div>
    </div>
    <!--End Sidebar Page Container-->
    
    <!--Main Footer-->
    <footer class="main-footer">
    	
        <div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Widget Column-->
                    <div class="widget-column col-md-4 col-sm-6 col-xs-12">
                    	<div class="footer-widget tweets-widget">
                        	<h2>Tweeter Feeds</h2>
                            <!--Tweet-->
                            <div class="tweet">
                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                <div class="text">
                                    <a href="#">@ Barished all share them a man said inspet.</a>
                                </div>
                                <span class="days">about 2 days ago</span>
                            </div>
                            <!--Tweet-->
                            <div class="tweet">
                                <div class="icon"><span class="fa fa-twitter"></span></div>
                                <div class="text">
                                    <a href="#">@ Well wors all share them a women said inspet.</a>
                                </div>
                                <span class="days">about 8 weeks ago</span>
                            </div>
                        </div>
                    </div>
                    
                    <!--Widget Column / Instagram Widget-->
                    <div class="widget-column col-md-4 col-sm-6 col-xs-12">
                    	<div class="footer-widget isntagram-widget">
                        	<h2>Instagram Photos</h2>
                            <div class="clearfix">
                            	<figure class="image"><a href="images/resource/news-1.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-2.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-3.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-4.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-1.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-2.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-6.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-3.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-7.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/news-4.jpg" class="lightbox-image" data-fancybox="images" data-caption=""><img class="wow fadeIn" data-wow-delay="0ms" data-wow-duration="2500ms" src="images/resource/instagram-8.jpg" alt=""></a></figure>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!--Widget Column / Newsletter Widget-->
                    <div class="widget-column col-md-4 col-sm-6 col-xs-12">
                    	<div class="footer-widget newsletter-widget">
                        	<h2>Newsletter</h2>
                            <div class="newsletter-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<!--Column-->
                    <div class="column col-md-3 col-sm-12 col-xs-12">
                    	<div class="logo">
                        	<a href="index.html"><span class="letter">n</span><img src="images/logo-2.png" alt="" /></a>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-md-6 col-sm-12 col-xs-12">
                    	<div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qua. Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor.</div>
                    </div>
                    <!--Column-->
                    <div class="column col-md-3 col-sm-12 col-xs-12">
                    	<ul class="social-icon-one">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="g_plus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li class="pinteret"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                            <li class="android"><a href="#"><span class="fa fa-android"></span></a></li>
                            <li class="dribbble"><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li class="rss"><a href="#"><span class="fa fa-rss"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Copyright Section-->
            <div class="copyright-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <ul class="footer-nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright">&copy; Copyright Noor_tech. All rights reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
	
    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>
</html>
