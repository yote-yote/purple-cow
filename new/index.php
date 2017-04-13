<?php
/**
 * Created by PhpStorm.
 * User: Fahad Kassim Local
 * Date: 4/13/2017
 * Time: 11:07 AM
 */

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
    <meta name="author" content="Yote Yote" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" />

    <!-- Media Agency Demo Specific Stylesheet -->
    <link rel="stylesheet" href="assets/css/media-agency.css" type="text/css" />
    <!-- / -->
    <link rel=icon type="image/ico" href="assets/images/purple-cow.png" />
    <link rel="stylesheet" href="assets/css/et-line.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Purple Cow | Tanzania's Media Agency</title>


</head>

<body class="" data-loader="14">

<div class="side-cover-wrapper full-screen visible-lg visible-md">
    <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
        <div class="flexslider" style="height: 100% !important;">
            <div class="slider-wrap" style="height: inherit !important;">
                <div class="slide full-screen force-full-screen" style="background: url('assets/images/5.jpg') center right; background-size: cover; height: 100% !important;"></div>
                <div class="slide full-screen force-full-screen" style="background: url('assets/images/2.jpg') center right; background-size: cover; height: 100% !important;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="nobottomborder no-sticky">

        <div id="header-wrap">

            <div class="container-fluid clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php" class="standard-logo" data-dark-logo="assets/images/purple-cow.png"><img src="assets/images/purple-cow.png" alt="Canvas Logo"></a>
                    <a href="index.php" class="retina-logo" data-dark-logo="assets/images/purple-cow.png"><img src="assets/images/purple-cow.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <ul>
                        <li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200"><div>About</div></a></li>
                        <li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Services</div></a></li>
                        <li><a href="#" data-scrollto="#section-portfolio" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Portfolio</div></a></li>
                        <li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Contact</div></a></li>
                    </ul>

                    <div class="header-social-set">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <?php /*
                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>
                        */?>
                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <div class="clear"></div>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div id="section-about" class="container-fluid page-section clearfix">

                <div class="hero-headline bottommargin">
                    <h1>We are Purple Cow,<br>Creative Media Agency,<br>Based in Tanzania.</h1>
                    <span>Established in 2002. We have Designed and Directed for the Biggest Brands in the Industry. Based in a Small City of Tanzania, Dar es Salaam. We specialize in 3D Animation, UI , Brand Building &amp; TV Adverts Concepting.</span>
                </div>

                <a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-dark button-black nomargin">Get Custom Quote</a>

                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-services" class="page-section">

                    <h2 class="bottommargin">Services.</h2>

                    <div class="row clearfix">

                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-desktop"></i></a>
                                </div>
                                <h3>TV Advertising</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-global"></i></a>
                                </div>
                                <h3>Global Presence</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-megaphone"></i></a>
                                </div>
                                <h3>Vast Broadcast</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-tools"></i></a>
                                </div>
                                <h3>Careful Crafting</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>

                        <div class="clear bottommargin-sm"></div>

                        <div class="col-md-7">

                            <div class="accordion accordion-border clearfix">

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Mission</div>
                                <div class="acc_content clearfix">Alex and the team are currently preparing content ataleta Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Do?</div>
                                <div class="acc_content clearfix">Integer posuere erat a ante venenatis Alex and the team are currently preparing content dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Company's Values</div>
                                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies Alex and the team are currently preparing content vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                            </div>

                        </div>

                        <div class="col-md-5">

                            <h4>Clients Say.</h4>

                            <div class="fslider testimonial nopadding noborder noshadow" data-animation="slide" data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Michael is also preparing testimonial from customers Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                                <div class="testi-meta">
                                                    Steve Jobs
                                                    <span>Apple Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Natus voluptatum enim quod necessitatibus quis expedita Michael is also preparing testimonial from customers  harum provident eos obcaecati id culpa corporis molestias.</p>
                                                <div class="testi-meta">
                                                    Collis Ta'eed
                                                    <span>Envato Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Incidunt deleniti blanditiis quas Michael is also preparing testimonial from customers  aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                                <div class="testi-meta">
                                                    John Doe
                                                    <span>XYZ Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-portfolio" class="page-section">

                    <h2 class="bottommargin">Portfolio.</h2>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-3 portfolio-masonry mixed-masonry clearfix">

                        <article class="portfolio-item pf-media pf-icons wide">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-uielements">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons wide">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/4.jpg" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-stack-2"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/11.jpg" alt="Backpack Contents">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-play"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Orange Bag</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/6.jpg" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/one-page/images/portfolio/mixed/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-play"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                    </div><!-- #portfolio end -->

                </div>

                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-contact" class="page-section">

                    <h2 class="bottommargin">Get in Touch.</h2>

                    <div class="row clearfix">

                        <div class="col-md-8">

                            <div class="contact-widget">

                                <div class="contact-form-result"></div>

                                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                    <div class="form-process"></div>

                                    <div class="col_half">
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
                                    </div>
                                    <div class="col_half col_last">
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
                                    </div>

                                    <div class="col_full">
                                        <textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="col_full">
                                        <button class="button button-black noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full hidden">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4>Headquarters.</h4>

                            <div style="font-size: 16px; line-height: 1.7;">
                                <address style="line-height: 1.7;">
                                    Quality Centre<br>
                                    Near Cinema Hall , Blah blah <br>
                                </address>

                                <div class="clear topmargin"></div>

                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> Eunice Will provide this<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> Eunice Will provide this<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> whatsapp@gopurplecow.com
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <div id="copyrights" style="background-color:#111;">
            <div class="container-fluid">

                Copyrights &copy; Purple Cow Media 2017 |  All Rights Reserved
                <p class="text-muted">Powered By <a href="https://yoteyote.com">YoteYote</a></p>

            </div>
        </div>
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="assets/js/functions.js"></script>

<script type="text/javascript">

    jQuery(window).load(function(){

        jQuery(window).resize(function() {
            SEMICOLON.portfolio.portfolioDescMargin();
        });

        var t = setTimeout(function(){ SEMICOLON.portfolio.portfolioDescMargin(); }, 200);

    });

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-97333441-1', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1EEX1cYVVNUWwVMUgNQD1FBG0heQA==","queueTime":0,"applicationTime":0,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>