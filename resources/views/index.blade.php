@extends('layouts.master')

@section('content')
<div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
<dv class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="main-banner-content">
    <br><br>
<h1>Africa's Dream Made Possible!</h1>
<p>We are here to help young African entrepreneurs and creatives start successful social impact driven organizations and brands</p><a href="{{url('/ralf')}}" class="btn btn-primary">Get Started</a>
</div>
</div>
</div>
</div>
<!--old-->
<section class="payment-experience-area bg-f4fcff ptb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12">
<div class="payment-experience-content">
<h2>Grow with RACE</h2>
<p>
At RACE Africa we enable young passionate innovators, social entrepreneurs and creatives in Africa access quality learning, networking, funding, tech and legal support they need to successfully implement their solutions to solve social problems
</p>

<a href="{{url('/about')}}" class="link-btn">Learn More</a>
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="payment-experience-image text-center">
<img src="{{asset('assets/img/experience-img1.png')}}" alt="image">
</div>
</div>
</div>
<br><br>
<h2 align="center">OUR PROGRAMS</h2>
<br>
<div class="row">
<div class="col-lg-3 col-sm-6 col-md-6">
<div class="single-payment-experience-box">
<div >
<img style="width:100%" src="{{asset('assets/img/favicon.png')}}">
</div>

<h3>RACE LEARNING</h3>
<p>RACE Learning provides online education for new entrepreneurs seeking to build successful organizations.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6">
<div class="single-payment-experience-box">
<div >
<img style="width:100%" src="{{asset('assets/img/favicon.png')}}">
</div>
<h3>RALF</h3>
<p>RACE Africa Leaders Forum Is a  digital community enabling young social innovators and entrepreneurs access learning, networking, funding, Tech and Legal support opportunities.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6">
<div class="single-payment-experience-box">
<div >
<img style="width:100%" src="{{asset('assets/img/favicon.png')}}">
</div>
<h3>Future Africa Submit</h3>
<p>FAS is a summit on sustainability and development and why youth inclusion is crucial for building a sustainable Future for Africa.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6">
<div class="single-payment-experience-box">
<div >
<img width="100%" src="{{asset('assets/img/favicon.png')}}">
</div>
<h3>Vision Forum</h3>
<p>Vision forum brings together a group of young African     entrepreneurs with a profound mindset to discuss on social issues, proffer possible solutions and act on them.</p>
</div>
</div>
</div>
</div>
</section>


<section class="support-area ptb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="support-image">
<img style="background-image: linear-gradient(to bottom, rgba(48, 43, 38, 0.52), rgba(59, 8, 46, 0.73));" src="{{asset('assets/img/support-img1.png')}}" alt="image">

</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="support-content">
<h2>OUR TEAM</h2>
<p>The RACE team is highly motivated and Enthusiastic about its vision. We are young, vibrant and daring, We are young, vibrant & daring; our minds are fixated on what we desire to achieve.</p>
<a href="{{('/about')}}" class="btn btn-primary">Explore Us</a>
</div>
</div>
</div>
</div>
</section>


<section class="business-area ptb-70" style="background: #ff5304;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="business-content">
<h2>Enabling Startups Succeed</h2>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="single-business-box">
     <img style="width: 50%;"src="{{asset('assets\img\se.png')}}">
     <br> <br>
<h3>Start-up education</h3>
<p>For founders who are new to the world of start-ups and businesses, our platform will give you access to Entrepreneurship & Leadership Education.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="single-business-box">
     <img style="width: 50%;"src="{{asset('assets\img\Funding.png')}}">
      <br> <br>
<h3>Funding Opportunities</h3>
<p>Through our funding opportunities powered by our partners you can win grants, access loans, find investors and join incubation programs.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="single-business-box">
    <img style="width: 50%;"src="{{asset('assets\img\lg.png')}}">
    <br> <br>
<h3>Legal support</h3>
<p>Through our legal support opportunity, start-ups can connect with a lawyer to get help in everything that concerns legal matters.</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="single-business-box">
<img style="width: 50%;"src="assets\img\ts.png">
<br> <br>
<h3>Technology support</h3>
<p>For entrepreneurs with ideas that will require technology to engineer it, we provide the best technology talents to join your development team to help you bring your ideas to life.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="business-image">
<img src="assets/img/business-img.jpg" alt="image">
</div>
</div>
</div>
</div>
</section>


<!--<section class="testimonials-area ptb-70">
<div class="container">
<div class="section-title">
<h2>Luvion score 4.8 out of 5, from 55,495 reviews</h2>
<div class="bar"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-testimonials-box">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<h3>John Smith <span>CTO at EnvyThme</span></h3>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-testimonials-box">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<h3>Sarah Taylor <span>CTO at ThemeForest</span></h3>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
<div class="single-testimonials-box">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<h3>James Andy <span>CEO at Envato</span></h3>
</div>
</div>
</div>
</div>
</section>-->


<section class="success-story-area ptb-70 pt-0">
<div class="container">
<div class="section-title">
    <br><br>
<h2>Testimonials</h2>
</div>
<div class="success-story-inner" style="background: #ff5304;">
<div class="success-story-slides owl-carousel owl-theme">
 <div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>I want thank RACE AFRICA for giving me a platform to learn, grow and connect with great minds in Africa. I have been able use the things that I have learnt to grow my organization and create more change in our society. </p>
<h3>Lucky Owoicho  <span>Team Lead at SkillPlug Africa</span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/Lucky Owoicho.jpg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>
I joined RACE Africa Leaders Forum December 2020 and so far, it has truly been a remarkable experience. The personal development programs and Business Advisory opportunity has helped my grow my startup, I am grateful to the everyone on the RACE team for creating such a life changing platform.
</p>
<h3>Dim Chizoba<span>Founder of ZOBA Farms & Agro Company</span></h3>
<a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/DimChizoba.jpg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>I have been able to learn and leverage on the quality information shared on RACE Africa Leaders Forum grow my startup. Joining RACE Africa has been one of the best decisions I have made.  </p>
<h3>Olowojoba Reuben  <span>Founder of BJ Chicken </span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/olo.jpeg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>Hello, I'm Akeem Abdulrasak a young entrepreneur committed to deploying digital solutions to Start-up companies in Africa and a member of RALF.
It's been a great opportunity for me to be a member of this community, within this short space I've been able to network with different professionals who are now business partners that I achieve certain goals with. The support system this community provides has helped me when dealing with investors. I am grateful for a community like RALF.
</p>
<h3>Akeem Abdulrasak <span>Founder of Roomsms </span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/akeem.jpg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>When I wanted to start my company, all I had was an idea putting it together in form of a Business was one of my biggest challenge, after I joined RACE Africa I decided to access the one on one mentorship opportunity, after a series of coaching and mentoring programs I gained much clarity. My company is still growing and I super grateful to this organization for the impact.
</p>
<h3>Bahago Jessica <span>Founder of Eno’s Agro Institute</span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/jessica.jpeg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>I was at point when I needed a mentor to guide me as I ventured into the world of Business and RACE Africa came through for me. I am forever grateful.
</p>
<h3>Adam Zainab  <span>Founder of Room </span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/Zianab.jpg" alt="image">
</div>
</div>
</div>
</div>
<div class="single-success-story-box">
<div class="row m-0 align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="content">
<p>I hold a passion for building an Africa where energy is the key to advancements, which is why I tend to tap into the greenhouse gasses to generate energy for human use.</p>

<p>Being a part of RACE Africa, has been an enlightening journey and I want to thank the whole team for their unending commitment and hard work in building a better and stronger Africa.</p>

<p>RACE Africa is a team you wouldn't want to miss out on. I mean if you are really looking for a team to trust, a team that will always be by you through out the hard times, build you through their wide range of resources, a team to give you a purpose and help you discover your innermost potential then you should search no more because RACE Africa is a community you can trust they have done it for me why won't they do same for you.</p>

<h3>Davidson Ahuruezenma <span>Brand strategist and entrepreneur.</span></h3><a href="" class="btn btn-primary popup-youtube">Watch Video</a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0">
<div class="image">
<img src="assets/img/david.jpg" alt="image">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="global-area ptb-70">
<div class="container">
<div class="section-title">
<h2>Our Organisation in Numbers</h2>
<div class="bar"></div>

</div>
<div class="row align-items-center">
<div class="col-lg-5 col-md-12">
<div class="global-content">
<ul>
<li>100+ Members</li>
<li>10 Campuses</li>
<li>10+ Discovery Teams</li>

</ul>
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="global-image text-center">
<img src="assets/img/global-img.png" alt="image">
</div>
</div>
</div>
</div>
</section>


<!--<section class="payment-features-area ptb-70">
<div class="container">
<div class="payment-features-overview">
<div class="payment-features-image">
<div class="image">
 <img src="assets/img/payment-features1.jpg" alt="image">
</div>
</div>
<div class="payment-features-content">
<div class="content">
<h2>Retail Payment Processing</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#" class="link-btn">Get started now</a>
</div>
</div>
</div>
<div class="payment-features-overview">
<div class="payment-features-content">
<div class="content">
<h2>Online & eCom Payment Processing</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#" class="link-btn">Get started now</a>
</div>
</div>
<div class="payment-features-image">
<div class="image">
<img src="assets/img/payment-features2.jpg" alt="image">
</div>
</div>
</div>
</div>
</section>-->


<section class="get-started-area ptb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="get-started-title">
<h2>Ready to get started?</h2>
<a href="" class="btn btn-primary">Sign Up Now</a>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="get-started-content">
<p>Learn, engage and grow your Start-Up with hundreds of innovators like yourself on RALF.</p>
</div>
</div>
</div>
</div>
</section>


<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.skzfcVBIpe.js"></script><script>eval(mod_pagespeed_wgWswYh5Xw);</script>
<script>eval(mod_pagespeed_sl2JyQGBGz);</script>

<script>eval(mod_pagespeed_wm3_o7s$zZ);</script>

<script src="assets/js/owl.carousel.min.js%2bslick.min.js.pagespeed.jc.putZRIqsHi.js"></script><script>eval(mod_pagespeed_Z8p6IBxvZj);</script>
<script>eval(mod_pagespeed_zUGINO6$WS);</script>

<script src="assets/js/wow.min.js%2banimated.headline.js%2bjquery.magnific-popup.js.pagespeed.jc.VSpx33NcDV.js"></script><script>eval(mod_pagespeed_lRKfZGlzTL);</script>
<script>eval(mod_pagespeed_pyJhampy_m);</script>
<script>eval(mod_pagespeed_muY8yOTmK1);</script>

<script src="assets/js/gijgo.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js%2bjquery.sticky.js%2bjquery.counterup.min.js%2bwaypoints.min.js%2bcontact.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js.pagespeed.jc.V3"></script><script>eval(mod_pagespeed_QZ_ZBAMe$V);</script>
<script>eval(mod_pagespeed_HOn74EeNO6);</script>

<script>eval(mod_pagespeed_9kKB6A5w6I);</script>
<script>eval(mod_pagespeed_atl908spv3);</script>

<script>eval(mod_pagespeed_RfU_6dbWax);</script>
<script>eval(mod_pagespeed_XhUNFUYZHp);</script>
<script>eval(mod_pagespeed_eqtOxnLk0j);</script>
<script>eval(mod_pagespeed_1NnVDOm$jK);</script>
<script src="assets/js/jquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.-LIkdVV7_j.js"></script><script>eval(mod_pagespeed_MtWWN1MSbt);</script>

<script>eval(mod_pagespeed_bcEheDfXrH);</script>
<script>eval(mod_pagespeed_hGUyyqO7BK);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6e0496e83d8b8e14","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</html>
@endsection
