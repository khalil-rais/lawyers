<?php $images_url = drupal_get_path('theme', 'theme_kmV2').'/images/';  ?>
<div class="page-outer-container">
  <div class="page-wrapper">
  
        <!-- Preloader -->
        <!-- <div class="preloader" style="display: none;"></div> -->
		<div class="preloader"></div>
        
        <!-- Main Header -->
        <?php 
             include(drupal_get_path('theme', 'theme_kmV2').'/templates/header.tpl.php');
        ?>

        
        <!--End Main Header -->

         <!--Main Slider-->
        <section class="main-slider revolution-slider">
            
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        
                        <!--
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/1.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'/main-slider/1.jpg';  ?>  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="right" data-hoffset="-15"
                        data-y="center" data-voffset="-120"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-center">Welcome to the <br>Worldwide Lawyers Association</h1></div>
                        
                        <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="right" data-hoffset="-80"
                        data-y="center" data-voffset="20"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text text-center">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="right" data-hoffset="-200"
                        data-y="center" data-voffset="110"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#" class="theme-btn btn-style-one">Contact Our Attorneys</a></div></div>
                        
                        <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="right" data-hoffset="-200"
                        data-y="center" data-voffset="180"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#" class="normal-link"><span class="icon flaticon-circle-5"></span> View Our Practice Areas</a></div></div>
                        
                        </li>
                        
                        
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/2.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/2.jpg';  ?>  alt=""  data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="-270"
                        data-y="bottom" data-voffset="30"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="logo-image"><img src=<?php echo $images_url.'main-slider/man-image.jpg';  ?> alt=""></div></div>
                        
                        <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-140"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="logo-image"><img src="<?php print $logo; ?>" alt=""></div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-center">Don't fight alone, <br>our attorneys fight for you</h1></div>
                        
                        <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="110"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="phone-no">Call: +321 589 2369</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="180"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#" class="theme-btn btn-style-one">Contact our attorneys</a></div></div>
                        
                        
                        </li>
                        
                        
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/3.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/3.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        
                        -->
						<!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider1_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider1_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">1- Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        -->
                        <!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider3_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider3_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">2- Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        -->
                        
                        <!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider4_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider4_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">3- Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        -->
                        
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider8_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider8_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-120"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-20"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left"><span style="font-size: 50px;">Independent law firms <br>all over the world</span></h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-75"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                        

                        </li>
                        
                        
                        <!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider9_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider9_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">5- Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        -->
                        
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider12_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider12_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-120"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="35"
                        data-y="center" data-voffset="-20"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left"><span style="font-size: 50px;">Independent law firms <br>all over the world</span></h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-75"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                        
                        
                        </li>
                        
                        
                        <!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=<?php echo $images_url.'main-slider/slider15_1920_750.jpg';  ?>  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src=<?php echo $images_url.'main-slider/slider15_1920_750.jpg';  ?>  alt=""  data-bgposition="right top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-150"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="smaller-title">Who We Are</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="text-left">7- Independent law firms <br>all over the world</h1></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="60"
                        data-speed="1500"
                        data-start="1500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text">We Have Helped Thousands of People to Get Relief From National Wide Fights <br>WrongfullDenials. Now They Trusted Our Attorneys.</div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="150"
                        data-speed="1500"
                        data-start="2000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="text-center"><a href="#our-latest-news" class="theme-btn btn-style-one">Our Latest News</a></div></div>
                        
                        </li>
                        
						-->
						
						
						
						

						
						
                        
                    </ul>
                    
                </div>
            </div>
        </section>       
      
        <!--Two Column Fluid Section-->
        <section class="our-presence">

            <div class="auto-container">
                <div class="styled-heading">
                    <h2>Our Presence in the World</h2>
                </div>
               <?php print render($page['footer_advertise']); ?> 
           </div>
        </section>
        <!--Services Style One-->
        <section class="services-style-one">
            <div class="auto-container">
                  <div class="row clearfix">
                  
                    <!--Default Service Column-->
                    <article class="default-service-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="service-header">
                                <div class="icon"><span class="flaticon-social"></span></div>
                                <h4 id="about_us">Who We Are</h4>
                                <h3>Worldwide Lawyers Association</h3>
                            </div>
                            <div class="text-content">
                                <div class="text">
                                    <p>WLA is a network of law firms specialized in Cross-Border Transactions, International Arbitration Proceedings and Dispute Resolution which has been set up to address the legal challenges of globalization.</p>
                                </div>
                                
                                <a href="who_we_are" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </article>
                    
                    <!--Default Service Column-->
                    <article class="default-service-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="service-header">
                                <div class="icon"><span class="flaticon-law"></span></div>
                                <h4>Our Values</h4>
                                <h3>Standards that meet Client Satisfaction</h3>
                            </div>
                            <div class="text-content">
                                <div class="text">
                                    <p>Members of WLA share the same values in providing tailor-made, locally-based or cross-border services that satisfy and meet the clients’ needs and expectations. Every member of WLA delivers the highest standards, the best value and the most commercially relevant advice.</p>
                                </div>
                                
                                <a href="our_values" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </article>
                    <!--Default Service Column-->
                    <article class="default-service-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="service-header">
                                <div class="icon"><span class="flaticon-court"></span></div>
                                <h4>Our Expertise</h4>
                                <h3>A Worldwide Effective Jurists Network</h3>
                            </div>
                            <div class="text-content">
                                <div class="text">
                                    <p>WLA is the result of excellent relationships built over the time amongst law firms in different jurisdictions providing best advice in the most effective manner worldwide.</p>
                                </div>
                                
                                <a href="our_expertise" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </article>
                    <!--Default Service Column-->
                    <article class="default-service-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="service-header">
                                <div class="icon"><span class="flaticon-connection"></span></div>
                                <h4>How to find us</h4>
                                <h3>More than ever, the nearest to You</h3>
                            </div>
                            <div class="text-content">
                                <div class="text">
                                    <p>You can find us in just few seconds, we are all over the world, you can choose the nearest firm to you by clicking the link below.</p>
                                </div>
                                
                                <a href="#block-wla-firm-search-firm-block-main" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </article>                                        
                  </div>
                
              
            </div>
        </section>
          
        <section class="member-search">
            <div class="auto-container">
                   <?php print render($page['highlighted']); ?> 
            </div>    
        </section>    
		
        
        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="auto-container">
                  <div class="slider-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-slider">
                        <li><a href="al_adwani_law_firm"><img src="<?php echo $images_url.'sponsors/al_adwani_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Kuwait</span></div></li>
                        <li><a href="alsindi_law_firm"><img src="<?php echo $images_url.'sponsors/alsindi_logo_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Saudi Arabia</span></div></li>
                        <li><a href="arun_nigam_associates"><img src="<?php echo $images_url.'sponsors/Arun-Nigam_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Hong Kong</span></div></li>
                        <li><a href="bda_studio_legale"><img src="<?php echo $images_url.'sponsors/BDA-StudioLegale-220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Italy</span></div></li>
                        <li><a href="bakouchi_habachi"><img src="<?php echo $images_url.'sponsors/logo3_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Morocco</span></div></li>
						<li><a href="christos_georgiades_associates"><img src="<?php echo $images_url.'sponsors/georgiades_logo_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Cyprus</span></div></li>
						<li><a href="ghada_m_darwish_law_firm"><img src="<?php echo $images_url.'sponsors/ghada_darwish_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Qatar</span></div></li>
						<li><a href="guden_law_firm"><img src="<?php echo $images_url.'sponsors/guden_law_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Turkey</span></div></li>
						<li><a href="innovires"><img src="<?php echo $images_url.'sponsors/Innovires_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Bulgaria</span></div></li>
						<li><a href="kammoun_kallel"><img src="<?php echo $images_url.'sponsors/K_and_K_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Tunisia</span></div></li>
						<li><a href="mahmood_hussain_advocates_legal_consultancy"><img src="<?php echo $images_url.'sponsors/MHLF_Logo_220_150.jpg';  ?>" alt=""></a><div class="logo_country"><span>UAE</span></div></li>
						<li><a href="nankran_mourao_advogados_associados"><img src="<?php echo $images_url.'sponsors/logo-Nankran-e-Mourao_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Brazil</span></div></li>
						<li><a href="santiago_mediano_e_associados"><img src="<?php echo $images_url.'sponsors/Santiago_Mediano_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Portugal</span></div></li>
						<li><a href="sog_law_firm"><img src="<?php echo $images_url.'sponsors/Logo-SOG_220_150.png';  ?>" alt=""></a><div class="logo_country"><span>Serbia</span></div></li>
                    </ul>
                </div>
                
            </div>
        </section>

		
		
        <!--About Section-->
        <section class="about-section">
            <div class="auto-container">
                  <div class="row clearfix">
                  
                    <!--About Company-->
                    <div class="about-company default-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                              <div class="styled-heading">
                              <h2>About WLA</h2>
                            </div>
                            <div class="default-text-box">
                              <p>WLA is an association that brings together several law firms recognized for their solid legal expertise in business law from different countries around the world. They are sharing the same vision and values. Each member firm is committed to providing its customers the best service in the shortest time possible.</p>
                            </div>
                            
                            <!--Columns Outer-->
                            <div class="columns-outer clearfix">
								<!--Image Boxes-->
								<!--
                                <div class="column image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                          <img src="<?php echo $images_url.'resource/default-image-1.jpg'; ?>" alt="">
                                        <a href="#" class="default-overlay-outer">
                                          <div class="inner">
                                                <div class="content-layer">
                                                      <div class="icon"><span class="fa fa-edit"></span></div>
                                                    <h3>Request a Quote</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                
                                <div class="column image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure class="image-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                          <img src="<?php echo $images_url.'resource/default-image-2.jpg'; ?>" alt="">
                                        <a href="#" class="default-overlay-outer">
                                          <div class="inner">
                                                <div class="content-layer">
                                                      <div class="icon"><span class="fa fa-black-tie"></span></div>
                                                    <h3>Investigation</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                
                                
                                <div class="column image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure class="image-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                          <img src="<?php echo $images_url.'resource/default-image-3.jpg'; ?>" alt="">
                                        <a href="#" class="default-overlay-outer">
                                          <div class="inner">
                                                <div class="content-layer">
                                                      <div class="icon"><span class="fa fa-gavel"></span></div>
                                                    <h3>Legal Proceeding</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                !-->
                            </div>
                            <!--
                            <div class="line-styled-heading">
                              <h2>Duis aute irure dolor</h2>
                            </div>
                            <div class="default-text-box">
                              <p>Laboris nisi ut aliquip ex ea commodo consequat duis sed aute irures dolor in some reprehenderit in voluptate velit esse cillum dolore eu fugiate nullas pariatur labour Excepteur sint occaecat cupidatat non proident, sunt inofficia.</p>
                                
                                <div class="quote-text">“We can provide you with a free and confidentioal evaluation”.</div>
                            </div>
                            -->
                            <div class="clearfix">
                              <div class="pull-left"><a href="#pre_webform" class="theme-btn btn-style-one">Keep in Touch</a></div>
                               <!--<div class="pull-right"><p class="phone-info">For all enquiries: <span class="phone">+123.859.1263</span></p></div>-->
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    <!--Company History-->
                    <div class="company-history default-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                              <div class="styled-heading">
                              <h2>Our History</h2>
                            </div>
                            
                            <div class="row clearfix">
                              
                                <!--Timeline Column-->
                                <div class="timeline-column col-md-6 col-sm-6 col-xs-12">
                                    
                                    <!--Company Timeline-->
                                    <div class="company-timeline">
                                          <!--Timeline Block-->
                                        <article class="timeline-block">
                                          <div class="year">2018<div class="curve"><span class="fa fa-caret-down"></span></div></div>
                                            <h3>AGM in New Delhi</h3>
                                            <div class="text"><p>hosted by Corp Comm Legal, Bhumesh Verma.</p></div>
                                        </article>
                                        
                                        <!--Timeline Block-->
                                        <article class="timeline-block">
                                          <div class="year">2017<div class="curve"><span class="fa fa-caret-down"></span></div></div>
                                            <h3>AGM in Milan</h3>
                                            <div class="text"><p>hosted by BdaLaw, Giuseppe Broccoli.</p></div>
                                        </article>

                                        <!--Timeline Block-->
                                        <article class="timeline-block">
                                          <div class="year">2016<div class="curve"><span class="fa fa-caret-down"></span></div></div>
                                            <h3>AGM in Istanbul</h3>
                                            <div class="text"><p>hosted by Guden Law Firm, Ali Guden.</p></div>
                                        </article>

                                        <!--Timeline Block-->
                                        <article class="timeline-block">
                                          <div class="year">2015<div class="curve"><span class="fa fa-caret-down"></span></div></div>
                                            <h3>AGM in Dubai</h3>
                                            <div class="text"><p>hosted by MHLW, Mahmood Hussein</p></div>
                                        </article>

                                        <!--Timeline Block-->
                                        <article class="timeline-block">
                                          <div class="year">2014<div class="curve"><span class="fa fa-caret-down"></span></div></div>
                                            <h3>AGM in Doha</h3>
                                            <div class="text"><p>hosted by Ghada Darwish Law Firm, Ghada Darwish.</p></div>
                                        </article>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <!--Timeline Column-->
                                <div class="carousel-column col-md-6 col-sm-6 col-xs-12">
                                    
                                    <!--Carousel Outer-->
                                    <div class="carousel-outer">
                                          <!--Image Carousel-->
                                        <ul class="image-carousel single-item-carousel">
                                          <li><a href="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" alt=""></a></li>
                                            <li><a href="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" alt=""></a></li>
                                            <li><a href="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $images_url.'resource/default-image-4.jpg'; ?>" alt=""></a></li>
                                        </ul>
                                        
                                    </div>
                                    
                                    <!--Graph Outer-->
                                    <div class="graph-outer">
                                          <!--Progress Chart-->
                                        <div class="chart-outer">
                                          <div class="center-text progress-text"><span class="count">14</span><br>Members</div>
                                            <div class="won-text progress-text"><span class="count">5</span><br>Europe</div>
                                            <div class="hold-text progress-text"><span class="count">6</span><br>MENA</div>
                                            <div class="running-text progress-text"><span class="count">3</span><br>Asia</div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

 
         
        <!--Two Column Fluid Section--> 
		<!--Deactivated following customer request 
        <section class="two-column-fluid"> 
                  <div class="auto-container"> 
                     
                <div class="row clearfix"> 
                     
                    
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 testimonial-column"> 
                        
                        <div class="bg-color-layer"></div> 
                        <div class="bg-image-layer" style="background-image:url(<?php echo $images_url.'background/bg-testimonials.jpg'; ?>)"></div> 
                         
                        <div class="inner-box"> 
                            <div class="carousel-box"> 
                                <div class="styled-heading"><h2>What Our Clients Say</h2></div> 
                                <div class="quote-icon"><span class="fa fa-quote-left"></span></div> 
                                
                                <ul class="testimonial-carousel single-item-carousel"> 
                                     
                                    
                                    <li class="slide-item"> 
                                        <div class="slide-text"><p>How to pursue pleasure rationally  consequences that are extremeely painful or again is there anyones who loves or  pursues or desires to obtain pain of itself because its sed great pleasure get well soon.</p></div> 
                                        <div class="information clearfix"> 
                                            <div class="slide-info pull-left"> 
                                                <figure class="image-thumb"><img src="<?php echo $images_url.'resource/testi-thumb-1.png'; ?>" alt=""></figure> 
                                                <h3>Alex Carolina</h3> 
                                                <p>CEO of RJX Solutions</p> 
                                            </div> 
                                            <div class="signature pull-right"><img src="<?php echo $images_url.'resource/signature-image.png';?>" alt=""></div> 
                                        </div> 
                                    </li> 
                                     
                                    
                                    <li class="slide-item"> 
                                        <div class="slide-text"><p>How to pursue pleasure rationally  consequences that are extremeely painful or again is there anyones who loves or  pursues or desires to obtain pain of itself because its sed great pleasure get well soon.</p></div> 
                                        <div class="information clearfix"> 
                                            <div class="slide-info pull-left"> 
                                                <figure class="image-thumb"><img src="<?php echo $images_url.'resource/testi-thumb-1.png';?>" alt=""></figure> 
                                                <h3>Alex Carolina</h3> 
                                                <p>CEO of RJX Solutions</p> 
                                            </div> 
                                            <div class="signature pull-right"><img src="<?php echo $images_url.'resource/signature-image.png'; ?>" alt=""></div> 
                                        </div> 
                                    </li> 
                                     
                                    
                                    <li class="slide-item"> 
                                        <div class="slide-text"><p>How to pursue pleasure rationally  consequences that are extremeely painful or again is there anyones who loves or  pursues or desires to obtain pain of itself because its sed great pleasure get well soon.</p></div> 
                                        <div class="information clearfix"> 
                                            <div class="slide-info pull-left"> 
                                                <figure class="image-thumb"><img src="<?php echo $images_url.'resource/testi-thumb-1.png';?>" alt=""></figure> 
                                                <h3>Alex Carolina</h3> 
                                                <p>CEO of RJX Solutions</p> 
                                            </div> 
                                            <div class="signature pull-right"><img src="<?php echo $images_url.'resource/signature-image.png';?>" alt=""></div> 
                                        </div> 
                                    </li> 
                                     
                                </ul>
                                 
                            </div> 
                             
                        </div> 
                    </div> 
                     
                    
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 whyus-column"> 
                        <div class="inner-box"> 
                              <div class="styled-heading"><h2>What Our Clients Say</h2></div> 
                            
                            <article class="icon-block"> 
                              <div class="icon wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms"><span class="flaticon-scale"></span></div> 
                                <h3>Fight For Justice</h3> 
                                <div class="text"><p>Seeking justice in the world is a  sed significant emotional and investment when we follow this call, we’re deeply.</p></div> 
                            </article> 
                             
                            
                            <article class="icon-block"> 
                              <div class="icon wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms"><span class="flaticon-baggage"></span></div> 
                                <h3>Best Case Stratergy</h3> 
                                <div class="text"><p>Proving liability in plaintiffs’ personal injury and complex civil litigation can be challenging and requires relent.</p></div> 
                            </article> 
                             
                            
                            <article class="icon-block"> 
                              <div class="icon wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms"><span class="flaticon-people-2"></span></div> 
                                <h3>Experienced Attorneys</h3> 
                                <div class="text"><p>Lawyer Justice offers a broad range of opportunities for Speak Experienced attorneys to work you.</p></div> 
                            </article> 
                             
                        </div> 
                    </div> 
                     
                </div> 
                 
            </div> 
                 
        </section> 
         -->
         
        
        
        <!--News Section-->
        <section id="our-latest-news" class="news-section">
            <div class="auto-container">
            
                <!--Styled Heading-->
                <div class="styled-heading centered">
                    <h2>Our Latest News</h2>
                </div>
                
                <div class="row clearfix">
                <?php print render($page['frontblocattoney']); ?>
                <div class="column featured-news-column col-md-12 col-sm-12 col-xs-12">
                  <a href="/all_news" class="theme-btn read-more pull-right">Read All News</a>
				  <div id="pre_webform"></div>
                </div>
                </div>
                
            </div>
			
        </section>
        
        
        
        <!--Consultation Section-->		
         <?php 
            $nid = 89;
            $wnode = node_load($nid);
            $form = drupal_get_form('webform_client_form_' . $nid, $wnode, array());
            print render($form);
            ?>      
        
      <!--Main Footer-->
        <?php 
             include(drupal_get_path('theme', 'theme_kmV2').'/templates/footer.tpl.php');
        ?>
    
    
  </div><!--Page Wrapper End-->
</div>
