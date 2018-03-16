<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="vacancy_list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="part">
		<header>
			<span><?=$arItem["NAME"]?></span>
		</header>
		<section>
			<?=$arItem["PREVIEW_TEXT"];?>
            <?if($USER->isAuthorized()):?>

                <form method="POST" enctype="multipart/form-data" id="resume-form">
                <input type="hidden" name="vacancy" value="<?=$arItem["NAME"]?>"/>
                <br>
                <div>
                    <input id="uploadFile" disabled="disabled"> <br><br>
                    <div class="fileUpload inform_btn btn-primary"><span>Загрузить резюме</span><input id="uploadBtn" type="file" class="upload" name="add_file" required></div>
                    <input class="submit btn btn-primary" type="submit" />
                </div>
                <!-- <img src="/local/templates/rtinform/img/ajax-loader.gif" /> -->
                <!-- <div class="captcha-block">
                    <input type="text" name="v-code" placeholder="Введите проверочный код" required="required"/>
                    <input type="hidden" name="captcha_sid" value=""/>
                    <img src="/local/templates/rtinform/img/blank.gif" class="captcha-img" alt=""/>
                </div> -->
                </form>
                <br><br>
                <div class="div-success">
                    <div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Резюме успешно отправлено. <br> В ближайшее время с Вами свяжется наш менеджер по персоналу. Спасибо за проявленный интерес к нашей компании!
                    </div>
                </div>
            
            <?endif;?>
		</section>
	</div>
<?endforeach;?>
</div>

<script>
    $(document).ready(function() {
        $(".div-success").css({display:"none"});

        $("#resume-form" ).submit(function( event ) {
            var formData = new FormData($("#resume-form")[0]);
            $.ajax({
                url: "/local/templates/vmz-rtinformru/action/resume.php",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false
            })            
            $(this).css({display: "none"});
            $(".div-success").css({display:"block"});
            event.preventDefault();
        });  
    });     
</script>