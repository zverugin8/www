<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true ) die();?>

<?//options from \Aspro\Functions\CAsproAllcorp3::showBlockHtml?>
<?$arOptions = $arConfig['PARAMS'];?>

<div class="head-block-wrapper dropdown-select">
    <div class="head-block-item visible-xs bordered rounded-4 dropdown-select__title">
        <span><?=($arOptions['YEAR'] ?:GetMessage($arOptions['ALL_ITEMS_LANG']));?></span>
        <?=CAllcorp3::showIconSvg("down menu-arrow bg-opacity-theme-target fill-theme-target", SITE_TEMPLATE_PATH.'/images/svg/Triangle_down.svg', '', '', true, false);?>
    </div>
    <div class="head-block bordered rounded-4 dropdown-select__list">
        <div class="line-block font_14 line-block--40">
            <?if ($arOptions['HAS_YEAR']):?>
                <a class="line-block__item head-block__item dark_link" href="<?=$GLOBALS['APPLICATION']->GetCurPageParam('', array('year'));?>">
            <?else:?>
                <div class="line-block__item head-block__item head-block__item--active color-theme dark_link">
            <?endif;?>
                    <span class="head-block__item-text"><?=GetMessage($arOptions['ALL_ITEMS_LANG']);?></span>
            <?if ($arOptions['HAS_YEAR']):?>
                </a>
            <?else:?>
                </div>
            <?endif;?>
            <?foreach ($arOptions['ITEMS'] as $value):
                $bSelected = ($arOptions['HAS_YEAR'] && $value == $arOptions['YEAR']);?>
                <?if ($bSelected):?>
                    <div class="line-block__item head-block__item head-block__item--active color-theme dark_link">
                <?else:?>
                    <a 
                        class="line-block__item head-block__item dark_link"
                        href="<?=$GLOBALS['APPLICATION']->GetCurPageParam('year='.$value, array('year'));?>"
                    >
                <?endif;?>
                        <span class="head-block__item-text"><?=$value;?></span>
                <?if ($bSelected):?>
                    </div>
                <?else:?>
                     </a>
                <?endif;?>
            <?endforeach;?>
        </div>
    </div>
</div>