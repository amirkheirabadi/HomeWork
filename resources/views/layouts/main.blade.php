<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>برق چین | صفحه اصلی</title>
    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <link rel="stylesheet" type="text/css" href="/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/pnotify.custom.min.css"/>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/pnotify.custom.min.js"></script>

    <script>
	jQuery(function(){
	 $(document).ready(function() { 
		//Default Action
            jQuery(function($) {
                var open = false;
                function resizeMenu() {
                    if ($(this).width() < 768) {
                        if (!open) {
                            $("#main-nav").hide();
                        }
                        $("#menu-button").show();
                    }
                    else if ($(this).width() >= 768) {
                        if (!open) {
                            $("#main-nav").show();
                        }
                        $("#menu-button").hide();
                    }
                }
                function setupMenuButton() {
                    $("#menu-button").click(function(e) {
                        e.preventDefault();
                        if (open) {
                            $("#main-nav").fadeOut();
                            $("#menu-button").toggleClass("selected");
                        }
                        else {
                            $("#main-nav").fadeIn();
                            $("#menu-button").toggleClass("selected");
                        }
                        open = !open;
                    });
                }

                $(window).resize(resizeMenu);

                resizeMenu();
                setupMenuButton();
            });
	});
});	
	</script>   
   	<script>
    $(document).ready(function() {
        //Default Action
        $(".tab_content").hide(); //Hide all content
        $("ul.tabbs li:first").addClass("active").show(); //Activate first tab
        $(".tab_content:first").show(); //Show first tab content
        
        //On Click Event
        $("ul.tabbs li").click(function() {
            $("ul.tabbs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content
            var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active content
            return false;
        });
    });
    </script> 
    <script>
        $('#bag').click(function(){
          if( $('#popup_factor').hasClass('display') )
          {  
              $('#popup_factor').removeClass('display') 
          } else {
            $('#popup_factor').addClass('display');
          }
        });
    </script>
    <!-- HTML5 Shim for IE Backward Compatibility-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
    <div class="container">
        <h1 id="logo">
            <a href="#">برق چین</a>
        </h1><!--logo-->
            <div id="reslrlink">
            	<a href="#">ورود</a>
                |
                <a href="#">ثبت نام</a>
            </div><!--login & register link-->
        <div class="clear"></div><!--clear-->
        <div id="subheader">
        	<nav id="nav">
             <a href="#" id="menu-button" style="display:block;">منوهای کاربردی</a>
            	<ul id="main-nav" class="sf-menu">
                	<li><a href="#">لیست محصولات</a></li>
                	<li><a href="#">وارد کننده های ویژه</a></li>
                	<li><a href="#">فروشندگان پیشنهادی</a></li>
                </ul>
            </nav><!--nav-->
            <div id="bag" class="popup left">
                <a href="#">ثبت نام/ورود</a>
            </div><!--shoppingbag-->
        </div><!--sub header-->
    </div><!--container-->
</header><!--header-->
<div class="clear"></div>
<div class="container">
<div id="wrapper">
	<div id="pageboxwrapper">
        <div class="container" id="mainContainer">
            @yield('content')
        </div><!--container-->
    </div><!--pageboxwrapper-->
</div><!--wrapper-->

<div id="sidebar">
		<div class="widget">
			<header class="headline">
				<h3>آخرین اخبار</h3>
			</header><!--Headline-->
			<div class="morepost">
				<ul>
					<li><h3><a href=""><i class="icon fa fa-check"></i>لینک دیگر مطلب بلاگ در اینجاست</a></h3></li>
					<li><h3><a href=""><i class="icon fa fa-check"></i>لینک دیگر مطلب بلاگ در اینجاست</a></h3></li>
					<li><h3><a href=""><i class="icon fa fa-check"></i>لینک دیگر مطلب بلاگ در اینجاست</a></h3></li>
					<li><h3><a href=""><i class="icon fa fa-check"></i>لینک دیگر مطلب بلاگ در اینجاست</a></h3></li>
					<li><h3><a href=""><i class="icon fa fa-check"></i>لینک دیگر مطلب بلاگ در اینجاست</a></h3></li>
				</ul>
			</div><!--lastpost-->
		</div><!--blogs-->
		<div class="widget">
			<header class="headline">
				<h3>تبلیغات</h3>
			</header><!--Headline-->
			<img src="images/offerpic3.jpg" alt="">
		</div><!--blogs-->
</div>
</div>
<div class="clear"></div>
<footer id="footer">
	<div id="topfooter">
    	<div class="container">
        	<div id="social" class="right">
            	<ul>
                	<li class="facebook"><a href="#"></a></li>
                	<li class="twitter"><a href="#"></a></li>
                	<li class="instagram"><a href="#"></a></li>
                </ul>
            </div><!--social-->
            <div id="phonenumbers" class="left">
            	شماره تلفن ها(۴خط): ۰۲۱۳۲۰۸۸
            </div><!--phonenumbers-->
            <div id="emailaddress" class="left">
            	info@barghchin.com
            </div><!--email address-->
        </div><!--container-->
    </div><!--top footer-->
    <div id="mainfooter">
    	<div class="container">
        	<div class="widget">
            	<a href="#">
                	<img alt="#" src="images/enamad.png">
                </a>
            </div><!--widget-->
        	<div class="widget">
            	<ul>
                	<li><a href="#">درباره ما</a></li>
                	<li><a href="#">جوایز و افتخارات</a></li>
                	<li><a href="#">ما در رسانه‌ها</a></li>
                	<li><a href="#">فرصت های شغلی</a></li>
                	<li><a href="#">شرایط اخذ نمایندگی</a></li>
                	<li><a href="#">حریم خصوصی</a></li>
                </ul>
            </div><!--widget-->
        	<div class="widget">
            	<ul>
                	<li><a href="#">ثبت سفارش</a></li>
                	<li><a href="#">پاسخ به پرسش های متداول</a></li>
                	<li><a href="#">شرایط استفاده</a></li>
                	<li><a href="#">شیوه های پرداخت</a></li>
                	<li><a href="#">شیوه های ارسال سفارش</a></li>
                </ul>
            </div><!--widget-->
            <div id="newslettersbox" class="left">
            	عضویت در خبرنامه
                <strong>اولین نفری باشید که مطلع می شوید:</strong>
            <div id="newsletters">
            	<input type="text" class="newsletters_input" value="" placeholder="ایمیل یا شماره تلفن خود را وارد کنید"/>
            	<input type="submit" class="newsletters_submit" value="تأیید ایمیل"/>
            </div><!--search-->
            </div><!--Newsletters-->
        </div><!--container-->
    </div><!--mainfooter-->
    <div id="subfooter">
    	<div class="container">
        	<div id="footermenu">
            	<ul>
                	<li><a href="#">درباره برق چین</a></li>
                	<li><a href="#">فرصت های شغلی</a></li>
                	<li><a href="#">شرایط استفاده</a></li>
                	<li><a href="#">تماس با ما</a></li>
                </ul>
            </div><!--footermenu-->
            <div id="copyright" class="right">
				<span>استفاده از مطالب سايت فقط برای مقاصد غیر تجاری و با ذکر منبع بلامانع است.</span> 
                <span>کليه حقوق اين سايت برای برق چین محفوظ می باشد</span> 
            </div><!--copyright-->
            <div class="yearscopyright">
            برق چین ۱۳۹۴ - ۱۳۹۵
            </div><!--left-->
        </div><!--container-->
    </div><!--subfooter-->
</footer><!--footer-->
<div id="ohsnap" class="notification_place"></div>

@yield('footer')


<script>
$(function(){
 @if(Session::has('flash.alerts'))
    @foreach(Session::get('flash.alerts') as $alert)
        @php
            $thumb = '';
            switch ($alert['level']) {
                case 'warning':
                    $thumb = '<i class="fa fa-warning"></i>';
                    break;

                case 'success':
                    $thumb = '<i class="fa fa-check"></i>';
                    break;

                case 'danger':
                    $thumb = '<i class="fa fa-fire"></i>';
                    break;

                case 'info':
                    $thumb = '<i class="fa fa-bullhorn"></i>';
                    break;
            }
        @endphp
        new PNotify({
            styling: 'brighttheme',
            text: '{{$alert['message']}}',
            position: 'bottom-right',
            timeout: 1000,
            type: '{{$alert['level']}}',
            thumbnail: '<?= $thumb ?>'
        });
        @endforeach
    @endif
    });
    </script>
</body>
</html>
