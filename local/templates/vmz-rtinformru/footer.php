<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!$pageIsIndex):?>
	</div> <!--.container-->
	</section> <!--#content-->
<?endif;?>
<section id="clients">
	<div class="container">
		<h3>НАМ ДОВЕРЯЮТ</h3>
		<div class="row slider-clients">
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/vr.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/kamaz.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/kalashnikov.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/pochta.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/shvabe.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/rostec_opk.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/vk.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/rostec_avto.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/roe.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/stankoprom.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/odk.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/kret.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/re.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/oak.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/tdhc.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/nik.png" alt=""></div>
			<div class="col-md-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/clients/rostec_him.png" alt=""></div>
		</div>
	</div>
</section>
<footer>
	<section id="menubottom">
		<div class="<?=$pageIsIndex?'index':'noindex'?>">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main.menubottom", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom_child",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main.menubottom"
	),
	false
);?>
		</div>
	</section>
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 banner">
					<a href="http://rostec.ru/anticorruption/feedback" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/banner-rostec.png"></a>
				</div>
				<div class="col-md-4 info">
				<div><strong>Контактный телефон:</strong></div>
				<div><?$APPLICATION->IncludeFile(SITE_DIR."include/main_phone1.inc", Array(), Array("MODE"=>"text"));?></div>
				<div><strong>Техническая поддержка:</strong></div>
				<div><?$APPLICATION->IncludeFile(SITE_DIR."include/main_phone2.inc", Array(), Array("MODE"=>"text"));?></div>
				</div>
				<div class="col-md-4 socnet">
					<div><strong>Мы в социальных сетях:</strong></div>
					<div>
						<ul class="icons">
							<li><a href="http://vk.com/public102310106" class="fa fa-vk" target="_blank"></a></li>
							<li><a href="https://www.youtube.com/channel/UCW1K67w4CNYTN_cZQ_H8VHw" class="fa fa-youtube-play" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/RTINFORM/" class="fa fa-facebook" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; ООО &laquo;РТ-ИНФОРМ&raquo;, 2012-<?=date('Y');?></p>
					<p>Наименование &laquo;РТ-ИНФОРМ&raquo; и знак являются зарегистрированными товарными знаками ООО &laquo;РТ-ИНФОРМ&raquo;. Использование без разрешения правообладателя запрещено законами РФ.</p>
				</div>
			</div>
		</div>
	</section>
</footer>
<div id="search"><button type="button" class="close">×</button><form action="/search/" method="GET" autocomplete="off"><input type="search" name="q" placeholder="Введите запрос..."></form>
</div>
</body>
</html>

<link rel="icon" type="image/png" href="/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/slick.css">
<link rel="stylesheet" type="text/css" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/vunit-0.2.0.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js"></script>

<script>
	function CopyToClipboard(containerid) {
		if (window.getSelection) {
		    var range = document.createRange();
		     range.selectNode(document.getElementById(containerid));
		     window.getSelection().addRange(range);
		     document.execCommand("Copy");
		     alert("Ссылка скопирована в буфер!") 
		}
	}
	$(document).ready(function(){
		// main page: slick slider news
		$('.slider-news').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			centerMode: false,
			responsive: [
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						centerMode: true,
						arrows: false
					}
				},
				{
					breakpoint: 736,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						centerMode: true,
						arrows: false
					}
				},
			]
		});
		// main page: slick slider clients
		$('.slider-clients').slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			arrows: false,
			centerMode: false,
			autoplay: true,
			pauseOnHover: false,
			autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						autoplay: true,
						centerMode: true
					}
				},
				{
					breakpoint: 736,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						autoplay: true,
						centerMode: true
					}
				}
			]
		});
		// search
		$('a[href="#search"]').on('click', function(event) {
			event.preventDefault();
			$('#search').addClass('open');
			$('#search > form > input[type="search"]').focus();
			});
			$('#search, #search button.close').on('click keyup', function(event) {
			if (event.target == this || event.target.className == 'close' || event.keyCode == 27){
			$(this).removeClass('open');
			}
		});		
		// resheniya
		$('#tab-resheniya').easytabs({animate: false,animationSpeed: "fast"});	
		// main page parallax
		if ($(window).width() > 992) {$(window).scroll(landingParallax);}
		function landingParallax(){
			var scrolled = $(window).scrollTop();
			$(".index > #logo").css({"transform" : "translateY(" + scrolled/20 + "%)"})
			$(".block1-about").css({    "transform" : "translateX(-" + scrolled/120 + "%)"})
			$(".block2-services").css({"transform" : "translateY(" + scrolled/25 + "%)"})
			$(".block2-resheniya").css({"transform" : "translateY(" + scrolled/25 + "%)"})
		}
		// vacancy
		// $('.vacancy_list header').click(function(){
		// 	$(this).toggleClass('active');
		// 	$(this).next('section').slideToggle();
		// });
		// document.getElementById("uploadBtn").onchange = function () {
		// 	document.getElementById("uploadFile").value = this.value;
		// };
		// var parametrs = {
		// 	beforeSubmit:showRequest,
		// 	success:showResponse,
		// 	dataType:'json'
		// };
		// $('.vacancy_list form').ajaxForm(parametrs);
	});
	new vUnit({
		CSSMap: {
			// The selector (VUnit will create rules ranging from .selector1 to .selector100)
			'.vh_height': {
				// The CSS property (any CSS property that accepts px as units)
				property: 'height',
				// What to base the value on (vh, vw, vmin or vmax)
				reference: 'vh'
			},
		},
		onResize: function() {
			console.log('A screen resize just happened, yo.');
		}
	}).init(); // call the public init() method	
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	//Yandex.Metrika counetr
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42965694 = new Ya.Metrika({
                    id:42965694,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42965694" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->