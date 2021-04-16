<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="discription" content="A New Kind of Digital Agency" />
    <meta name="keywords" content="website design, website developer, professional website, website builder, business website, professional website designer, wordpress website, build my website, web designer, need website, web design, web developer, website designer, hire web designer, website builders, web development, create website, professional website design, build website, website redesign, website development, design website, custom wordpress design, website pricing, website creation, custom website design, single Page Website design, static website, website design consultancy, website design consultant, website page design, Website Design Packages, cheap website design, website design agency, outsource website, creative website design, new website, basic website design, parallax website design, business website design, buy website design, ecommerce website, simple website, one Page Website design, website design beginners, website designing, website cost, clean website design, bespoke website design, mobile website design,  website programmer, website maker, website quote, develop website, cms website design, affordable website design, want website, website design company, website firm, website builder, website creations, website prices, website designs, php website design, website design, b2b website development, website design contract, website design services, start website, website creator, seo website design, make website, css website design, website developers, minimalist website design, website designers, looking website, creating website, website making, dynamic website design, personal website design, get website, website designer near">
    <meta name="author" content="">
    <!-- <title>A New Kind of Digital Agency | Design Crocx</title> -->
    <title>@yield('title')</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/front_assets/images/logo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <meta name="keywords" content="A New Kind of Digital Agency | Design Crocx">
    <meta name="description" content="A New Kind of Digital Agency | Design Crocx">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="">

    <!-- Loading css file -->
    <link href="{{ url('assets/front_assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/front_assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
   <!--  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <script type="text/javascript"> var base_url = "index.html";</script>


</head>
<body>
    <!--  Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = '../www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>
<noscript>
<a href='https://www.clickcease.com/' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
</noscript>
<!--  Clickcease.com tracking-->

<!--<div id="preloader" class="preloader" style="display:none;"><div id="load">
        <div>Loading ...</div>
    </div>
</div>-->

<div id="preloader" style="display:none;">
    <div class="loading">
        <span>Loading...</span>
    </div>
</div>

<!-- PRE LOADER start-->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- PRE LOADER end-->

<!-- Wrapper Start -->

<header>
            <div class="container">
                <div class="col-md-7 col-xs-12 col-sm-7">
                    <nav class="navbar navbar-default">
                       
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="wow rubberBand" data-wow-delay="2000ms" data-wow-duration="1s">
                                    <div class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s">
                                        <a class="navbar-brand" href="{{ url('/') }}">
                                            <img src="{{ url('assets/front_assets/images/logo.png') }}" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                             <li><a href="{{ url('custom-website-design-development') }}">Custom Website Design & Development</a></li>
                                        <li>
                                        <a href="{{ url('ecommerce') }}">Ecommerce</a></li>
                                        <li>
                                        <a href="{{ url('custom-logo-design') }}">Custom Logo Design</a></li>
                                            <li><a href="{{ url('video-animation') }}">Video Animation</a></li>
                                            <li><a href="{{ url('marketing-services') }}">Marketing Services</a></li>
                                            <li><a href="{{ url('creative-content-writing-business-proposals') }}">Creative Content Writing </a></li>
                                            <li><a href="{{ url('branding-stationery') }}">Branding & Stationery</a></li>
                                            <li><a href="{{ url('mobile-applications') }}">Mobile Applications</a></li>
                                            <li><a href="{{ url('web-maintenance-securities') }}">Web Maintenance & Securities</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('packages') }}">Packages</a></li>
                                      <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ url('reviews') }}">Reviews</a></li>
                                    <li><a href="{{ url('faqs') }}">Faqs</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                     
                    </nav>
                </div>
                <div class="col-md-5 col-xs-12 col-sm-5">
                    <div class="topBarList">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +1 (888) 966-5460</a>
                            </li>
                            <li>
                                <a href="javascript:$zopim.livechat.window.toggle();" class="onclickPopuptoggle"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a>
                            </li>
                            <li>
                                <div class="wow rubberBand" data-wow-delay="3000ms" data-wow-duration="1s">
                                    <div class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s">
                                        <a href="{{ url('get-started') }}" class="getStarted tc-image-effect-circle">Let's Get Started</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="btns_wrap">
            <a href="javascript:;" class="chat_wrap sea-bg" onclick="setButtonURL();">
                <span class="icoo sea-bg"><i class="fa fa-comment"></i></span>
                <span>Chat With Us</span>
            </a>
            <a href="tel:+18889665460" class="call_wrap sea-bg">
                <span class="icoo sea-bg"><i class="fa fa-phone"></i></span>
                <span> +1 (888) 966-5460 </span>
            </a>
        </div>