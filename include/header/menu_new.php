<?
global $arTheme;
$currentHeaderOptions = $arTheme['HEADER_TYPE']['LIST'][ $arTheme['HEADER_TYPE']['VALUE'] ];
$bNarrowHeader = $currentHeaderOptions['ADDITIONAL_OPTIONS']['HEADER_NARROW']['VALUE'] == 'Y';
$bTariffsUseDetail = $GLOBALS['arTheme']['TARIFFS_USE_DETAIL']['VALUE'] === 'Y';

// items cache hack
$_GET['__SHOW_TARIFFS_DETAIL_LINK__'] = $bTariffsUseDetail;
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_new", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "topest",
		"COMPONENT_TEMPLATE" => "menu_new",
		"COUNT_ITEM" => "6",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
			0 => "__SHOW_TARIFFS_DETAIL_LINK__",
			1 => "",
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"NARROW" => $bNarrowHeader
	),
	false
);?>
<?
unset($_GET['__SHOW_TARIFFS_DETAIL_LINK__']);
?>