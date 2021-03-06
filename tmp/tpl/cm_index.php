<?php 
/**
 * @Project BNC v2 -> Adminuser
 * @File /data/www/superweb/anvui/tmp/tpl/cm_index.php 
 * @Author Quang Chau Tran (quangchauvn@gmail.com) 
 */
if(!defined('BNC_CODE')) {
    exit('Access Denied');
}
?><!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
<meta charset="utf-8">
        <title>AnVui - Đi an về vui</title>
        <meta name="description" content="AnVui - Đi an về vui.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="quangchauvn@gmail.com">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="favicon.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="favicon.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="favicon.png">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="favicon.png">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="<?=$_B['home_theme']?>css/style-agency.css?v=11111111" />

<!-- Modernizr runs quickly on page load to detect features -->
<script src="<?=$_B['home_theme']?>js/modernizr.custom.js"></script>
</head>

<body>

<!-- Page preloader -->
<div id="loading">
<div id="preloader">
<span></span>
<span></span>
</div>
</div>

<!-- Overlay and Star effect -->
<div class="global-overlay">
<div class="overlay skew-part">

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

</div>
</div>

<!-- START - Home/Left Part -->
<section id="left-side">

<!-- Your logo -->
<img src="http://cdn.anvui.vn/uploadv2/web/5/5/informationbasic/2017/04/19/05/12/1492578744_camon.png" alt="" class="brand-logo" />

<div class="content">

<h1 class="text-intro opacity-0">Chỉ còn:
<div id="getting-started"></div>
</h1>

<h2 class="text-intro opacity-0">Giải pháp toàn diện cho nhà xe của bạn sẽ được ra mắt!</h2>

<nav>
<ul>
 
<li>
<a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Đăng ký!</a>
</li>
</ul>
</nav>

</div>

<!-- Social icons -->
<div class="useful-links">

 

</div>

</section>
<!-- END - Home/Left Part -->

 
<!-- START - More Informations/Right Part -->

<!-- Button Cross to close the More Informations/Right Part -->
<button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>

<!-- START - Newsletter Popup -->
<div id="somedialog" class="dialog">

<div class="dialog__overlay"></div>

<div class="dialog__content">

<div class="dialog-inner">

<h4>Đăng ký dùng thử?</h4>

<p>Để lại email để đăng ký dùng thử AnVui sớm nhất!</strong></p>

<!-- Newsletter Form -->
<div id="subscribe">

                <form action="#" id="notifyMe" method="POST">

                    <div class="form-group">

                        <div class="controls">
                            
                        	<!-- Field  -->
                        	<input type="text" id="mail-sub" name="email" placeholder="Điền email của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Điền email của bạn'" class="form-control email srequiredField" />

                        	<!-- Spinner top left during the submission -->
                        	<i class="fa fa-spinner opacity-0"></i>

                            <!-- Button -->
                            <button class="btn btn-lg submit">Đăng ký!</button>

                            <div class="clear"></div>

                        </div>

                    </div>

                </form>

<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
<div class="block-message">

<div class="message">

<p class="notify-valid"></p>

</div>

</div>

        			</div>
        			<!-- /. Newsletter Form -->

</div>
<!-- /. dialog-inner -->

<!-- Button Cross to close the Newsletter Popup -->
<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

</div>
<!-- /. dialog__content -->

</div>
<!-- END - Newsletter Popup -->

<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
        	It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>

            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
<script src="<?=$_B['home_theme']?>js/jquery.min.js"></script>
<script src="<?=$_B['home_theme']?>js/jquery.easings.min.js"></script>
<script src="<?=$_B['home_theme']?>js/bootstrap.min.js"></script>

<!-- Accelerated JavaScript animation JS file -->
<script src="<?=$_B['home_theme']?>js/velocity.min.js"></script> 

<!-- Accelerated JavaScript animation UI JS file -->
<script src="<?=$_B['home_theme']?>js/velocity.ui.min.js"></script> 

<!-- Newsletter plugin -->
<script src="<?=$_B['home_theme']?>js/notifyMe.js"></script>
 

<!-- Slideshow/Image plugin -->
<script src="<?=$_B['home_theme']?>js/vegas.js?v=1"></script>

<!-- Scroll plugin -->
<script src="<?=$_B['home_theme']?>js/jquery.mousewheel.js"></script>

<!-- Custom Scrollbar plugin -->
<script src="<?=$_B['home_theme']?>js/jquery.mCustomScrollbar.js"></script>

<!-- Popup Newsletter Form -->
<script src="<?=$_B['home_theme']?>js/classie.js"></script>
<script src="<?=$_B['home_theme']?>js/dialogFx.js"></script>

<!-- PhotoSwipe Core JS file -->
<script src="<?=$_B['home_theme']?>js/photoswipe.js"></script> 

<!-- PhotoSwipe UI JS file -->
<script src="<?=$_B['home_theme']?>js/photoswipe-ui-default.js"></script>

<!-- Countdown plugin -->
<script src="<?=$_B['home_theme']?>js/jquery.countdown.js"></script>

<script>
$("#getting-started")
// Year/Month/Day Hour:Minute:Second
.countdown("2017/05/24 00:00:00", function(event) {
$(this).text(
event.strftime('%D ngày %H giờ %M phút %S giây')
);
});
</script>

<!-- Main JS File -->
<script src="<?=$_B['home_theme']?>js/main.js"></script>

<!--[if lt IE 10]><script type="text/javascript" src="<?=$_B['home_theme']?>js/placeholder.js"></script><![endif]-->

</body>

</html>