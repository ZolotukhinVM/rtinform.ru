<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(is_array($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'])){
    foreach($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $img){
        $thumb = CFile::ResizeImageGet($img, array('width'=>9000, 'height'=>56), BX_RESIZE_IMAGE_PROPORTIONAL, false);
        $arResult['PHOTO'][] = array(
            'THUMB' => $thumb['src'],
            'ORIGINAL' => CFile::GetPath($img)
        );
    }
}
