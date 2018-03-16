<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="vacancy_list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="part">
		<header>
			<span><?=$arItem["NAME"]?></span>
		</header>
		<section>
			<?=$arItem["PREVIEW_TEXT"];?>
            <form action="/local/templates/rtinform/action/resume.php" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="vacancy" value="<?=$arItem["NAME"]?>"/>
                <input id="uploadFile" disabled="disabled" />
            <div class="fileUpload inform_btn btn-primary">
                <span>Загрузить резюме</span>
                <input id="uploadBtn" type="file" class="upload" name="add_file"/>
            </div>
            <input class="submit btn btn-primary" type="submit" />
            <img src="/local/templates/rtinform/img/ajax-loader.gif" />
            <div class="captcha-block">
                <input type="text" name="v-code" placeholder="Введите проверочный код" required="required"/>
                <input type="hidden" name="captcha_sid" value=""/>
                <img src="/local/templates/rtinform/img/blank.gif" class="captcha-img" alt=""/>
            </div>
            </form>
		</section>
	</div>
<?endforeach;?>
</div>