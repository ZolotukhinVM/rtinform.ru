<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
        <?if($APPLICATION->GetProperty('show_pluso')):?>
            <div class="share-block-line"></div>
            <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
            <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,email,bookmark,print"></div>
        <?endif;?>
        <?/* <--- Выводить Блок Новости (объединенный шаблон) --- */?>
		<?if(in_array($wkThisAddr, $wkBlockShow[40])):?>

			<hr class="wk_dashed_line">
			
			<div class="vmz_news_header">
				<div><h2>Новости</h2></div>
				<div><a href="pressroom/news">Все новости</a></div>
				<div class="clear"></div>
			</div>
			
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "wk.news.main.page",
                array(
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "1",
                    "NEWS_COUNT" => "6",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "NAME",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "360000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y"
                ),
                false
            );?>
		<?endif;?>
		<?/* --- Выводить Блок Новости (объединенный шаблон) ---> */?>
		<?/* <--- Выводить Блок Новости (три в ряд) --- */?>
		<?if(in_array($wkThisAddr, $wkBlockShow[41])):?>
			<hr class="wk_dashed_line">
			<h2>Новости и События</h2>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"wk.news.three.in.row",
				array(
					"IBLOCK_TYPE" => "news",
					"IBLOCK_ID" => "1",
					"NEWS_COUNT" => "6",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "NAME",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "360000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => "",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_ADDITIONAL" => ""
				),
				false
			);?>

		<?endif;?>
		<?/* --- Выводить Блок Новости (три в ряд) ---> */?>
		<?/* <--- Выводить Блок Новости (четыре в ряд) --- */?>
		<?if(in_array($wkThisAddr, $wkBlockShow[42])):?>
			<hr class="wk_dashed_line">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"wk.news.four.in.row",
				array(
					"IBLOCK_TYPE" => "news",
					"IBLOCK_ID" => "1",
					"NEWS_COUNT" => "4",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "NAME",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "360000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => "",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_ADDITIONAL" => ""
				),
				false
			);?>

		<?endif;?>

		<?/* --- Выводить Блок Новости (четыре в ряд) ---> */?>
						</div>
					</section>
					<div class="wk_clear"></div>
				</div>
            </div>
            <br><br>
            </div>
            <footer class="main">
                <div class="f-top-block">
                    <div class="f-menu">
                        <?$APPLICATION->IncludeComponent("bitrix:menu","wk.bottom",
                            array(
                                "ROOT_MENU_TYPE" => "bottom",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "USE_EXT" => "N"
                            ),
                            false
                        );?>
                    </div>
                    <div class="f-menu">
                        <?$APPLICATION->IncludeComponent("bitrix:menu","wk.bottom",
                            array(
                                "ROOT_MENU_TYPE" => "bottom2",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "USE_EXT" => "N"
                            ),
                            false
                        );?>
                    </div>
                    <div class="f-address">
                        Контактная информация: <br/>
                        Телефон: +7 (499) 557-06-52 <br/>
                        Техническая поддержка: +7 (495) 287-25-00 (доб. 5555)<br/>
                        E-mail: info@rtinform.ru <br/>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="f-bottom-block">
                    <div class="copyright">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"AREA_FILE_SHOW" => "sect",
								"AREA_FILE_SUFFIX" => "copyright",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</div>
                    <div class="f-banner">
                    	<a href="http://rostec.ru/anticorruption/feedback" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/img/304x100_ROSTEC_banner_HOTLINE.png" /></a>
                    </div>
					<div class="social">
					<a href="http://vk.com/public102310106" class="vk"><img src="/local/templates/rtinform/img/social_vk.png" alt="" /></a><a href="https://www.facebook.com/rtinform" class="f"><img src="/local/templates/rtinform/img/social_f.png" alt="" /></a><a href="https://www.youtube.com/channel/UCW1K67w4CNYTN_cZQ_H8VHw" class="yt"><img src="/local/templates/rtinform/img/social_yt.png" alt="" /></a>
                    </div>
                </div>

                <!--  -->
                <div>
                    <a href="#ring_form"  class="ng_button_order">
                         Заказать звонок
                    </a>
                </div>
                <!--    Форма обратной связи-->
				<div id="ring_form" style="display: none;">
					<form action="/local/templates/webkazan/action/feedback.php" id="ringForm" class="forms">
						<h2 class="title_form_name">Заказать звонок</h2>
						<div class="inputs"><input type="text" id="conname" name="conname" required="required" placeholder="Ваше имя" ></div>
						<div class="inputs"><input type="text" id="conphone" name="conphone" required="required" placeholder="Ваш телефон" ></div>
						<div class="inputs"><input type="text" id="contime" name="conmsg" placeholder="Удобное время"></div>
						<div class="captcha-block">
							<input type="hidden" name="captcha_sid" value=""/>
							<img src="/local/templates/rtinform/img/blank.gif" class="captcha-img" alt=""/>
							<div class="clear"></div>
							<div class="inputs">
								<input type="text" name="v-code" placeholder="Введите проверочный код" required/>
							</div>
						</div>
						<div class="f_right">
							<input type="submit" value="Отправить" class="b-btn__blue" name="btn">
						</div>
					</form>
				</div>


                <div>
                    <a href="#question_form"  class="ng_button_question">
                         Задать вопрос
                    </a>
                </div>
                <!--    Форма обратной связи-->
                <div id="question_form" style="display: none;">
                    <form action="/local/templates/rtinform/action/question.php" id="questionForm" class="forms">
                    <h2 class="title_form_name">Задать вопрос</h2>
                    <div class="inputs">
                        <input type="text" id="qname" name="qname" required="required" placeholder="Ваше имя" >
                    </div>
                    <div class="inputs">
                        <input type="text" id="qphone" name="qphone" required="required" placeholder="Ваш телефон" ><br/>
                    </div>
                    <div class="inputs">
                         <input type="text" id="qemail" name="qemail" placeholder="Ваш e-mail" required="required">
                    </div>
                    <div class="inputs">
                         <textarea id="qquestion" name="qquestion" placeholder="Сообщение" required="required"></textarea>
                    </div>
					<div class="captcha-block">
						<input type="hidden" name="captcha_sid" value=""/>
						<img src="/local/templates/rtinform/img/blank.gif" class="captcha-img" alt=""/>
						<div class="clear"></div>
						<div class="inputs">
							<input type="text" name="v-code" placeholder="Введите проверочный код" required/>
						</div>
					</div>
                    <div class="f_right">
                    <input type="submit" value="Отправить" class="b-btn__blue" name="btn">
                    </div>
                </form>
                </div>
            </footer>
        </div>
        <?/*
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.jcarousel.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/fancybox/jquery.fancybox.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.custom.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.parallax.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.cslider.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.form.js"></script>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/normalize.css" />
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox/jquery.fancybox.css" />
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/sweetalert2/sweetalert2.min.css" />
        */?>
    </body>
</html>
<!--link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/normalize.css" type="text/css"-->
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox/jquery.fancybox.css" type="text/css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/sweetalert2/sweetalert2.min.css" type="text/css">
<link rel="icon" type="image/png" href="/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
