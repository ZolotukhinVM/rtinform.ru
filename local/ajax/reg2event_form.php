<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule("iblock");
	$eventRes = CIBlockElement::GetByID(intval($_REQUEST['ID']));
	if($arEvent = $eventRes->GetNext()){
		$eName = $arEvent['NAME'];
	}
?>
<div class="form-block">
	<form method="post" class="event-register">
		<?if($eName):?>
			<h2><?=$eName?></h2>
		<?endif;?>
		<p>* - Поля, обязательные для заполнения</p>
		<div class="inputs"><input type="text" name="organization" placeholder="Организация *" required/></div>
		<div class="inputs"><input type="text" name="post" placeholder="Должность *" required/></div>
		<div class="inputs"><input type="text" name="surname" placeholder="Фамилия *" required/></div>
		<div class="inputs"><input type="text" name="name" placeholder="Имя *" required/></div>
		<div class="inputs"><input type="text" name="patronymic" placeholder="Отчество *" required/></div>
		<div class="inputs"><input type="text" name="phone" placeholder="Контактный телефон *" required/></div>
		<div class="inputs"><input type="email" name="email" placeholder="E-mail *" required/></div>
		<div class="captcha-block">
			<input type="hidden" name="captcha_sid" value=""/>
			<img src="/local/templates/rtinform/img/blank.gif" class="captcha-img" alt=""/>
			<div class="clear"></div>
			<div class="inputs">
			<input type="text" name="v-code" placeholder="Введите проверочный код" required/>
			</div>
		</div>
		<input type="submit" value="Отправить" class="button"/>
		<input type="hidden" name="event" value="<?=intval($_REQUEST['ID'])?>"/>
		<input type="hidden" name="subject" value="event"/>
		<input type="reset" value="Очистить" class="button bg-black"/>
	</form>
</div>