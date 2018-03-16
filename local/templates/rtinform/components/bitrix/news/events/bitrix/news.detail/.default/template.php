<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$props = $arResult['PROPERTIES'];?>
<div class="event-detail-page">
    <?if($props['DATE']['VALUE']):?>
        <div class="event-date">
            <?=FormatDate("d.m.Y, H:i", MakeTimeStamp($props['DATE']['VALUE']))?>
            <?if($props['PLACE']['VALUE']):?>, <?=$props['PLACE']['VALUE']?><?endif;?>
        </div>
    <?endif;?>

    <?if(MakeTimeStamp($props['DATE']['VALUE']) > time()):?>
        <div class="register-block">
            <div class="register-block-switcher">
                Регистрация на мероприятие
            </div>
            <div class="form-block">
                * - Поля, обязательные для заполнения
                <form method="post" class="event-register">
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
                    <input type="hidden" name="event" value="<?=$arResult['ID']?>"/>
                    <input type="hidden" name="subject" value="event"/>
                    <input type="reset" value="Очистить" class="button bg-black"/>
                </form>
            </div>
        </div>
    <?endif;?>
    <?if(is_array($arResult['DETAIL_PICTURE'])):?>
        <div class="event-detail-picture"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult["NAME"]?>"/></div>
    <?endif;?>
    <div class="text_block">
        <?=$arResult["DETAIL_TEXT"];?>
    </div>
</div>